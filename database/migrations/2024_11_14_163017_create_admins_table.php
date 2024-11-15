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
        Schema::create('admins', function (Blueprint $table) {
            $table->id(); // khóa chính tự động kiểu INT
            $table->string('name', 100);
            $table->string('username')->unique(); // Tên tài khoản duy nhất
            $table->string('email')->unique();
            $table->string('password');
            $table->binary('avatar')->nullable(); // lưu ảnh đại diện dưới dạng mã nhị phân
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
