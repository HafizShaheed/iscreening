<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketReputationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_reputations', function (Blueprint $table) {
            $table->id();

            // Reputation Score and Score Analysis
            $table->string('market_reputation_score')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('third_party_id')->nullable();
            $table->integer('team_user_id')->nullable();
            $table->text('score_analysis')->nullable();
            $table->string('Type_of_risk')->nullable();
            $table->integer('status')->default(0)->nullable();

            // File Upload
            for ($i=1; $i <= 6; $i++) { 
                # code...
                $this->offLineFields($table, $i);
            }
            for ($i=1; $i <= 6; $i++) { 
                # code...
                $this->onLineFields($table, $i);
            }

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
        Schema::dropIfExists('market_reputations');
    }

    private function offLineFields(Blueprint $table, $index)
    {
        $table->string("offLine_reference_name_$index")->nullable();
        $table->string("offLine_contact_$index")->nullable();
        $table->string("offLine_email_$index")->nullable();
        $table->string("offLine_company_name_$index")->nullable();
        $table->string("offLine_upload_file_$index")->nullable();
    }
    private function onLineFields(Blueprint $table, $index)
    {
        $table->text("onLine_description_$index")->nullable();
        $table->string("onLine_source_$index")->nullable();
        $table->string("onLine_upload_file_$index")->nullable();
        ;
    }
}
