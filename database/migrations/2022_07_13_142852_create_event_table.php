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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('organizer');
            $table->string('title');
            $table->enum('category', ['Webinar', 'Workshop']);
            $table->string('faculty');
            $table->date('date_and_time');
            $table->string('location');
            $table->string('registration_link');
            $table->text('description')->nullable()->default('text');
            $table->string('poster');
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
        Schema::dropIfExists('event');
    }
};
