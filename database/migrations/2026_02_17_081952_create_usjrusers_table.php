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
        Schema::create('usjrusers', function (Blueprint $table) {
            $table->increments('userid');
            $table->string('username', 255)->unique();
            $table->string('userpassword', 255);
            $table->integer('userempid');
            $table->integer('usertypeid');
            $table->integer('userroleid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_s_j_r_users');
    }
};
