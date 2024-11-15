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
        Schema::create('promotions', function (Blueprint $table) {
            $table->id(); // khóa chính tự động kiểu INT
            $table->string('code', 50);
            $table->decimal('discount', 5, 2);
            $table->timestamp('start_date'); // không cần giá trị mặc định
            $table->timestamp('end_date')->nullable(); // cho phép giá trị NULL
            $table->enum('status', ['active', 'expired']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
