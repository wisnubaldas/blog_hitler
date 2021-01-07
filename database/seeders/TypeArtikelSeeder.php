<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeArtikel;
use League\Csv\Reader;
use League\Csv\Writer;
class TypeArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
      TypeArtikel::truncate();
        $csv = Reader::createFromPath(__DIR__.'/data/type_artikels.csv', 'r');
        $csv->setHeaderOffset(0);
        // $header_offset = $csv->getHeaderOffset(); //returns 0
        // $header = $csv->getHeader(); //returns array header
        $csv->getRecords();
        foreach ($csv as $offset => $record) {
          $array2 = array_map(function($record) {
              return $record === "" ? NULL : $record;
           }, $record); // array_map should walk through $array
           TypeArtikel::create($array2);
        }
    }
}
