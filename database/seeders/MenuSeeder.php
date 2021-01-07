<?php

namespace Database\Seeders;

use League\Csv\Reader;
use League\Csv\Writer;
use Illuminate\Database\Seeder;
use App\Models\Menu;
use DB;
class MenuSeeder extends Seeder
{
  public function __construct()
  {
      $this->file = __DIR__.'/data/menus.csv';
  }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Menu::truncate();
      $csv = Reader::createFromPath($this->file, 'r');
      $csv->setHeaderOffset(0);
      // $header_offset = $csv->getHeaderOffset(); //returns 0
      // $header = $csv->getHeader(); //returns array header
      $csv->getRecords();
      foreach ($csv as $offset => $record) {
        $array2 = array_map(function($record) {
            return $record === "" ? NULL : $record;
         }, $record); // array_map should walk through $array
         Menu::create($array2);
      }
    }
    
}
