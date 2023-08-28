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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('color_head');
            $table->string('title_head_ar');
            $table->string('title_head_en');
            $table->string('price');
            $table->string('category_ar');
            $table->string('category_en');
            $table->string('btn_en');
            $table->string('btn_ar');
            $table->string('btn_color');
            $table->string('desc_en');
            $table->string('desc_ar');
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
        Schema::dropIfExists('packages');
    }
};
