<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColumnsAssetAll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->integer('code_ivanty');
            $table->integer('code_local');
            $table->string('ip');
            $table->string('country');
            $table->string('company_code');
            $table->string('asset_type');
            $table->string('asset_subcategory');
            $table->string('description');
            $table->string('type_server');
            $table->string('physical_server_name');
            $table->string('make');
            $table->string('model');
            $table->string('operation_system');
            $table->string('os_build');
            $table->integer('number_processor');
            $table->integer('diskpace');
            $table->integer('ram');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('assets', function (Blueprint $table) {
            $table->dropColumn('code_ivanty');
            $table->dropColumn('code_local');
            $table->dropColumn('ip');
            $table->dropColumn('country');
            $table->dropColumn('company_code');
            $table->dropColumn('asset_type');
            $table->dropColumn('asset_subcategory');
            $table->dropColumn('description');
            $table->dropColumn('type_server');
            $table->dropColumn('physical_server_name');
            $table->dropColumn('make');
            $table->dropColumn('model');
            $table->dropColumn('operation_system');
            $table->dropColumn('os_build');
            $table->dropColumn('number_processor');
            $table->dropColumn('diskpace');
            $table->dropColumn('ram');
        });
    }
}
