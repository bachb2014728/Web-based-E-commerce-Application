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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->unique();
            $table->string('slug', 100)->unique();
            $table->unsignedBigInteger('category_id');
            $table->decimal('price',11)->default(123.45);
            $table->decimal('sale',11)->default(0);
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('prior')->default(0);
            $table->integer('quantity')->default(1);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
