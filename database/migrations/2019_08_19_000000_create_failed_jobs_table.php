<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /* if (Schema::hasTable('failed_jobs'))
        {
            $file = database_path('seeders/data/failed_jobs.csv');
            $table = DB::table('failed_jobs')->get();
            $file = fopen($file, 'a+');
            foreach ($table as $row) {
                fputcsv($file, (array)$row, ';');
            }
            fclose($file);
        } */
        Schema::dropIfExists('failed_jobs');
    }
}
