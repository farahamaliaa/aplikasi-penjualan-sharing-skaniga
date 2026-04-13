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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // id user
            $table->date('tanggal'); // tanggal pesan
            $table->enum('status', ['pending', 'process', 'done', 'canceled'])->default('pending'); // status pesanan (menunggu konfirmasi, sedang diproses, selesai, dibatalkan)
            $table->integer('total_harga')->default(0); // total harga
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }
};
