<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('court_checks', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('third_party_id')->nullable();
            $table->integer('team_user_id')->nullable();

            $this->directorCourtFields($table, 1);
            $this->directorCourtFields($table, 2);
            $this->directorCourtFields($table, 3);
            $this->directorCourtFields($table, 4);
            $this->directorCourtFields($table, 5);


            $this->companyCourtFields($table, 1);
            $this->companyCourtFields($table, 2);
            $this->companyCourtFields($table, 3);
            $this->companyCourtFields($table, 4);
            $this->companyCourtFields($table, 5);
          
            $table->integer('legal_score')->nullable();
            $table->text('score_analysis')->nullable();
            $table->string('Type_of_risk')->nullable();
            $table->integer('status')->default(0)->nullable();



            $table->timestamps();
        });

        Schema::create('related_party_legals', function (Blueprint $table) {
            $table->id();
            $table->integer('court_check_id')->nullable();
            for ($i=1; $i <= 8; $i++) { 
                # code...
                $this->relatedPartyLegalFields($table, $i);
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
        Schema::dropIfExists('court_checks');
        Schema::dropIfExists('related_party_legals');
    }


    private function directorCourtFields(Blueprint $table, $index)
    {
        $table->string("director_name_$index")->nullable();
        $table->string("director_jurisdiction_$index")->nullable();
        $table->string("director_record_$index")->nullable();
        $table->string("director_subject_matter_$index")->nullable();
    }

    private function companyCourtFields(Blueprint $table, $index)
    {
        $table->string("company_jurisdiction_$index")->nullable();
        $table->string("company_record_$index")->nullable();
        $table->string("company_subject_matter_$index")->nullable();
    }

    private function relatedPartyLegalFields(Blueprint $table, $index)
    {
        $table->string("related_party_legal_name_$index")->nullable();
        $table->string("related_party_legal_jurisdiction_$index")->nullable();
        $table->string("related_party_legal_record_$index")->nullable();
        $table->string("related_party_legal_subject_matter_$index")->nullable();
    }
}
