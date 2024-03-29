<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplianceWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compliance_watches', function (Blueprint $table) {
            $table->id();
            $table->string('tax_fy1')->nullable();
            $table->string('tax_fy2')->nullable();
            $table->string('tax_fy3')->nullable();
            $table->string('tax_fy4')->nullable();
            $table->string('tax_fy5')->nullable();

              $table->string('compliance_score')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('third_party_id')->nullable();
            $table->integer('team_user_id')->nullable();
            $table->text('score_analysis')->nullable();
            $table->string('Type_of_risk')->nullable();

            $table->integer('status')->default(0)->nullable();   
            $table->timestamps();
        });
    

        Schema::create('gsts', function (Blueprint $table) {
            $table->id();
            $table->integer('compliance_watche_id')->nullable();
             // License Information - License 1
             for ($i=1; $i <= 8 ; $i++) { 
                # code...
                $this->addgGtsFields($table, $i);
             }
             // License Information - License 2
             $table->integer('status')->default(0)->nullable();
            $table->timestamps();
        });
        Schema::create('licenses', function (Blueprint $table) {
            $table->id();
            $table->integer('compliance_watche_id')->nullable();
             // License Information - License 1
             for ($i=1; $i <= 8 ; $i++) { 
                # code...
               # code...
               $this->addLicenseFields($table, $i);
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
        Schema::dropIfExists('compliance_watches');
        Schema::dropIfExists('licenses');
        Schema::dropIfExists('gsts');
    }

    private function addLicenseFields(Blueprint $table, $index)
    {
        $table->string("license_name_$index")->nullable();
        $table->string("license_no_$index")->nullable();
        $table->date("date_of_issuance_$index")->nullable();
        $table->date("date_of_expiry_$index")->nullable();
            $table->string("licenses_upload_file_$index")->nullable();

    }
    private function addgGtsFields(Blueprint $table, $index)
    {
        $table->string("gst_number_$index")->nullable();
        $table->date("date_of_filing_$index")->nullable();
        $table->string("gst_upload_file_$index")->nullable();

    }

    

}
