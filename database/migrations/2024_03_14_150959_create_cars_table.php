<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->string('year');
            $table->string('color');
            $table->timestamps();
        });

        DB::table('cars')->insert([
            ['make' => 'Toyota', 'model' => 'Supra', 'year' => '2001', 'color' => 'Orange'],
            ['make' => 'Nissa', 'model' => 'Skyline', 'year' => '1999', 'color' => 'LightBlue'],
            ['make' => 'Ford', 'model' => 'Mustang', 'year' => '1969', 'color' => 'Gray'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
