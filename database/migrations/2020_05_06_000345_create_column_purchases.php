<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnPurchases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->string('location_asset');
            $table->integer('order_number');
            $table->string('warranty_expires');
            $table->string('contracto_maintenance');
            $table->string('contracto_support');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropColumn('location_asset');
            $table->dropColumn('order_number');
            $table->dropColumn('warranty_expires');
            $table->dropColumn('contracto_maintenance');
            $table->dropColumn('contracto_support');
        });
    }
}
