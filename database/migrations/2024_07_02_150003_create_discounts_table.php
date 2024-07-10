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
        // bảng mã giảm giá
        Schema::create('discounts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->decimal('percentage', 5, 2);
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
