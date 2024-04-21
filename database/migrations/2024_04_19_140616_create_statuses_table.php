<?php

use App\Models\Apply;
use App\Models\loker;
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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(loker::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Apply::class)->constrained()->cascadeOnDelete();
            $table->string('status');
            $table->string('surat_interview');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};
