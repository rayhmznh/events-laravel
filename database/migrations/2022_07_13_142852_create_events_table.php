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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('organizer');
            $table->string('title');
            $table->enum('category', ['Webinar', 'Workshop']);
            $table->enum('faculty', ['FIKTI', 'FE', 'FTSP', 'FTI', 'FPSI', 'FSB', 'FIKOM','D3BK','General']);
            $table->datetime('date_and_time');
            $table->string('location');
            $table->string('registration_link');
            $table->text('description')->nullable();
            $table->text('poster')->nullable();
            $table->enum('status', ['Aktif', 'Non-Aktif']);
            $table->integer('view');
            $table->integer('view_link')->default(0);
            $table->integer('id_user');
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
        Schema::dropIfExists('events');
    }
};
