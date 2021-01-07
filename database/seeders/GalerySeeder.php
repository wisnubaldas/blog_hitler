<?php

namespace Database\Seeders;
use League\Csv\Reader;
use League\Csv\Writer;
use Illuminate\Database\Seeder;
use App\Models\Galery;
use DB;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function __construct()
    {
        $this->file = __DIR__.'/data/galeries.csv';
    }

    public function run()
    {
        Galery::truncate();
        $csv = Reader::createFromPath($this->file, 'r');
        $csv->setHeaderOffset(0);
        // $header_offset = $csv->getHeaderOffset(); //returns 0
        // $header = $csv->getHeader(); //returns array header
        $csv->getRecords();
        foreach ($csv as $offset => $record) {
            $array2 = array_map(function($record) {
                return $record === "" ? NULL : $record;
            }, $record); // array_map should walk through $array
            Galery::create($array2);
        }
    }
}
