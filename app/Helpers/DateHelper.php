<?php
namespace App\Helpers;

Use Carbon\Carbon;
Use HDate;

class DateHelper
{
  private static function formatMonth($value){
    $Month = [
      'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember',
    ];
    return $Month[$value-1];
  }

  public static function formatDate($Date){
    $Tanggal = Carbon::Parse($Date)->format('d');
    $Bulan = HDate::formatMonth(Carbon::Parse($Date)->format('m'));
    $Tahun = Carbon::Parse($Date)->format('Y');
    return "{$Tanggal} {$Bulan} {$Tahun}";
  }

  public static function now(){
    return Carbon::now()->format('Y-m-d');
  }
}
