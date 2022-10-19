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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('image', 100);
            $table->string('title_one', 100);
            $table->string('desc_one', 1000);
            $table->string('link_one', 100);
            $table->string('title_two', 100);
            $table->string('desc_two', 1000);
            $table->string('link_two', 100);
            $table->string('title_three', 100);
            $table->string('desc_three', 1000);
            $table->string('link_three', 100);
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
        Schema::dropIfExists('services');
    }
};
