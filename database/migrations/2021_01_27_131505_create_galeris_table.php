<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalerisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('bidang', ['Tim Tulangan', 'Tim Produksi', 'Tim Finishing', 'Tim Utilitas Pabrik'])->nullable();
            $table->string('foto')->nullable();
            $table->longText('keterangan')->nullable();
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
        Schema::dropIfExists('galeris');
    }
}
