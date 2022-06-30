<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePastaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasta', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('type', 50);
            $table->text('image_src');
            $table->string('cook_time', 50);
            $table->string('weight', 10);
            $table->text('description');
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
        Schema::dropIfExists('pasta');
    }
}
