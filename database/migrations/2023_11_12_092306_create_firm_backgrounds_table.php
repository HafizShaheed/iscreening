<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmBackgroundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {



        Schema::create('firm_backgrounds', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('third_party_id')->nullable();
            $table->integer('team_user_id')->nullable();
            $table->integer('incorporation_year')->nullable();
            $table->string('form_of_entity')->nullable();
            $table->integer('no_of_directors')->nullable();
            $table->string('industry')->nullable();
            $table->string('website')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->longText('business_details')->nullable();
            $table->string('ofac_check')->nullable();
            $table->string('regulatory_score')->nullable();
            $table->text('score_analysis')->nullable();
            $table->string('Type_of_risk')->nullable();
            $table->string('file')->nullable();


            $table->string('credit_score')->nullable();
            $table->integer('status')->default(0)->nullable();
            $table->timestamps();
        });

      

        Schema::create('first_directors_firm', function (Blueprint $table) {
            $table->id();
            $table->integer('firm_background_id')->nullable();

            // direction 1
            $this->addDirector1Fields($table, 1);

            // Director Information - Director 2
            $this->addDirector1Fields($table, 2);

            // Director Information - Director 3
            $this->addDirector1Fields($table, 3);
            $this->addDirector1Fields($table, 4);
            $this->addDirector1Fields($table, 5);
            $this->addDirector1Fields($table, 6);
            $this->addDirector1Fields($table, 7);
            $this->addDirector1Fields($table, 8);
            $table->integer('status')->default(0)->nullable();



            $table->timestamps();
        });
        Schema::create('second_directors_firm', function (Blueprint $table) {
            $table->id();
            $table->integer('firm_background_id')->nullable();


            // direction 2
          $this->addDirector2Fields($table, 1);

            // Director Information - Director 2
            $this->addDirector2Fields($table, 2);

            // Director Information - Director 3
            $this->addDirector2Fields($table, 3);
            $this->addDirector2Fields($table, 4);
            $this->addDirector2Fields($table, 5);
            $this->addDirector2Fields($table, 6);
            $this->addDirector2Fields($table, 7);
            $this->addDirector2Fields($table, 8);

            $table->integer('status')->default(0)->nullable();

            $table->timestamps();
        });
        Schema::create('third_directors_firm', function (Blueprint $table) {
            $table->id();
            $table->integer('firm_background_id')->nullable();

            // direction 3
            $this->addDirector3Fields($table, 1);

            // Director Information - Director 2
            $this->addDirector3Fields($table, 2);

            // Director Information - Director 3
            $this->addDirector3Fields($table, 3);
            $this->addDirector3Fields($table, 4);
            $this->addDirector3Fields($table, 5);
            $this->addDirector3Fields($table, 6);
            $this->addDirector3Fields($table, 7);
            $this->addDirector3Fields($table, 8);
            $table->integer('status')->default(0)->nullable();

            $table->timestamps();
        });

        Schema::create('related_parties_firms', function (Blueprint $table) {
            $table->id();
            $table->integer('firm_background_id')->nullable();

            // direction 3
            for ($i=1; $i <= 8 ; $i++) { 
                # code...
                $this->relatedPartyFields($table, $i);
            }

         
            $table->integer('status')->default(0)->nullable();

            $table->timestamps();
        });
        Schema::create('business_ownership_patterns_firms', function (Blueprint $table) {
            $table->id();
            $table->integer('firm_background_id')->nullable();

            // direction 3
            for ($i=1; $i <= 8 ; $i++) { 
                # code...
                $this->businessOwnershipPatternsFields($table, $i);
            }

         
            $table->integer('status')->default(0)->nullable();

            $table->timestamps();
        });
        Schema::create('adhar_partner_details', function (Blueprint $table) {
            $table->id();
            $table->integer('firm_background_id')->nullable();

            // direction 3
            for ($i=1; $i <= 8 ; $i++) { 
                # code...
            $this->addDirectorInfoADharFields($table, $i);

            }

         
            $table->integer('status')->default(0)->nullable();

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
        Schema::dropIfExists('first_directors_firm');
        Schema::dropIfExists('second_directors_firm');
        Schema::dropIfExists('third_directors_firm');
        Schema::dropIfExists('related_parties_firms');
        Schema::dropIfExists('firm_backgrounds');
        Schema::dropIfExists('business_ownership_patterns_firms');
        
    }

    private function businessOwnershipPatternsFields(Blueprint $table, $index)
    {
        $table->string("business_patterns_name_of_the_shareholder_$index")->nullable();
        $table->date("business_patterns_appointment_date_$index")->nullable();
        $table->text("business_patterns_shareholding_in_the_entity_$index")->nullable();
   

    }

  

    private function relatedPartyFields(Blueprint $table, $index)
    {
        $table->string("Related_party_name_$index")->nullable();
        $table->string("Related_party_relation_$index")->nullable();
        $table->text("Related_party_comments_$index")->nullable();
    }

    private function addDirectorInfoADharFields(Blueprint $table, $index)
    {
        $table->string("name_$index")->nullable();
        $table->string("pan_$index")->nullable();
        $table->string("aadhar_$index")->nullable();
        $table->date("date_of_appointment_$index")->nullable();
        $table->string("educational_background_$index")->nullable();
        $table->string("din_$index")->nullable();
        $table->string("licenses_upload_file_aadhar_$index")->nullable();
        $table->string("licenses_upload_file_pan_$index")->nullable();
        
    }

    private function addDirector1Fields(Blueprint $table, $index)
    {
        $table->string("director_name_1_$index")->nullable();
        $table->string("company_name_1_$index")->nullable();
        $table->string("cin_1_$index")->nullable();
        $table->string("company_status_1_$index")->nullable();
        $table->date("appointment_date_1_$index")->nullable();
        $table->string("business_of_entity_1_$index")->nullable();
        $table->text("business_conflict_1_$index")->nullable();
    }
    private function addDirector2Fields(Blueprint $table, $index)
    {
        $table->string("director_name_2_$index")->nullable();
        $table->string("company_name_2_$index")->nullable();
        $table->string("cin_2_$index")->nullable();
        $table->string("company_status_2_$index")->nullable();
        $table->date("appointment_date_2_$index")->nullable();
        $table->string("business_of_entity_2_$index")->nullable();
        $table->text("business_conflict_2_$index")->nullable();
    }

    private function addDirector3Fields(Blueprint $table, $index)
    {
        $table->string("director_name_3_$index")->nullable();
        $table->string("company_name_3_$index")->nullable();
        $table->string("cin_3_$index")->nullable();
        $table->string("company_status_3_$index")->nullable();
        $table->date("appointment_date_3_$index")->nullable();
        $table->string("business_of_entity_3_$index")->nullable();
        $table->text("business_conflict_3_$index")->nullable();
    }
}







