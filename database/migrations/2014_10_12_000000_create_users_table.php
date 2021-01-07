<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\Csv\Reader;
use League\Csv\Writer;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

// use App\Models\User;
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        $this->backup('users');
        Schema::dropIfExists('users');
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
                $writer->insertOne(['id','name','email','email_verified_at','password','remember_token']);
                $x = collect($table)->map(function ($item, $key) {
                    return collect($item)->except(['created_at','updated_at'])->toArray();
                })->toArray();
                
                $writer->insertAll($x); 
            }
        }
    }
}
