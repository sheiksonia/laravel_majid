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
        Schema::create('product_models', function (Blueprint $table) {
            $table->increments("id");
            $table->string("pname");
            $table->string("pdes")->nullable();
            $table->string("cat")->nullable();
            $table->string("scat")->nullable();
            $table->integer("price");
            $table->integer("status")->comment("1 for active 2 for inactive 3 for pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_models');
    }
};
