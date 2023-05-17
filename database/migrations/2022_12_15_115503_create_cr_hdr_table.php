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
        Schema::create('crhdrs', function (Blueprint $table) {
            $table->id();
            $table->cr_nm();
            $table->cr_seats();
            $table->cr_eligibile();
            $table->cr_certify();
            $table->cr_dur();
            $table->cr_price();
            $table->created_at();
            $table->updated_at();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('crhdrs');
    }
};
