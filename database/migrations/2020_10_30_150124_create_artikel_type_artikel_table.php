<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use League\Csv\Writer;
class CreateArtikelTypeArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_type_artikel', function (Blueprint $table) {
            $table->id();
            $table->integer('artikel_id');
            $table->integer('type_artikel_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->backup('artikel_type_artikel');
        Schema::dropIfExists('artikel_type_artikel');
    }
    protected function backup($tName)
    {
        if (Schema::hasTable($tName))
            {
                $file = database_path('seeders/data/'.$tName.'.csv');
                $table = DB::table($tName)->get();
                if($table->count() > 0)
                {
                    $writer = Writer::createFromPath($file, 'w+');
                    $writer->insertOne(['id','artikel_id','type_artikel_id']);
                    $x = collect($table)->map(function ($item, $key) {
                        return collect($item)->except(['created_at','updated_at'])->toArray();
                    })->toArray();
                    $writer->insertAll($x); //using an array
                }
            }
    }
}
