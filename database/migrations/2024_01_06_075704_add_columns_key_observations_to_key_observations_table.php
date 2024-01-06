<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsKeyObservationsToKeyObservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('key_observations', function (Blueprint $table) {
            for ($i=1; $i <=25 ; $i++) {
                $table->text('key_observation_'.$i)->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('key_observations', function (Blueprint $table) {
            for ($i=1; $i <=25 ; $i++) {
                $table->dropColumn('key_observation_'.$i);
            }
        });


    }
}
