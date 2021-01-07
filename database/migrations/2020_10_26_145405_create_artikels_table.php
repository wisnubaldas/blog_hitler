<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\Csv\Reader;
use League\Csv\Writer;
use Illuminate\Support\Facades\DB;

class CreateArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikels', function (Blueprint $table) {
            $table->id();
            $table->integer('writer_id');
            $table->string('title');
            $table->text('body');
            $table->text('image');
            $table->string('refrensi')->nullable();
            $table->string('link')->nullable();
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
        $this->backup('artikels');
        Schema::dropIfExists('artikels');
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
                    $writer->insertOne(['id','writer_id','title','body','image','refrensi','link']);
                    $x = collect($table)->map(function ($item, $key) {
                        return collect($item)->except(['created_at','updated_at'])->toArray();
                    })->toArray();
                    $writer->insertAll($x); //using an array
                }
            }
    }
}
