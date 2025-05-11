<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {

        // 1. Users tabel
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'dokter', 'pasien']);
            $table->timestamps();
        });

        // 2. Dokters
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('no_dokter', 20)->unique();
            $table->string('nama', 100);
            $table->string('spesialis', 100);
            $table->timestamps();
        });

        // 3. Pasiens
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('no_pasien', 20)->unique();
            $table->string('nama', 100);
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->timestamps();
        });

        // 4. Daftars
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade');
            $table->foreignId('dokter_id')->constrained('dokters')->onDelete('cascade');
            $table->date('tanggal_daftar');
            $table->text('keluhan');
            $table->text('diagnosis')->nullable();
            $table->text('tindakan')->nullable();
            $table->timestamps();
        });

        // 5. Reseps
        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pasien_id')->constrained('pasiens')->onDelete('cascade');
            $table->foreignId('daftar_id')->constrained('daftars')->onDelete('cascade');
            $table->string('nama_obat', 100);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('reseps');
        Schema::dropIfExists('daftars');
        Schema::dropIfExists('pasiens');
        Schema::dropIfExists('dokters');
        Schema::dropIfExists('users');
    }
};
