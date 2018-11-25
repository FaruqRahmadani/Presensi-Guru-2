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

  public static function formatPeriode($date){
    $Bulan = HDate::formatMonth(Carbon::Parse($date)->format('m'));
    $Tahun = Carbon::Parse($date)->format('Y');
    return "{$Bulan} {$Tahun}";
  }

  public static function now(){
    return Carbon::now()->format('Y-m-d');
  }

  public static function Hari($index=null){
    $hari = [
      1 => 'Senin',
      2 => 'Selasa',
      3 => 'Rabu',
      4 => 'Kamis',
      5 => 'Jumat',
      6 => 'Sabtu',
      7 => 'Minggu',
    ];
    if (!$index) return $hari;
    return $hari[$index];
  }

  public static function isLessOrEqualDate($date1, $date2){
    $date1 = Carbon::parse($date1)->startOfDay();
    $date2 = Carbon::parse($date2)->startOfDay();
    if ($date1 <= $date2) return true;
    return false;
  }
}
