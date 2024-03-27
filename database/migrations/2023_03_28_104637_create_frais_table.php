<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frais', function (Blueprint $table) {
            $table->id();
            $table->string('num_recu');
            $table->string('nom');
            $table->string('post_nom');
            $table->string('prenom');
            $table->float('franc')->nullable();
            $table->float('dollar')->nullable();
            $table->string('trimestre')->nullable();
            $table->string('classe')->nullable();
            $table->string('cycle')->nullable();
            $table->string('annee_frais');
            $table->foreignId('moyekoli_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamp('dat_frais')->nullable();
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
        Schema::dropIfExists('frais');
    }
};
