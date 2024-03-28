<?php

use App\Models\employes;
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
        Schema::create('lokers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(employes::class)->constrained()->cascadeOnDelete();
            $table->string('nama_pekerjaan',25);
            $table->string('nama_perusahaan',25);
            $table->string('lokasi',25);
            $table->string('waktu',25);
            $table->string('gaji',25);
            $table->string('email',25);
            $table->string('expired',25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lokers');
    }
};
