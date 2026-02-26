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
        Schema::create('departments', function (Blueprint $table) {
            $table->integer('deptid')->primary();
            $table->string('deptfullname', 255);
            $table->string('deptshortname', 255);
            $table->integer('deptschoolid');
            $table->foreign('deptschoolid')->references('schoolid')->on('schools')
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
        Schema::dropIfExists('departments');
    }
};
