<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfferStatusTable extends Migration
{
    public function up()
    {
        Schema::create('offer_status', function (Blueprint $table) {
            $table->id();
            $table->string('name')->notNullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offer_status');
    }
}
