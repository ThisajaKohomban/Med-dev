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
            $table->timestamps();
            //name
            $table->string('name');
            //slug
            $table->string('slug');
            //description
            $table->text('description');

            //price
            $table->decimal('price');
            //status tinyint
            $table->tinyInteger('status')->default(0);
            //image
            $table->string('image');
            //qty
            $table->integer('qty')->default(0);


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
