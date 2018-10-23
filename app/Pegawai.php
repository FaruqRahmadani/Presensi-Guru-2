<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use HDate;

class Pegawai extends Model
{
  use SoftDeletes;

  protected $fillable = ['nip', 'nama', 'nuptk', 'sekolah_id', 'tanggal_lahir', 'tempat_lahir', 'jenis_kelamin', 'no_handphone', 'email', 'alamat', 'foto', 'sidikjari_id'];

  protected $appends = ['JenisKelaminText', 'TTL', 'NamaSekolah', 'UUID', 'EditURL'];

  protected $hidden = ['id', 'sekolah_id', 'jenis_kelamin', 'created_at', 'updated_at', 'deleted_at'];

  public function getTTLAttribute(){
    $tanggal = HDate::formatDate($this->tanggal_lahir);
    return "$this->tempat_lahir, $tanggal";
  }

  public function getEditURLAttribute(){
    return route('pegawaiEditForm', ['id' => $this->UUID]);
  }

  public function getNamaSekolahAttribute(){
    return $this->Sekolah->nama;
  }

  public function getJenisKelaminTextAttribute(){
    return $this->jenis_kelamin == 1? "Laki-Laki" : "Perempuan";
  }

  public function Sekolah(){
    return $this->belongsTo('App\Sekolah');
  }

  public function getUUIDAttribute(){
    return encrypt($this->id);
  }
}
