<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinCreatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicin_creates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('medicinName');
            $table->string('medicinQuantity');

            $table->string('medicinPrice');

            $table->string('medicinDescription');

            $table->string('medicinSelect');

            $table->string('diseaseName');
            $table->string('imageupload')->default('ImageFolder/medicine.jpg');
            $table->softDeletes();
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
        Schema::dropIfExists('medicin_creates');
    }
}
