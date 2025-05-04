Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->enum('role', ['admin', 'petugas', 'dokter', 'pasien']);
    $table->string('no_hp')->nullable();
    $table->text('alamat')->nullable();
    $table->timestamps();
});
