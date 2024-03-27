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
        Schema::create('autre_frais', function (Blueprint $table) {
            $table->id();
            $table->float('franc')->nullable();
            $table->float('dollar')->nullable();
            $table->string('categorie')->nullable();
            $table->string('trimestre')->nullable();
            $table->string('date_paye')->timestamps();
            $table->string('anneesco');
            $table->foreignID('moyekoli_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('autre_frais');
    }
};
