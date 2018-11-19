<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PresensiImport implements ToCollection, WithHeadingRow
{
  /**
  * @param Collection $collection
  */
  public function collection(Collection $collection){
    
  }

  public function headingRow(): int
  {
    return 1;
  }
}
