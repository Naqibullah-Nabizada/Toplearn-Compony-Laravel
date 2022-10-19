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
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('desc', 1000);
            $table->string('faq_one', 100);
            $table->string('faq_desc_one', 1000);
            $table->string('faq_two', 100);
            $table->string('faq_desc_two', 1000);
            $table->string('faq_three', 100);
            $table->string('faq_desc_three', 1000);
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
        Schema::dropIfExists('faqs');
    }
};
