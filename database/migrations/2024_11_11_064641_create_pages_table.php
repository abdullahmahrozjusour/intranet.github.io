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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->text('titleEn');
            $table->text('titleAr')->nullable();
            $table->text('shortDescEn')->nullable();
            $table->text('shortDescAr')->nullable();
            $table->longText('descEn');
            $table->longText('descAr')->nullable();
            $table->enum('type',['Mission Vision','Director','Ceo Message']);
            $table->string('status')->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
