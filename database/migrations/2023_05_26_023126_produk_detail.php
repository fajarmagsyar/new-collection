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
        Schema::create('produk_detail', function (Blueprint $table) {
            $table->integer('produk_detail_id')->autoIncrement();
            $table->text('nama_varian')->nullable();
            $table->text('stok')->nullable();
            $table->integer('produk_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk_detail');
    }
};
