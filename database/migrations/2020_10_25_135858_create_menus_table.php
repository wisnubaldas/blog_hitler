<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\Csv\Reader;
use League\Csv\Writer;
use Illuminate\Support\Facades\DB;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->integer('parent_id');
            $table->string('name');
            $table->string('icon');
            $table->string('level');
            $table->text('url')->nullable();
            $table->string('module')->nullable();
            $table->boolean('active')->default(0);
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
        $this->backup('menus');
        Schema::dropIfExists('menus');
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
                    $writer->insertOne(['id','parent_id','name','icon','level','url','module','active']);
                    $x = collect($table)->map(function ($item, $key) {
                        return collect($item)->except(['created_at','updated_at'])->toArray();
                    })->toArray();
                    $writer->insertAll($x); //using an array
                }
            }
    }
}
