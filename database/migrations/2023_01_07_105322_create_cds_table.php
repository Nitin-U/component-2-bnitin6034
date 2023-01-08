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
        Schema::create('cds', function (Blueprint $table) {
            $table->id()->autoincrement();
            $table->string('title');
            $table->string('name')->nullable();
            $table->string('band');
            $table->float('price');
            $table->text('description');
            $table->float('playlength');
            $table->string('image');
            $table->string('category')->default('cd');
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
        Schema::dropIfExists('cds');
    }
};
