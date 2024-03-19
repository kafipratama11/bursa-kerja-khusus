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
        Schema::table('profile_employe', function (Blueprint $table) {
            $table->id('employe_id');
            $table->foreign('employe_id')->references('id')->on('employes')->onDelete('cascade');
            $table->string('name');
            $table->string('lokasi');
            $table->string('email')->unique();
            $table->string('no_telp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profile_employe', function (Blueprint $table) {
            //
        });
    }
};
