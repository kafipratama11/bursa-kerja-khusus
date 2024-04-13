<?php

use App\Models\Employe;
use App\Models\loker;
use App\Models\User;
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
        Schema::create('apply', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Employe::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(loker::class)->constrained()->cascadeOnDelete();
            $table->string('nama',35);
            $table->string('email',25);
            $table->string('no_telp',13);
            $table->string('jenis_kelamin',7);
            $table->string('provinsi',35);
            $table->string('kota',35);
            $table->string('cv');
            $table->string('portofolio');
            $table->string('portofolio_online',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply');
    }
};
