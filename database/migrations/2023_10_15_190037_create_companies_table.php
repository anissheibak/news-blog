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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('envelope');
            $table->text('image_path');
            $table->string('location');
            $table->string('email');
            $table->string('website');
            $table->string('phone');
            $table->text('employees');
            $table->timestamp('established on');
            $table->string('slug')->unique()->nullable();
            $table->string('tags');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
