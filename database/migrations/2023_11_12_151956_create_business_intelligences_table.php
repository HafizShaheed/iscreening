<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessIntelligencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_intelligences', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->integer('third_party_id')->nullable();
            $table->integer('team_user_id')->nullable();
            $table->string('score_analysis')->nullable();
            $table->string('Type_of_risk')->nullable();
            $table->integer('status')->default(0)->nullable();
            // Financial Years


            // Operating Efficiency Ratio
            $table->string('operating_efficiency_ratio_analysis')->nullable();

            // Inventory Turnover Ratio
            $table->string('inventory_turnover_ratio_analysis')->nullable();

            // Days Sales in Inventory
            $table->string('days_sales_in_inventory_analysis')->nullable();

               // Accounts Payable Turnover Ratio
            $table->string('accounts_payable_turnover_ratio_analysis')->nullable();

            $this->addBusinessIntelligencesFYFields($table, "one");
            $this->addBusinessIntelligencesFYFields($table, "two");
            $this->addBusinessIntelligencesFYFields($table, "three");
            $this->addBusinessIntelligencesFYFields($table, "four");
            $this->addBusinessIntelligencesFYFields($table, "five");
            // Efficiency Score
            $table->string('efficiency_score')->nullable();



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
        Schema::dropIfExists('business_intelligences');
    }


    private function addBusinessIntelligencesFYFields(Blueprint $table, $set)
    {
        $table->string("operating_efficiency_ratio_BI_FY_$set")->nullable();

        // Inventory Turnover Ratio
        $table->string("inventory_turnover_ratio_BI_FY_$set")->nullable();

        // Days Sales in Inventory
        $table->string("days_sales_in_inventory_BI_FY_$set")->nullable();

           // Accounts Payable Turnover Ratio
        $table->string("accounts_payable_turnover_ratio_BI_FY_$set")->nullable();
    }
}


