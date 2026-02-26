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
        Schema::create('students', function (Blueprint $table) {
            $table->integer('studid')->primary();
            $table->string('studfirstname', 255);
            $table->string('studlastname', 255);
            $table->string('studmidname', 255)->nullable();
            $table->integer('studschoolid');
            $table->foreign('studschoolid')
               ->references('schoolid')
               ->on('schools')
               ->onDelete('no action')
               ->onUpdate('no action');
            $table->integer('studschooldeptid');
            $table->foreign('studschooldeptid')
               ->references('deptid')
               ->on('departments')
               ->onDelete('no action')
               ->onUpdate('no action');
            $table->integer('studprogid');
            $table->foreign('studprogid')
               ->references('progid')
               ->on('programs')
               ->onDelete('no action')
               ->onUpdate('no action');
            $table->integer('studyear');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
