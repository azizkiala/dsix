<?php

use Carbon\Traits\Date;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('ecole')->nullable();
            $table->string('province')->nullable();
            $table->string('telephone')->unique();
            $table->string('role')->nullable();
            $table->integer('from_to')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('active')->default(0);
            $table->string('password');
            $table->rememberToken();
            $table->timestamp('dat_user')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
