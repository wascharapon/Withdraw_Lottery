<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acc_detail', function (Blueprint $table) {
            $table->id();
            $table->text('id_status');
            $table->string('first_name',50);
            $table->string('last_name',50);
            $table->string('phone',10);
            $table->string('bank',10);
            $table->string('id_bank',10);
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
        Schema::dropIfExists('acc_details');
    }
}
