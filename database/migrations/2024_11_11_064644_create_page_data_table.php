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
        Schema::create('page_data', function (Blueprint $table) {
            $table->id();
            $table->integer('pageId');
            $table->text('logo');
            $table->string('titleEn');
            $table->string('titleAr')->nullable();
            $table->string('nameEn')->nullable();
            $table->string('nameAr')->nullable();
            $table->string('designationEn')->nullable();
            $table->string('designationAr')->nullable();
            $table->longText('descEn')->nullable();
            $table->longText('descAr')->nullable();
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
        Schema::dropIfExists('page_data');
    }
};
