<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rogins', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ages_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('gender');
            $table->string('email');
            $table->string('message');
            $table->text('content')->nullable();
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
        Schema::dropIfExists('rogins');
    }
}
