<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('browsers', function (Blueprint $table) {
            $table->string('initial_release')->nullable();
            $table->string('standard')->nullable();
            $table->string('repository')->nullable();
            $table->string('website')->nullable();
        });
    }


    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::table('browsers', function (Blueprint $table) {
    //         //
    //     });
    // }
};
