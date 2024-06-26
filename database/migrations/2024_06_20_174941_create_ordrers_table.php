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
        Schema::create('ordrers', function (Blueprint $table) {
            $table->id();
            $table->integer('userid');
            $table->string('shipping_phonenumber');
            $table->string('shipping_city');
            $table->string('shipping_postalcode');
            $table->string('product_name');
            $table->integer('quantity');
            $table->integer('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordrers');
    }
};
