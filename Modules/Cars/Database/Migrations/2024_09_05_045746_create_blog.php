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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->string('category',100);
            $table->string('image',100)->nullable();
            $table->string('title',100)->nullable();
            $table->longText('make')->nullable();
            $table->longText('model')->nullable();
            $table->string('color',100)->nullable();
            $table->string('year_of_reg',100)->nullable();
            $table->longText('grade',100)->nullable();
            $table->longText('chassis',100)->nullable();
            $table->longText('score',100)->nullable();
            $table->longText('yom',100)->nullable();
            $table->longText('kms',100)->nullable();
            $table->longText('hrs',100)->nullable();
            $table->longText('engine',100)->nullable();
            $table->longText('fuel')->nullable();
            $table->longText('transmission')->nullable();
            // $table->longText('video_link')->nullable();
        
            $table->longText('status')->nullable();
            $table->tinyInteger('is_active')->default(1);
            $table->longText('price')->nullable();
            $table->Text('price_ru')->nullable();
            $table->Text('price_jpy')->nullable();
            $table->longText('sell_points')->nullable();
            $table->longText('remarks')->nullable();
            $table->tinyInteger('is_ru_market')->nullable();
            $table->tinyInteger('is_na_market')->nullable();
            $table->tinyInteger('sr')->nullable();
            $table->tinyInteger('aw')->nullable();
            $table->tinyInteger('pw')->nullable();
            $table->tinyInteger('ps')->nullable();
            $table->tinyInteger('ab')->nullable();
            $table->Text('engine_type')->nullable();
            $table->longText('int_col')->nullable();
            $table->tinyInteger('abs')->nullable();
            $table->longText('has_video')->nullable();
            $table->longText('outside')->nullable();
            $table->longText('inside')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
