<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingNewColomnToPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // Created by S O H A I L
    public function up()
    {
        //
        Schema::table('package', function (Blueprint $table) {
            $table->string('journey_time');
            $table->string('journey_place');
            $table->string('capacity');
            $table->string('transport');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('package', function (Blueprint $table) {
            $table->dropColumn('journey_time');
            $table->dropColumn('journey_place');
            $table->dropColumn('capacity');
            $table->dropColumn('transport');
        });

    }
}
