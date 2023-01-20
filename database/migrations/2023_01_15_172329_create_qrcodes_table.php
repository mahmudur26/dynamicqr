<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qrcodes', function (Blueprint $table) {
            $table->id();
            $table->string("username");
            $table->string("random_code");
            $table->string("input_text");
            $table->string("dynamic_link");
            $table->string("logo_directory");
            $table->string("logo_name");
            $table->string("dot_color");
            $table->string("eye_color");
            $table->string("dot_style");
            $table->string("eye_style");
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
        Schema::dropIfExists('qrcodes');
    }
};
