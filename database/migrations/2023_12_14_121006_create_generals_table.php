<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('selected_theme')->nullable();
            $table->integer('commission_type')->default(0);
            $table->integer('live_chat')->default(0);
            $table->integer('show_provider_contact_info')->default(0);
            $table->string('layout')->nullable();
            $table->string('lg_header')->nullable();
            $table->string('sm_header')->nullable();
            $table->string('currency_name')->nullable();
            $table->string('currency_icon')->nullable();
            $table->string('currency_position')->nullable();
            $table->string('timezone')->nullable();
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
        Schema::dropIfExists('generals');
    }
}
