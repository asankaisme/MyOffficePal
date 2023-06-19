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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('main_category_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('subCatName')->nullable();
            $table->integer('status')->nullable()->default(1);

            //$table->unsignedBigInteger('main_category_id')->nullable();
            //$table->foreign('main_category_id')->references('id')->on('main_categories')->onUpdate('cascade')->onDelete('restrict');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
