<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShareHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('share_holders', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies');

            $table->string('folio_number')->nullable();
            $table->string('share_holder_name')->nullable();

            $table->integer('no_of_shares_held')->default(0);

            $table->integer('amount')->default(0);

            $table->integer('no_of_shares_held_from')->default(0);
            $table->integer('no_of_shares_held_to')->default(0);

            $table->string('subscription_allotment_date')->nullable();

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
        Schema::dropIfExists('share_holders');
    }
}
