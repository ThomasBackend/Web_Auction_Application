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

            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('starting_price');
            $table->float('current_price')->default('0');
            $table->string('winner_id')->default('no winner');
            $table->integer('active')->default('0');
            $table->integer('delivery')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('active');
        });
    }
    
};
