<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('interviews', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->string('email');
            $table->integer('age');
            $table->string('no_tlp');
            $table->enum('last_education',['SMA', 'SMK', 'Uiversitas']);
            $table->string("education_name");
            $table->string("cv_file");
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interviews');
    }
};
