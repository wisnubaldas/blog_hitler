<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\Csv\Reader;
use League\Csv\Writer;
use Illuminate\Support\Facades\DB;

class CreateGaleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
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
        $this->backup('galeries');
        Schema::dropIfExists('galeries');

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
                    $writer->insertOne(['id','title','description','image']);
                    $x = collect($table)->map(function ($item, $key) {
                        return collect($item)->except(['created_at','updated_at'])->toArray();
                    })->toArray();
                    $writer->insertAll($x); //using an array
                }
            }
    }
}
