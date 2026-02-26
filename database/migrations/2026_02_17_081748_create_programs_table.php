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
        Schema::create('programs', function (Blueprint $table) {
            $table->integer('progid')->primary();
            $table->string('progfullname', 255);
            $table->string('progshortname', 255);
            $table->integer('progschoolid');
            $table->foreign('progschoolid')
               ->references('schoolid')
               ->on('schools')
               ->onDelete('no action')
               ->onUpdate('no action');
            $table->integer('progschooldeptid');
            $table->foreign('progschooldeptid')
               ->references('deptid')
               ->on('departments')
               ->onDelete('no action')
               ->onUpdate('no action');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
