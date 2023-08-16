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
        //
        Schema::table('listings', function (Blueprint $table) {
            $table->string('website');
            $table->string('email');
            $table->string('tags');
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('listings', function (Blueprint $table) {
            $table->dropColumn('website');
            $table->dropColumn('email');
            $table->dropColumn('tags');
            $table->dropColumn('description');
        });
    }

};
