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
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cate_id');
            $table->unsignedBigInteger('subcate_id')->nullable();
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->string('thumbnail');
            $table->json('gallery'); // corrected typo: 'gallary' to 'gallery'
            $table->string('video')->nullable();
            $table->string('sku');
            $table->integer('stock');
            $table->integer('price'); // Adjust precision and scale as needed
            $table->integer('discount')->nullable();
            $table->timestamp('start_date')->nullable(); // corrected field name
            $table->timestamp('end_date')->nullable(); // corrected field name
            $table->string('offer')->default(0);
            $table->string('details')->nullable();
            $table->string('detail_img')->nullable();
            $table->string('how')->nullable();
            $table->json('ing_name')->nullable();
            $table->json('ing_weight')->nullable();
            $table->string('status')->default(0);
            $table->json('tags');
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
