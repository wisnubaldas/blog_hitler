<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHalamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halamen', function (Blueprint $table) {
            $table->id();
            $table->integer('menus_id');
            $table->string('model');
            $table->string('controller');
            $table->string('view');
            $table->string('image');
            $table->string('title');
            $table->string('desc');
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
        /* if (Schema::hasTable('halamen'))
        {
            $file = database_path('seeders/data/halamen.csv');
            $table = DB::table('halamen')->get();
            $file = fopen($file, 'a+');
            foreach ($table as $row) {
                fputcsv($file, (array)$row, ';');
            }
            fclose($file);
        } */
        Schema::dropIfExists('halamen');
    }
}
