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
        Schema::create('tips_kerjas', function (Blueprint $table) {
            $table->id();
            $table->text('judulTipsKerja');
            $table->string('gambarTipsKerja');
            $table->longText('contentTipsKerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tips_kerjas');
    }
};
