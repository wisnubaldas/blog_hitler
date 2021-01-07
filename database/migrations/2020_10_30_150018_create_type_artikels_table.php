<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use League\Csv\Reader;
use League\Csv\Writer;
class CreateTypeArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_artikels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('url')->nullable();
            $table->string('description')->nullable();
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
        $this->backup('type_artikels');
        Schema::dropIfExists('type_artikels');
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
                    $writer->insertOne(['id','name','description']);
                    $x = collect($table)->map(function ($item, $key) {
                        return collect($item)->except(['created_at','updated_at'])->toArray();
                    })->toArray();
                    $writer->insertAll($x); //using an array
                }
            }
    }
}
