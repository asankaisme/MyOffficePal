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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('sub_category_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('assetMake')->nullable();
            $table->string('assetModel')->nullable();
            $table->string('assetName')->nullable();
            $table->string('serialNo')->nullable();
            $table->string('cNo')->nullable();
            $table->text('notes')->nullable();
            $table->string('receivedDate')->nullable();
            $table->string('expiryDate')->nullable();
            $table->integer('status')->nullable()->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assets');
    }
};
