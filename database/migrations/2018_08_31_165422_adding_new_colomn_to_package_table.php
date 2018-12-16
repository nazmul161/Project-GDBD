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
    public function up()
    {
        //
        Schema::table('package', function (Blueprint $table) {
            $table->string('journey_time');
            $table->string('journey_place');
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
        });

    }
}
