<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCookieConsentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cookie_consents', function (Blueprint $table) {
            $table->id();
            $table->string('allow');
            $table->string('border');
            $table->string('corners');
            $table->string('background_color');
            $table->string('text_color');
            $table->string('border_color');
            $table->string('button_color');
            $table->string('btn_text_color');
            $table->string('link_text');
            $table->string('btn_text');
            $table->text('message');
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
        Schema::dropIfExists('cookie_consents');
    }
}
