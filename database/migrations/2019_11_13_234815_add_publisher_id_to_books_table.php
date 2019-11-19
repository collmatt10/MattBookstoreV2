<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublisherIdToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropColumn('publisher');
            $table->bigInteger('publisher_id')->unsigned();

              $table->foreign('publisher_id')->references('id')->on('publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
          $table->dropForeign(['publisher_id']);  //dropping foreign key contrtaint so it can delete column
          $table->dropColumn('publisher_id');
          $table->string('publisher');
        });
    }
}
