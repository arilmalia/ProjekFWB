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
        Schema::create('logins',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['dokter','admin', 'pasien'])->default('admin');
            $table->rememberToken();
            $table->timestamps();
        });
        
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('no_pasien')->unique();
            $table->string('nama');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id')->on('logins')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasiens');
        Schema::dropIfExists('logins');
    }
};
