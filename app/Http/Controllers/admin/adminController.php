<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ThirdParty;
use App\Models\team\TeamUser;
use Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Mail;
use Carbon\Carbon;

use App\Models\BusinessIntelligence;
use App\Models\CourtCheck;

use App\Models\Financial;
use App\Models\FinancialsFindingsFyFive;
use App\Models\FinancialsFindingsFyFour;
use App\Models\FinancialsFindingsFyThree;
use App\Models\FinancialsFindingsFyTwo;
use App\Models\FinancialsFindingsFyOne;

use App\Models\FinancialsRatioAnalysisFyFive;
use App\Models\FinancialsRatioAnalysisFyFour;
use App\Models\FinancialsRatioAnalysisFyThree;
use App\Models\FinancialsRatioAnalysisFyTwo;
use App\Models\FinancialsRatioAnalysisFyOne;

use App\Models\FirmBackground;
use App\Models\FirstDirectorsFirm;
use App\Models\SecondDirectorsFirm;
use App\Models\ThirdDirectorsFirm;
use App\Models\License;

use App\Models\KeyObservation;
use App\Models\MarketReputation;
use App\Models\OnGroundVerification;
use App\Models\TaxReurnCredit;
use Validator;
use PDF;

class adminController extends Controller
{
      //
    function index(){

        $data['title'] = "Admin Dashboard";
        $data['page'] = "Dashboard";
        $data['pageIntro'] = "Introducing DD Dashboard";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $data['getAllUser']=User::all();
         //   $vendoruser=User::where('vendor_status',2)->count();
    	return view('admin.index',$data);
    }



    function attentionRequired(){

        $data['title'] = "Attention Required";
        $data['page'] = "Attention";
        $data['pageIntro'] = "Attention Required";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $data['totaluser']=User::all()->count();
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.pages.attention-required',$data);
    }

    function reportPage(){

        $data['title'] = "Reports Page";
        $data['page'] = "Reports Page";
        $data['pageIntro'] = "Reports Page";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $data['totaluser']=User::all()->count();
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.pages.report-page',$data);
    }

    // company means client
    function companyList(Request $request){

        $data['title'] = "Client Managment";
        $data['page'] = "Client Managment";
        $data['pageIntro'] = "Company List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        $query = User::query();


        if (isset($request->location) && !empty($request->location)) {
            $party_id = (int)$request->input('location');
            $query->where('zone_id', $party_id);

        }
        if (isset($request->Client) && !empty($request->Client)) {
            $clientName = $request->input('Client');
            $query->where(function($query) use ($clientName) {
                $query->orWhere('first_name', 'like', '%' . $clientName . '%')
                      ->orWhere('last_name', 'like', '%' . $clientName . '%')
                      ->orWhere('user_name', 'like', '%' . $clientName . '%')
                      ->orWhere('email', 'like', '%' . $clientName . '%')
                      ->orWhere('industry', 'like', '%' . $clientName . '%')
                      ->orWhere('poc', 'like', '%' . $clientName . '%');
            });
        }





        if (isset($request->status) && !empty($request->status))   {
            $statusMapping = [
                'Active' => 1,
                'In-Active' => 0,

            ];
            $statusString = $request->status;
            $status = isset($statusMapping[$statusString]) ? (int)$statusMapping[$statusString] : null;
            $query->where('status',$status);

        }


        $data['getallclient'] = $query->latest()->get();

            return view('admin.client.index',$data);
    }


    function Edit_company($id){

        $data['title'] = "Client Managment";
        $data['page'] = "Edit Client";
        $data['pageIntro'] = "Company";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

            $data['getAclient'] = User::where('id',$id)->first();
            if (isset($data['getAclient'])) {
                return view('admin.client.edit',$data);
            }else{
                return redirect()->route('admin.companyList');
            }
    }



    function update_company(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'user_name' => 'required|unique:users,user_name,' . $request->id,
            'email' => 'required|email|unique:users,email,' . $request->id,
            'industry' => 'required',
            'poc' => 'required',
            'zone_id' => 'required',
            'role_id' => 'required',
            'password' => 'nullable|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($request->id);

        if (!$user) {
            return redirect()->route('admin.companyList')->with('error', 'Client not found.');
        }

        $user->update([
            'first_name' => $request->first_name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'industry' => $request->industry,
            'poc' => $request->poc,
            'zone_id' => $request->zone_id,
            'role_id' => $request->role_id,
            'status' => $request->clientStatusCheck == 'on' ? '1' : '0'
        ]);

        // Update password if provided
        if ($request->password) {
            $user->update([
                'password' => Hash::make($request->password),

            ]);
        }

        return redirect()->route('admin.companyList')->with('success', 'Client updated successfully!');
    }





    // team list start
    function team_List(Request $request){

        $data['title'] = "Team Managment";
        $data['page'] = "Team Managment";
        $data['pageIntro'] = "Team List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";




        $query = TeamUser::query();



        if (isset($request->TeamMember) && !empty($request->TeamMember)) {
            $TeamMemberName = $request->input('TeamMember');
            $query->where(function($query) use ($TeamMemberName) {
                $query->orWhere('first_name', 'like', '%' . $TeamMemberName . '%')
                      ->orWhere('last_name', 'like', '%' . $TeamMemberName . '%')
                      ->orWhere('user_name', 'like', '%' . $TeamMemberName . '%')
                      ->orWhere('team_email', 'like', '%' . $TeamMemberName . '%');

            });
        }





        if (isset($request->status) && !empty($request->status))   {
            $statusMapping = [
                'Active' => 1,
                'In-Active' => 0,

            ];
            $statusString = $request->status;
            $status = isset($statusMapping[$statusString]) ? (int)$statusMapping[$statusString] : null;
            $query->where('status',$status);

        }


        $data['getallTeamMember'] = $query->latest()->get();
        // dd($data['getallTeamMember']);
            return view('admin.team.index',$data);
    }

    function Edit_team($id){

        $data['title'] = "Team Managment";
        $data['page'] = "Edit Team";
        $data['pageIntro'] = "Team Edit";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $data['getTeamMember'] = TeamUser::where('id',$id)->first();
        if (isset($data['getTeamMember'])) {
            return view('admin.team.edit',$data);
        }else{
            return redirect()->route('admin.team_List');
        }

    }

    function update_team(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [

            'user_name' => 'required|unique:team_users,user_name,' . $request->id,
            'team_email' => 'required|email|unique:team_users,team_email,' . $request->id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = TeamUser::find($request->id);

        if (!$user) {
            return redirect()->route('admin.team_List')->with('error', 'Team not found.');
        }

        $user->update([
            'user_name' => $request->user_name,
            'team_email' => $request->team_email,

            'status' => $request->TeamStatusCheck == 'on' ? '1' : '0'
        ]);

        // Update password if provided
        if ($request->password) {
            $user->update([
                'password' => Hash::make($request->password),

            ]);
        }

        return redirect()->route('admin.team_List')->with('success', 'Team updated successfully!');
    }

    // team list end



    // vender means Third-party list start
    function vender_List(Request $request){

        $data['title'] = "Third-Party Managment";
        $data['page'] = "Third-Party Managment";
        $data['pageIntro'] = "Third-Party List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        // dd( $data['getallThirdParty']);



        $query = ThirdParty::query();


        if (isset($request->ThirdParty) && !empty($request->ThirdParty)) {
            $ThirdPartyName = $request->input('ThirdParty');
            $query->where(function($query) use ($ThirdPartyName) {
                $query->orWhere('third_party_name	', 'like', '%' . $ThirdPartyName . '%')
                      ->orWhere('third_party_email ', 'like', '%' . $ThirdPartyName . '%')
                      ->orWhere('third_party_phone', 'like', '%' . $ThirdPartyName . '%')
                      ->orWhere('third_party_pos', 'like', '%' . $ThirdPartyName . '%')
                      ->orWhere('third_party_address', 'like', '%' . $ThirdPartyName . '%');

            });
        }
        if (isset($request->ClientName) && !empty($request->ClientName)) {
            $client_id = (int)$request->input('ClientName');
            $query->where('user_id', $client_id);
        }
        if (isset($request->location) && !empty($request->location)) {
            $location = (int)$request->input('location');
            $query->where('zone_id', $location);
        }
        if (isset($request->Department) && !empty($request->Department)) {
            $department_id = (int)$request->input('Department');
            $query->where('department_id', $department_id);
        }



        if (isset($request->status) && !empty($request->status))   {
            $statusMapping = [
                'Active' => 1,
                'Pending' => 0,
                'Resubmit' => 2,
                'Completed' => 3,
            ];
            $statusString = $request->status;
            $status = isset($statusMapping[$statusString]) ? (int)$statusMapping[$statusString] : null;
            $query->where('status',$status);

        }


        $data['getallThirdParty'] = $query->latest()->get();
            return view('admin.third-party.index',$data);
    }

    function Edit_vender($id){

        $data['title'] = "Third-Party Managment";
        $data['page'] = "Edit Third-Party";
        $data['pageIntro'] = "Third-Party Edit";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        $data['getThirdParty'] = ThirdParty::where('id',$id)->first();
        if (isset($data['getThirdParty'])) {
            return view('admin.third-party.edit',$data);

        }else{
            return redirect()->route('admin.vender_List');
        }
    }

    // vender  means Third-party list end
    function update_vender(Request $request)
    {
        $validator = Validator::make($request->all(), [



            'third_party_name' => 'required|unique:third_parties,third_party_name,' . $request->id,
            'third_party_email' => 'required|email|unique:third_parties,third_party_email,' . $request->id,
            'user_id' => 'required',
            'third_party_address' => 'required',
            'department_id' => 'required',
            'third_party_pos' => 'required',
            'zone_id' => 'required',
            'third_party_phone' => 'required',
        ]);

        if ($validator->fails()) {
            dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = ThirdParty::find($request->id);

        if (!$user) {
            return redirect()->route('admin.team_List')->with('error', 'Team not found.');
        }

        $user->update([
            'third_party_name' => $request->third_party_name,
            'third_party_email' => $request->third_party_email,
            'user_id' => $request->user_id,
            'third_party_address' => $request->third_party_address,
            'department_id' => $request->department_id,
            'third_party_pos' => $request->third_party_pos,
            'zone_id' => $request->zone_id,
            'third_party_phone' => $request->third_party_phone,


        ]);

        return redirect()->route('admin.vender_List')->with('success', 'Third Party updated successfully!');

    }

     // vender means Reports list start
    function report_List(Request $request){

        $data['title'] = "Reports Management";
        $data['page'] = "Reports Management";
        $data['pageIntro'] = "Reports List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $query = ThirdParty::query();


        if (isset($request->PartyName) && !empty($request->PartyName)) {
            $party_id = (int)$request->input('PartyName');
            $query->where('id', $party_id);

        }
        if (isset($request->clientNameID) && !empty($request->clientNameID)) {
            $client_id = (int)$request->input('clientNameID');
            $query->where('user_id', $client_id);
        }




        if (isset($request->status) && !empty($request->status))   {
            $statusMapping = [
                'Active' => 1,
                'Pending' => 0,
                'Resubmit' => 2,
                'Completed' => 3,
            ];
            $statusString = $request->status;
            $status = isset($statusMapping[$statusString]) ? (int)$statusMapping[$statusString] : null;
            $query->where('status',$status);

        }


        $data['getallThirdParty'] = $query->latest()->get();

        return view('admin.report.index', $data);

    }

    function report_View($id){

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports View";
        $data['pageIntro'] = "Reports View";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $data['BusinessIntelligence'] = BusinessIntelligence::where('third_party_id',$id)->first();

        $business_inteligence = [

            $data['BusinessIntelligence']->business_fy1,
            $data['BusinessIntelligence']->business_fy2,
            $data['BusinessIntelligence']->business_fy3,
            $data['BusinessIntelligence']->business_fy4,
            $data['BusinessIntelligence']->business_fy5,

        ];

        // dd($business_inteligence);

        $cleaned_business_inteligence = array_map(function ($item) {
            return $item ? $item[0] : null;
        }, $business_inteligence);

        // Combine the cleaned financial ratios into a single array
        $data['businessInteligenceGrapFY'] = $cleaned_business_inteligence;
        // dd( $data['businessInteligenceGrapFY']);


        $data['CourtCheck'] = CourtCheck::where('third_party_id',$id)->first();
        $data['Financial'] = Financial::where('third_party_id',$id)->first();
        $data['KeyObservation'] = KeyObservation::where('third_party_id',$id)->first();

         $getKwyObservationScore =$data['KeyObservation']->overall_risk_score ? : 0;
        $getKeyObservationOutOf = 100 -  $getKwyObservationScore;
        $data['finalValueforGraKeyObservation'] = [
            $getKwyObservationScore,
            $getKeyObservationOutOf,
        ];

        // dd($finalValueforGraKeyObservation);

        $data['MarketReputation'] = MarketReputation::where('third_party_id',$id)->first();
        $data['OnGroundVerification'] = OnGroundVerification::where('third_party_id',$id)->first();
        $data['TaxReurnCredit'] = TaxReurnCredit::where('third_party_id',$id)->first();

        $data['FinancialsFindingsFyFive'] = FinancialsFindingsFyFive::where('financial_id',$data['Financial']->id)->pluck('revenue_fy_five_finding__1');
        $data['FinancialsFindingsFyFour'] = FinancialsFindingsFyFour::where('financial_id',$data['Financial']->id)->pluck('revenue_fy_four_finding__1');
        $data['FinancialsFindingsFyThree'] = FinancialsFindingsFyThree::where('financial_id',$data['Financial']->id)->pluck('revenue_fy_three_finding__1');
        $data['FinancialsFindingsFyTwo'] = FinancialsFindingsFyTwo::where('financial_id',$data['Financial']->id)->pluck('revenue_fy_two_finding__1');
        $data['FinancialsFindingsFyOne'] = FinancialsFindingsFyOne::where('financial_id',$data['Financial']->id)->pluck('revenue_fy_one_finding__1');

          $financialFindings = [

            $data['FinancialsFindingsFyOne'],
            $data['FinancialsFindingsFyTwo'],
            $data['FinancialsFindingsFyThree'],
            $data['FinancialsFindingsFyFour'],
            $data['FinancialsFindingsFyFive'],
        ];

        $cleanedFinancialFindings = array_map(function ($item) {
            return $item ? $item[0] : null;
        }, $financialFindings);

        // Combine the cleaned financial ratios into a single array
        $data['financialFindingsGrapFY'] = $cleanedFinancialFindings;

        // dd($data['FinancialsFindingsFyFive'] );
        $data['FinancialsRatioAnalysisFyFive'] = FinancialsRatioAnalysisFyFive::where('financial_id',$data['Financial']->id)->pluck('current_ratio_fy_five_1');
        $data['FinancialsRatioAnalysisFyFour'] = FinancialsRatioAnalysisFyFour::where('financial_id',$data['Financial']->id)->pluck('current_ratio_fy_four_1');
        $data['FinancialsRatioAnalysisFyThree'] = FinancialsRatioAnalysisFyThree::where('financial_id',$data['Financial']->id)->pluck('current_ratio_fy_three_1');
        $data['FinancialsRatioAnalysisFyTwo'] = FinancialsRatioAnalysisFyTwo::where('financial_id',$data['Financial']->id)->pluck('current_ratio_fy_two_1');
        $data['FinancialsRatioAnalysisFyOne'] = FinancialsRatioAnalysisFyOne::where('financial_id',$data['Financial']->id)->pluck('current_ratio_fy_one_1');

        $financialRatios = [

            $data['FinancialsRatioAnalysisFyOne'],
            $data['FinancialsRatioAnalysisFyTwo'],
            $data['FinancialsRatioAnalysisFyThree'],
            $data['FinancialsRatioAnalysisFyFour'],
            $data['FinancialsRatioAnalysisFyFive'],
        ];

        // Filter out null values and convert the remaining items to a simple array
        $cleanedFinancialRatios = array_map(function ($item) {
            return $item ? $item[0] : null;
        }, $financialRatios);

        // Combine the cleaned financial ratios into a single array
        $data['financialrationGrapFY'] = $cleanedFinancialRatios;
        // dd(  $data['financialrationGrapFY'] );
        $data['FirmBackground'] = FirmBackground::where('third_party_id',$id)->first();
        $data['FirstDirectorsFirm'] = FirstDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['SecondDirectorsFirm'] = SecondDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['ThirdDirectorsFirm'] = ThirdDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['License'] = License::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['getThirdPartyForID'] = ThirdParty::where('id',$id)->first();
        $data['Getclient'] = User::where('id', $data['getThirdPartyForID']->user_id)->first();
        $data['GetTeaMuser'] = TeamUser::where('id', $data['FirmBackground']->team_user_id)->first();


        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.report.view-reports',$data);
    }

    function Edit_report($id){

        $data['title'] = "Reports Managment";
        $data['page'] = "Edit Reports";
        $data['pageIntro'] = "Reports Edit";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        $data['BusinessIntelligence'] = BusinessIntelligence::where('third_party_id',$id)->first();
        $data['CourtCheck'] = CourtCheck::where('third_party_id',$id)->first();
        $data['Financial'] = Financial::where('third_party_id',$id)->first();
        $data['FirmBackground'] = FirmBackground::where('third_party_id',$id)->first();
        $data['KeyObservation'] = KeyObservation::where('third_party_id',$id)->first();
        $data['MarketReputation'] = MarketReputation::where('third_party_id',$id)->first();
        $data['OnGroundVerification'] = OnGroundVerification::where('third_party_id',$id)->first();
        $data['TaxReurnCredit'] = TaxReurnCredit::where('third_party_id',$id)->first();

        $data['FinancialsFindingsFyFive'] = FinancialsFindingsFyFive::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsFindingsFyFour'] = FinancialsFindingsFyFour::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsFindingsFyThree'] = FinancialsFindingsFyThree::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsFindingsFyTwo'] = FinancialsFindingsFyTwo::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsFindingsFyOne'] = FinancialsFindingsFyOne::where('financial_id',$data['Financial']->id)->first();

        // dd($data['FinancialsFindingsFyFive'] );
        $data['FinancialsRatioAnalysisFyFive'] = FinancialsRatioAnalysisFyFive::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsRatioAnalysisFyFour'] = FinancialsRatioAnalysisFyFour::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsRatioAnalysisFyThree'] = FinancialsRatioAnalysisFyThree::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsRatioAnalysisFyTwo'] = FinancialsRatioAnalysisFyTwo::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsRatioAnalysisFyOne'] = FinancialsRatioAnalysisFyOne::where('financial_id',$data['Financial']->id)->first();

        $data['FirstDirectorsFirm'] = FirstDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['SecondDirectorsFirm'] = SecondDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['ThirdDirectorsFirm'] = ThirdDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['License'] = License::where('firm_background_id',$data['FirmBackground']->id)->first();

        $data['getThirdPartyForID'] = ThirdParty::where('id',$id)->first();


        return view('admin.report.update-report',$data);
    }


    function update_firm_background(Request $request){
        // dd($request->all());
        // $validator = Validator::make($request->all(), [

        //     'third_party_name' => 'required|unique:third_parties,third_party_name,' . $request->id,
        //     'third_party_email' => 'required|email|unique:third_parties,third_party_email,' . $request->id,
        //     'user_id' => 'required',
        //     'third_party_address' => 'required',
        //     'third_party_department' => 'required',
        //     'third_party_pos' => 'required',
        //     'third_party_location' => 'required',
        //     'third_party_phone' => 'required',
        // ]);

        // if ($validator->fails()) {
        //     // dd($validator);
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }
        $firmBackground = FirmBackground::findOrFail($request->FirmBackgroundID);
        if (!$firmBackground) {
            return response()->json(['error' => 'This Reports not found.']);

       }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            // Generate a unique filename
            $filename = 'firmBackground' . '-' . date('dmyHis') . rand() . '.' . $file->getClientOriginalExtension();
            // Move the file to the destination folder
            $file->move(public_path('admin/assets/imgs/firmBacgroundImages/'), $filename);


            $firmBackground->file = $filename;
        }





        $firmBackground->incorporation_year = $request->input('incorporation_year');
        $firmBackground->user_id = $request->input('user_id');
        $firmBackground->team_user_id = $request->input('team_user_id');

        $firmBackground->no_of_directors = $request->input('no_of_directors');
        $firmBackground->form_of_entity = $request->input('form_of_entity');
        $firmBackground->industry = $request->input('industry');
        $firmBackground->website = $request->input('website');
        $firmBackground->address = $request->input('address');
        $firmBackground->city = $request->input('city');
        $firmBackground->state = $request->input('state');
        $firmBackground->pincode = $request->input('pincode');
        $firmBackground->business_details = $request->input('business_details');
        $firmBackground->ofac_check = $request->input('ofac_check');
        $firmBackground->regulatory_score = $request->input('regulatory_score');
        $firmBackground->score_analysis = $request->input('score_analysis');
        $firmBackground->Type_of_risk = $request->input('credit_score') > 60 ? 'High Risk' : ($request->input('credit_score') <= 60 && $request->input('credit_score') > 30 ? 'Medium Risk' : ($request->input('credit_score') <= 30 ? 'Low Risk' : '' ) );
        $firmBackground->name = $request->input('name');
        $firmBackground->pan = $request->input('pan');
        $firmBackground->aadhar = $request->input('aadhar');
        $firmBackground->date_of_appointment = $request->input('date_of_appointment');
        $firmBackground->educational_background = $request->input('educational_background');
        $firmBackground->credit_score = $request->input('credit_score');
        $firmBackground->save();

        if($firmBackground->id){

            // first director name
            $FirstDirectorsFirm = FirstDirectorsFirm::where('firm_background_id', $firmBackground->id)->firstOrFail();

            $FirstDirectorsFirm->director_name_1_1 = $request->input('director_name_1_1');
            $FirstDirectorsFirm->company_name_1_1 = $request->input('company_name_1_1');
            $FirstDirectorsFirm->cin_1_1 = $request->input('cin_1_1');
            $FirstDirectorsFirm->company_status_1_1 = $request->input('company_status_1_1');
            $FirstDirectorsFirm->appointment_date_1_1 = $request->input('appointment_date_1_1');
            $FirstDirectorsFirm->business_of_entity_1_1 = $request->input('business_of_entity_1_1');
            $FirstDirectorsFirm->business_conflict_1_1 = $request->input('business_conflict_1_1');

            $FirstDirectorsFirm->director_name_1_2 = $request->input('director_name_1_2');
            $FirstDirectorsFirm->company_name_1_2 = $request->input('company_name_1_2');
            $FirstDirectorsFirm->cin_1_2 = $request->input('cin_1_2');
            $FirstDirectorsFirm->company_status_1_2 = $request->input('company_status_1_2');
            $FirstDirectorsFirm->appointment_date_1_2 = $request->input('appointment_date_1_2');
            $FirstDirectorsFirm->business_of_entity_1_2 = $request->input('business_of_entity_1_2');
            $FirstDirectorsFirm->business_conflict_1_2 = $request->input('business_conflict_1_2');


            $FirstDirectorsFirm->director_name_1_3 = $request->input('director_name_1_3');
            $FirstDirectorsFirm->company_name_1_3 = $request->input('company_name_1_3');
            $FirstDirectorsFirm->cin_1_3 = $request->input('cin_1_3');
            $FirstDirectorsFirm->company_status_1_3 = $request->input('company_status_1_3');
            $FirstDirectorsFirm->appointment_date_1_3 = $request->input('appointment_date_1_3');
            $FirstDirectorsFirm->business_of_entity_1_3 = $request->input('business_of_entity_1_3');
            $FirstDirectorsFirm->business_conflict_1_3 = $request->input('business_conflict_1_3');


            $FirstDirectorsFirm->director_name_1_4 = $request->input('director_name_1_4');
            $FirstDirectorsFirm->company_name_1_4 = $request->input('company_name_1_4');
            $FirstDirectorsFirm->cin_1_4 = $request->input('cin_1_4');
            $FirstDirectorsFirm->company_status_1_4 = $request->input('company_status_1_4');
            $FirstDirectorsFirm->appointment_date_1_4 = $request->input('appointment_date_1_4');
            $FirstDirectorsFirm->business_of_entity_1_4 = $request->input('business_of_entity_1_4');
            $FirstDirectorsFirm->business_conflict_1_4 = $request->input('business_conflict_1_4');

            $FirstDirectorsFirm->director_name_1_5 = $request->input('director_name_1_5');
            $FirstDirectorsFirm->company_name_1_5 = $request->input('company_name_1_5');
            $FirstDirectorsFirm->cin_1_5 = $request->input('cin_1_5');
            $FirstDirectorsFirm->company_status_1_5 = $request->input('company_status_1_5');
            $FirstDirectorsFirm->appointment_date_1_5 = $request->input('appointment_date_1_5');
            $FirstDirectorsFirm->business_of_entity_1_5 = $request->input('business_of_entity_1_5');
            $FirstDirectorsFirm->business_conflict_1_5 = $request->input('business_conflict_1_5');


            $FirstDirectorsFirm->director_name_1_6 = $request->input('director_name_1_6');
            $FirstDirectorsFirm->company_name_1_6 = $request->input('company_name_1_6');
            $FirstDirectorsFirm->cin_1_6 = $request->input('cin_1_6');
            $FirstDirectorsFirm->company_status_1_6 = $request->input('company_status_1_6');
            $FirstDirectorsFirm->appointment_date_1_6 = $request->input('appointment_date_1_6');
            $FirstDirectorsFirm->business_of_entity_1_6 = $request->input('business_of_entity_1_6');
            $FirstDirectorsFirm->business_conflict_1_6 = $request->input('business_conflict_1_6');


            $FirstDirectorsFirm->director_name_1_7 = $request->input('director_name_1_7');
            $FirstDirectorsFirm->company_name_1_7 = $request->input('company_name_1_7');
            $FirstDirectorsFirm->cin_1_7 = $request->input('cin_1_7');
            $FirstDirectorsFirm->company_status_1_7 = $request->input('company_status_1_7');
            $FirstDirectorsFirm->appointment_date_1_7 = $request->input('appointment_date_1_7');
            $FirstDirectorsFirm->business_of_entity_1_7 = $request->input('business_of_entity_1_7');
            $FirstDirectorsFirm->business_conflict_1_7 = $request->input('business_conflict_1_7');


            $FirstDirectorsFirm->director_name_1_8 = $request->input('director_name_1_8');
            $FirstDirectorsFirm->company_name_1_8 = $request->input('company_name_1_8');
            $FirstDirectorsFirm->cin_1_8 = $request->input('cin_1_8');
            $FirstDirectorsFirm->company_status_1_8 = $request->input('company_status_1_8');
            $FirstDirectorsFirm->appointment_date_1_8 = $request->input('appointment_date_1_8');
            $FirstDirectorsFirm->business_of_entity_1_8 = $request->input('business_of_entity_1_8');
            $FirstDirectorsFirm->business_conflict_1_8 = $request->input('business_conflict_1_8');
            $FirstDirectorsFirm->save();



            // second director name
            $SecondDirectorsFirm = SecondDirectorsFirm::where('firm_background_id', $firmBackground->id)->firstOrFail();

            $SecondDirectorsFirm->director_name_2_1 = $request->input('director_name_2_1');
            $SecondDirectorsFirm->company_name_2_1 = $request->input('company_name_2_1');
            $SecondDirectorsFirm->cin_2_1 = $request->input('cin_2_1');
            $SecondDirectorsFirm->company_status_2_1 = $request->input('company_status_2_1');
            $SecondDirectorsFirm->appointment_date_2_1 = $request->input('appointment_date_2_1');
            $SecondDirectorsFirm->business_of_entity_2_1 = $request->input('business_of_entity_2_1');
            $SecondDirectorsFirm->business_conflict_2_1 = $request->input('business_conflict_2_1');

            $SecondDirectorsFirm->director_name_2_2 = $request->input('director_name_2_2');
            $SecondDirectorsFirm->company_name_2_2 = $request->input('company_name_2_2');
            $SecondDirectorsFirm->cin_2_2 = $request->input('cin_2_2');
            $SecondDirectorsFirm->company_status_2_2 = $request->input('company_status_2_2');
            $SecondDirectorsFirm->appointment_date_2_2 = $request->input('appointment_date_2_2');
            $SecondDirectorsFirm->business_of_entity_2_2 = $request->input('business_of_entity_2_2');
            $SecondDirectorsFirm->business_conflict_2_2 = $request->input('business_conflict_2_2');


            $SecondDirectorsFirm->director_name_2_3 = $request->input('director_name_2_3');
            $SecondDirectorsFirm->company_name_2_3 = $request->input('company_name_2_3');
            $SecondDirectorsFirm->cin_2_3 = $request->input('cin_2_3');
            $SecondDirectorsFirm->company_status_2_3 = $request->input('company_status_2_3');
            $SecondDirectorsFirm->appointment_date_2_3 = $request->input('appointment_date_2_3');
            $SecondDirectorsFirm->business_of_entity_2_3 = $request->input('business_of_entity_2_3');
            $SecondDirectorsFirm->business_conflict_2_3 = $request->input('business_conflict_2_3');


            $SecondDirectorsFirm->director_name_2_4 = $request->input('director_name_2_4');
            $SecondDirectorsFirm->company_name_2_4 = $request->input('company_name_2_4');
            $SecondDirectorsFirm->cin_2_4 = $request->input('cin_2_4');
            $SecondDirectorsFirm->company_status_2_4 = $request->input('company_status_2_4');
            $SecondDirectorsFirm->appointment_date_2_4 = $request->input('appointment_date_2_4');
            $SecondDirectorsFirm->business_of_entity_2_4 = $request->input('business_of_entity_2_4');
            $SecondDirectorsFirm->business_conflict_2_4 = $request->input('business_conflict_2_4');

            $SecondDirectorsFirm->director_name_2_5 = $request->input('director_name_2_5');
            $SecondDirectorsFirm->company_name_2_5 = $request->input('company_name_2_5');
            $SecondDirectorsFirm->cin_2_5 = $request->input('cin_2_5');
            $SecondDirectorsFirm->company_status_2_5 = $request->input('company_status_2_5');
            $SecondDirectorsFirm->appointment_date_2_5 = $request->input('appointment_date_2_5');
            $SecondDirectorsFirm->business_of_entity_2_5 = $request->input('business_of_entity_2_5');
            $SecondDirectorsFirm->business_conflict_2_5 = $request->input('business_conflict_2_5');


            $SecondDirectorsFirm->director_name_2_6 = $request->input('director_name_2_6');
            $SecondDirectorsFirm->company_name_2_6 = $request->input('company_name_2_6');
            $SecondDirectorsFirm->cin_2_6 = $request->input('cin_2_6');
            $SecondDirectorsFirm->company_status_2_6 = $request->input('company_status_2_6');
            $SecondDirectorsFirm->appointment_date_2_6 = $request->input('appointment_date_2_6');
            $SecondDirectorsFirm->business_of_entity_2_6 = $request->input('business_of_entity_2_6');
            $SecondDirectorsFirm->business_conflict_2_6 = $request->input('business_conflict_2_6');


            $SecondDirectorsFirm->director_name_2_7 = $request->input('director_name_2_7');
            $SecondDirectorsFirm->company_name_2_7 = $request->input('company_name_2_7');
            $SecondDirectorsFirm->cin_2_7 = $request->input('cin_2_7');
            $SecondDirectorsFirm->company_status_2_7 = $request->input('company_status_2_7');
            $SecondDirectorsFirm->appointment_date_2_7 = $request->input('appointment_date_2_7');
            $SecondDirectorsFirm->business_of_entity_2_7 = $request->input('business_of_entity_2_7');
            $SecondDirectorsFirm->business_conflict_2_7 = $request->input('business_conflict_2_7');


            $SecondDirectorsFirm->director_name_2_8 = $request->input('director_name_2_8');
            $SecondDirectorsFirm->company_name_2_8 = $request->input('company_name_2_8');
            $SecondDirectorsFirm->cin_2_8 = $request->input('cin_2_8');
            $SecondDirectorsFirm->company_status_2_8 = $request->input('company_status_2_8');
            $SecondDirectorsFirm->appointment_date_2_8 = $request->input('appointment_date_2_8');
            $SecondDirectorsFirm->business_of_entity_2_8 = $request->input('business_of_entity_2_8');
            $SecondDirectorsFirm->business_conflict_2_8 = $request->input('business_conflict_2_8');
            $SecondDirectorsFirm->save();


            // third director name
            $ThirdDirectorsFirm = ThirdDirectorsFirm::where('firm_background_id', $firmBackground->id)->firstOrFail();

            $ThirdDirectorsFirm->director_name_3_1 = $request->input('director_name_3_1');
            $ThirdDirectorsFirm->company_name_3_1 = $request->input('company_name_3_1');
            $ThirdDirectorsFirm->cin_3_1 = $request->input('cin_3_1');
            $ThirdDirectorsFirm->company_status_3_1 = $request->input('company_status_3_1');
            $ThirdDirectorsFirm->appointment_date_3_1 = $request->input('appointment_date_3_1');
            $ThirdDirectorsFirm->business_of_entity_3_1 = $request->input('business_of_entity_3_1');
            $ThirdDirectorsFirm->business_conflict_3_1 = $request->input('business_conflict_3_1');

            $ThirdDirectorsFirm->director_name_3_2 = $request->input('director_name_3_2');
            $ThirdDirectorsFirm->company_name_3_2 = $request->input('company_name_3_2');
            $ThirdDirectorsFirm->cin_3_2 = $request->input('cin_3_2');
            $ThirdDirectorsFirm->company_status_3_2 = $request->input('company_status_3_2');
            $ThirdDirectorsFirm->appointment_date_3_2 = $request->input('appointment_date_3_2');
            $ThirdDirectorsFirm->business_of_entity_3_2 = $request->input('business_of_entity_3_2');
            $ThirdDirectorsFirm->business_conflict_3_2 = $request->input('business_conflict_3_2');


            $ThirdDirectorsFirm->director_name_3_3 = $request->input('director_name_3_3');
            $ThirdDirectorsFirm->company_name_3_3 = $request->input('company_name_3_3');
            $ThirdDirectorsFirm->cin_3_3 = $request->input('cin_3_3');
            $ThirdDirectorsFirm->company_status_3_3 = $request->input('company_status_3_3');
            $ThirdDirectorsFirm->appointment_date_3_3 = $request->input('appointment_date_3_3');
            $ThirdDirectorsFirm->business_of_entity_3_3 = $request->input('business_of_entity_3_3');
            $ThirdDirectorsFirm->business_conflict_3_3 = $request->input('business_conflict_3_3');


            $ThirdDirectorsFirm->director_name_3_4 = $request->input('director_name_3_4');
            $ThirdDirectorsFirm->company_name_3_4 = $request->input('company_name_3_4');
            $ThirdDirectorsFirm->cin_3_4 = $request->input('cin_3_4');
            $ThirdDirectorsFirm->company_status_3_4 = $request->input('company_status_3_4');
            $ThirdDirectorsFirm->appointment_date_3_4 = $request->input('appointment_date_3_4');
            $ThirdDirectorsFirm->business_of_entity_3_4 = $request->input('business_of_entity_3_4');
            $ThirdDirectorsFirm->business_conflict_3_4 = $request->input('business_conflict_3_4');

            $ThirdDirectorsFirm->director_name_3_5 = $request->input('director_name_3_5');
            $ThirdDirectorsFirm->company_name_3_5 = $request->input('company_name_3_5');
            $ThirdDirectorsFirm->cin_3_5 = $request->input('cin_3_5');
            $ThirdDirectorsFirm->company_status_3_5 = $request->input('company_status_3_5');
            $ThirdDirectorsFirm->appointment_date_3_5 = $request->input('appointment_date_3_5');
            $ThirdDirectorsFirm->business_of_entity_3_5 = $request->input('business_of_entity_3_5');
            $ThirdDirectorsFirm->business_conflict_3_5 = $request->input('business_conflict_3_5');


            $ThirdDirectorsFirm->director_name_3_6 = $request->input('director_name_3_6');
            $ThirdDirectorsFirm->company_name_3_6 = $request->input('company_name_3_6');
            $ThirdDirectorsFirm->cin_3_6 = $request->input('cin_3_6');
            $ThirdDirectorsFirm->company_status_3_6 = $request->input('company_status_3_6');
            $ThirdDirectorsFirm->appointment_date_3_6 = $request->input('appointment_date_3_6');
            $ThirdDirectorsFirm->business_of_entity_3_6 = $request->input('business_of_entity_3_6');
            $ThirdDirectorsFirm->business_conflict_3_6 = $request->input('business_conflict_3_6');


            $ThirdDirectorsFirm->director_name_3_7 = $request->input('director_name_3_7');
            $ThirdDirectorsFirm->company_name_3_7 = $request->input('company_name_3_7');
            $ThirdDirectorsFirm->cin_3_7 = $request->input('cin_3_7');
            $ThirdDirectorsFirm->company_status_3_7 = $request->input('company_status_3_7');
            $ThirdDirectorsFirm->appointment_date_3_7 = $request->input('appointment_date_3_7');
            $ThirdDirectorsFirm->business_of_entity_3_7 = $request->input('business_of_entity_3_7');
            $ThirdDirectorsFirm->business_conflict_3_7 = $request->input('business_conflict_3_7');


            $ThirdDirectorsFirm->director_name_3_8 = $request->input('director_name_3_8');
            $ThirdDirectorsFirm->company_name_3_8 = $request->input('company_name_3_8');
            $ThirdDirectorsFirm->cin_3_8 = $request->input('cin_3_8');
            $ThirdDirectorsFirm->company_status_3_8 = $request->input('company_status_3_8');
            $ThirdDirectorsFirm->appointment_date_3_8 = $request->input('appointment_date_3_8');
            $ThirdDirectorsFirm->business_of_entity_3_8 = $request->input('business_of_entity_3_8');
            $ThirdDirectorsFirm->business_conflict_3_8 = $request->input('business_conflict_3_8');
            $ThirdDirectorsFirm->save();

            // License form

            $License = License::where('firm_background_id', $firmBackground->id)->firstOrFail();

            $License->license_name_1 = $request->input('license_name_1');
            $License->license_no_1 = $request->input('license_no_1');
            $License->date_of_issuance_1 = $request->input('date_of_issuance_1');
            $License->date_of_expiry_1 = $request->input('date_of_expiry_1');


            $License->license_name_2 = $request->input('license_name_2');
            $License->license_no_2 = $request->input('license_no_2');
            $License->date_of_issuance_2 = $request->input('date_of_issuance_2');
            $License->date_of_expiry_2 = $request->input('date_of_expiry_2');


            $License->license_name_3 = $request->input('license_name_3');
            $License->license_no_3 = $request->input('license_no_3');
            $License->date_of_issuance_3 = $request->input('date_of_issuance_3');
            $License->date_of_expiry_3 = $request->input('date_of_expiry_3');


            $License->license_name_4 = $request->input('license_name_4');
            $License->license_no_4 = $request->input('license_no_4');
            $License->date_of_issuance_4 = $request->input('date_of_issuance_4');
            $License->date_of_expiry_4 = $request->input('date_of_expiry_4');


            $License->license_name_5 = $request->input('license_name_5');
            $License->license_no_5 = $request->input('license_no_5');
            $License->date_of_issuance_5 = $request->input('date_of_issuance_5');
            $License->date_of_expiry_5 = $request->input('date_of_expiry_5');


            $License->license_name_6 = $request->input('license_name_6');
            $License->license_no_6 = $request->input('license_no_6');
            $License->date_of_issuance_6 = $request->input('date_of_issuance_6');
            $License->date_of_expiry_6 = $request->input('date_of_expiry_6');


            $License->license_name_7 = $request->input('license_name_7');
            $License->license_no_7 = $request->input('license_no_7');
            $License->date_of_issuance_7 = $request->input('date_of_issuance_7');
            $License->date_of_expiry_7 = $request->input('date_of_expiry_7');


            $License->license_name_8 = $request->input('license_name_8');
            $License->license_no_8 = $request->input('license_no_8');
            $License->date_of_issuance_8 = $request->input('date_of_issuance_8');
            $License->date_of_expiry_8 = $request->input('date_of_expiry_8');

            $License->save();



       $BusinessIntelligence = BusinessIntelligence::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
       $BusinessIntelligence->user_id = $request->input('user_id');
       $BusinessIntelligence->team_user_id = $request->input('team_user_id');
       $BusinessIntelligence->save();


       $CourtCheck = CourtCheck::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
         $CourtCheck->user_id = $request->input('user_id');
       $CourtCheck->team_user_id = $request->input('team_user_id');
       $CourtCheck->save();

       $Financial = Financial::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
         $Financial->user_id = $request->input('user_id');
       $Financial->team_user_id = $request->input('team_user_id');
       $Financial->save();

       $MarketReputation = MarketReputation::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
         $MarketReputation->user_id = $request->input('user_id');
       $MarketReputation->team_user_id = $request->input('team_user_id');
       $MarketReputation->save();

       $OnGroundVerification = OnGroundVerification::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
         $OnGroundVerification->user_id = $request->input('user_id');
       $OnGroundVerification->team_user_id = $request->input('team_user_id');
       $OnGroundVerification->save();

       $TaxReurnCredit = TaxReurnCredit::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
         $TaxReurnCredit->user_id = $request->input('user_id');
       $TaxReurnCredit->team_user_id = $request->input('team_user_id');
       $TaxReurnCredit->save();

       $KeyObservation = KeyObservation::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
         $KeyObservation->user_id = $request->input('user_id');
       $KeyObservation->team_user_id = $request->input('team_user_id');
       $KeyObservation->save();

       $ThirdParty = ThirdParty::where('id', $request->getThirdPartyForID)->firstOrFail();
         $ThirdParty->user_id = $request->input('user_id');
       $ThirdParty->save();

        }

         return response()->json(['message' => 'Firm Background Reports updated successfully!']);

    }

    function update_on_ground_verification(Request $request){
        // dd($request->all());

        $OnGroundVerification = OnGroundVerification::findOrFail($request->onGroundVerificationID);
        if (!$OnGroundVerification) {
            return response()->json(['error' => 'This Reports not found.']);

       }

        if ($request->hasFile('upload_picture')) {
            $file = $request->file('upload_picture');
            // Generate a unique filename
            $filename = 'OnGroundVerification' . '-' . date('dmyHis') . rand() . '.' . $file->getClientOriginalExtension();
            // Move the file to the destination folder
            $file->move(public_path('admin/assets/imgs/OnGroundVerification/'), $filename);


        $OnGroundVerification->upload_picture = $filename;
        }
        $OnGroundVerification->score_analysis = $request->input('score_analysis');
        $OnGroundVerification->Type_of_risk = $request->input('on_ground_verification_score') > 60 ? 'High Risk' : ($request->input('on_ground_verification_score') <= 60 && $request->input('on_ground_verification_score') > 30 ? 'Medium Risk' : ($request->input('on_ground_verification_score') <= 30 ? 'Low Risk' : '' ) );
        $OnGroundVerification->address_details = $request->input('address_details');
        $OnGroundVerification->address_visit_findings = $request->input('address_visit_findings');
        $OnGroundVerification->on_ground_verification_score = $request->input('on_ground_verification_score');
        $OnGroundVerification->save();
        return response()->json(['message' => 'On Ground Verification  Reports updated successfully!']);


    }

    function update_court_check(Request $request){
                // dd($request->all());

                $CourtCheck = CourtCheck::findOrFail($request->CourtCheckId);
                if (!$CourtCheck) {
                    return response()->json(['error' => 'This Reports not found.']);

            }


        $CourtCheck->director_name_1  = $request->input('director_name_1');
        $CourtCheck->director_jurisdiction_1  = $request->input('director_jurisdiction_1');
        $CourtCheck->director_record_1  = $request->input('director_record_1');
        $CourtCheck->director_subject_matter_1  = $request->input('director_subject_matter_1');

        $CourtCheck->director_name_2  = $request->input('director_name_2');
        $CourtCheck->director_jurisdiction_2  = $request->input('director_jurisdiction_2');
        $CourtCheck->director_record_2  = $request->input('director_record_2');
        $CourtCheck->director_subject_matter_2  = $request->input('director_subject_matter_2');

        $CourtCheck->director_name_3  = $request->input('director_name_3');
        $CourtCheck->director_jurisdiction_3  = $request->input('director_jurisdiction_3');
        $CourtCheck->director_record_3  = $request->input('director_record_3');
        $CourtCheck->director_subject_matter_3  = $request->input('director_subject_matter_3');

        $CourtCheck->director_name_4  = $request->input('director_name_4');
        $CourtCheck->director_jurisdiction_4  = $request->input('director_jurisdiction_4');
        $CourtCheck->director_record_4  = $request->input('director_record_4');
        $CourtCheck->director_subject_matter_4  = $request->input('director_subject_matter_4');

        $CourtCheck->director_name_5  = $request->input('director_name_5');
        $CourtCheck->director_jurisdiction_5  = $request->input('director_jurisdiction_5');
        $CourtCheck->director_record_5  = $request->input('director_record_5');
        $CourtCheck->director_subject_matter_5  = $request->input('director_subject_matter_5');

        $CourtCheck->company_jurisdiction_1  = $request->input('company_jurisdiction_1');
        $CourtCheck->company_record_1  = $request->input('company_record_1');
        $CourtCheck->company_subject_matter_1  = $request->input('company_subject_matter_1');

        $CourtCheck->company_jurisdiction_2  = $request->input('company_jurisdiction_2');
        $CourtCheck->company_record_2  = $request->input('company_record_2');
        $CourtCheck->company_subject_matter_2  = $request->input('company_subject_matter_2');

        $CourtCheck->company_jurisdiction_3  = $request->input('company_jurisdiction_3');
        $CourtCheck->company_record_3  = $request->input('company_record_3');
        $CourtCheck->company_subject_matter_3  = $request->input('company_subject_matter_3');

        $CourtCheck->company_jurisdiction_4  = $request->input('company_jurisdiction_4');
        $CourtCheck->company_record_4  = $request->input('company_record_4');
        $CourtCheck->company_subject_matter_4  = $request->input('company_subject_matter_4');

        $CourtCheck->company_jurisdiction_5  = $request->input('company_jurisdiction_5');
        $CourtCheck->company_record_5  = $request->input('company_record_5');
        $CourtCheck->company_subject_matter_5  = $request->input('company_subject_matter_5');

        $CourtCheck->company_jurisdiction_1  = $request->input('company_jurisdiction_1');
        $CourtCheck->company_record_1  = $request->input('company_record_1');
        $CourtCheck->company_subject_matter_1  = $request->input('company_subject_matter_1');


        $CourtCheck->legal_score  = $request->input('legal_score');
        $CourtCheck->score_analysis = $request->input('score_analysis');
        $CourtCheck->Type_of_risk = $request->input('legal_score') > 60 ? 'High Risk' : ($request->input('legal_score') <= 60 && $request->input('legal_score') > 30 ? 'Medium Risk' : ($request->input('legal_score') <= 30 ? 'Low Risk' : '' ) );

        $CourtCheck->save();
        return response()->json(['message' => 'Court Check  Reports updated successfully!']);

    }


    function update_financial(Request $request){
        // dd($request->all());

        $Financial = Financial::findOrFail($request->FinancialID);
        if (!$Financial) {
            return response()->json(['error' => 'This Reports not found.']);

        }



        $Financial->name_1  = $request->input('name_1');
        $Financial->status_1  = $request->input('status_1');
        $Financial->amount_1  = $request->input('amount_1');
        $Financial->charged_property_1  = $request->input('charged_property_1');
        $Financial->name_2  = $request->input('name_2');
        $Financial->status_2  = $request->input('status_2');
        $Financial->amount_2  = $request->input('amount_2');
        $Financial->charged_property_2  = $request->input('charged_property_2');

        $Financial->name_3  = $request->input('name_3');
        $Financial->status_3  = $request->input('status_3');
        $Financial->amount_3  = $request->input('amount_3');
        $Financial->charged_property_3  = $request->input('charged_property_3');

        $Financial->name_4  = $request->input('name_4');
        $Financial->status_4  = $request->input('status_4');
        $Financial->amount_4  = $request->input('amount_4');
        $Financial->charged_property_4  = $request->input('charged_property_4');
        $Financial->overall_financial_score  = $request->input('overall_financial_score');
        $Financial->Type_of_risk = $request->input('overall_financial_score') > 60 ? 'High Risk' : ($request->input('overall_financial_score') <= 60 && $request->input('overall_financial_score') > 30 ? 'Medium Risk' : ($request->input('overall_financial_score') <= 30 ? 'Low Risk' : '' ) );


        $Financial->save();

        if($Financial->id){

            // first director name
            $FinancialsFindingsFyOne = FinancialsFindingsFyOne::where('financial_id', $Financial->id)->firstOrFail();



       $FinancialsFindingsFyOne->revenue_fy_one_finding__1  = $request->input('revenue_fy_one_finding__1');
       $FinancialsFindingsFyOne->net_profit_fy_one_finding__1  = $request->input('net_profit_fy_one_finding__1');
       $FinancialsFindingsFyOne->gross_profit_fy_one_finding__1  = $request->input('gross_profit_fy_one_finding__1');
       $FinancialsFindingsFyOne->working_capital_1_fy_one_finding__1  = $request->input('working_capital_1_fy_one_finding__1');
       $FinancialsFindingsFyOne->working_capital_2_fy_one_finding__1  = $request->input('working_capital_2_fy_one_finding__1');
       $FinancialsFindingsFyOne->total_assets_fy_one_finding__1  = $request->input('total_assets_fy_one_finding__1');
       $FinancialsFindingsFyOne->current_assets_fy_one_finding__1  = $request->input('current_assets_fy_one_finding__1');
       $FinancialsFindingsFyOne->current_liabilities_fy_one_finding__1  = $request->input('current_liabilities_fy_one_finding__1');
       $FinancialsFindingsFyOne->debt_fy_one_finding__1  = $request->input('debt_fy_one_finding__1');
       $FinancialsFindingsFyOne->average_inventory_fy_one_finding__1  = $request->input('average_inventory_fy_one_finding__1');
       $FinancialsFindingsFyOne->net_sales_fy_one_finding__1  = $request->input('net_sales_fy_one_finding__1');
       $FinancialsFindingsFyOne->equity_share_capital_fy_one_finding__1  = $request->input('equity_share_capital_fy_one_finding__1');
       $FinancialsFindingsFyOne->sundry_debtors_fy_one_finding__1  = $request->input('sundry_debtors_fy_one_finding__1');
       $FinancialsFindingsFyOne->sundry_creditors_fy_one_finding__1  = $request->input('sundry_creditors_fy_one_finding__1');
       $FinancialsFindingsFyOne->loans_and_advances_fy_one_finding__1  = $request->input('loans_and_advances_fy_one_finding__1');
       $FinancialsFindingsFyOne->cash_and_cash_equivalents_fy_one_finding__1  = $request->input('cash_and_cash_equivalents_fy_one_finding__1');
        //    $FinancialsFindingsFyOne->overall_financial_score_fy_one_finding__1  = $request->input('overall_financial_score_fy_one_finding__1');

       $FinancialsFindingsFyOne->save();

       $FinancialsFindingsFyTwo = FinancialsFindingsFyTwo::where('financial_id', $Financial->id)->firstOrFail();


       $FinancialsFindingsFyTwo->revenue_fy_two_finding__1  = $request->input('revenue_fy_two_finding__1');
       $FinancialsFindingsFyTwo->net_profit_fy_two_finding__1  = $request->input('net_profit_fy_two_finding__1');
       $FinancialsFindingsFyTwo->gross_profit_fy_two_finding__1  = $request->input('gross_profit_fy_two_finding__1');
       $FinancialsFindingsFyTwo->working_capital_1_fy_two_finding__1  = $request->input('working_capital_1_fy_two_finding__1');
       $FinancialsFindingsFyTwo->working_capital_2_fy_two_finding__1  = $request->input('working_capital_2_fy_two_finding__1');
       $FinancialsFindingsFyTwo->total_assets_fy_two_finding__1  = $request->input('total_assets_fy_two_finding__1');
       $FinancialsFindingsFyTwo->current_assets_fy_two_finding__1  = $request->input('current_assets_fy_two_finding__1');
       $FinancialsFindingsFyTwo->current_liabilities_fy_two_finding__1  = $request->input('current_liabilities_fy_two_finding__1');
       $FinancialsFindingsFyTwo->debt_fy_two_finding__1  = $request->input('debt_fy_two_finding__1');
       $FinancialsFindingsFyTwo->average_inventory_fy_two_finding__1  = $request->input('average_inventory_fy_two_finding__1');
       $FinancialsFindingsFyTwo->net_sales_fy_two_finding__1  = $request->input('net_sales_fy_two_finding__1');
       $FinancialsFindingsFyTwo->equity_share_capital_fy_two_finding__1  = $request->input('equity_share_capital_fy_two_finding__1');
       $FinancialsFindingsFyTwo->sundry_debtors_fy_two_finding__1  = $request->input('sundry_debtors_fy_two_finding__1');
       $FinancialsFindingsFyTwo->sundry_creditors_fy_two_finding__1  = $request->input('sundry_creditors_fy_two_finding__1');
       $FinancialsFindingsFyTwo->loans_and_advances_fy_two_finding__1  = $request->input('loans_and_advances_fy_two_finding__1');
       $FinancialsFindingsFyTwo->cash_and_cash_equivalents_fy_two_finding__1  = $request->input('cash_and_cash_equivalents_fy_two_finding__1');
        //    $FinancialsFindingsFyTwo->overall_financial_score_fy_two_finding__1  = $request->input('overall_financial_score_fy_two_finding__1');
       $FinancialsFindingsFyTwo->save();





       $FinancialsFindingsFyThree = FinancialsFindingsFyThree::where('financial_id', $Financial->id)->firstOrFail();


       $FinancialsFindingsFyThree->revenue_fy_three_finding__1  = $request->input('revenue_fy_three_finding__1');
       $FinancialsFindingsFyThree->net_profit_fy_three_finding__1  = $request->input('net_profit_fy_three_finding__1');
       $FinancialsFindingsFyThree->gross_profit_fy_three_finding__1  = $request->input('gross_profit_fy_three_finding__1');
       $FinancialsFindingsFyThree->working_capital_1_fy_three_finding__1  = $request->input('working_capital_1_fy_three_finding__1');
       $FinancialsFindingsFyThree->working_capital_2_fy_three_finding__1  = $request->input('working_capital_2_fy_three_finding__1');
       $FinancialsFindingsFyThree->total_assets_fy_three_finding__1  = $request->input('total_assets_fy_three_finding__1');
       $FinancialsFindingsFyThree->current_assets_fy_three_finding__1  = $request->input('current_assets_fy_three_finding__1');
       $FinancialsFindingsFyThree->current_liabilities_fy_three_finding__1  = $request->input('current_liabilities_fy_three_finding__1');
       $FinancialsFindingsFyThree->debt_fy_three_finding__1  = $request->input('debt_fy_three_finding__1');
       $FinancialsFindingsFyThree->average_inventory_fy_three_finding__1  = $request->input('average_inventory_fy_three_finding__1');
       $FinancialsFindingsFyThree->net_sales_fy_three_finding__1  = $request->input('net_sales_fy_three_finding__1');
       $FinancialsFindingsFyThree->equity_share_capital_fy_three_finding__1  = $request->input('equity_share_capital_fy_three_finding__1');
       $FinancialsFindingsFyThree->sundry_debtors_fy_three_finding__1  = $request->input('sundry_debtors_fy_three_finding__1');
       $FinancialsFindingsFyThree->sundry_creditors_fy_three_finding__1  = $request->input('sundry_creditors_fy_three_finding__1');
       $FinancialsFindingsFyThree->loans_and_advances_fy_three_finding__1  = $request->input('loans_and_advances_fy_three_finding__1');
       $FinancialsFindingsFyThree->cash_and_cash_equivalents_fy_three_finding__1  = $request->input('cash_and_cash_equivalents_fy_three_finding__1');
        //    $FinancialsFindingsFyThree->overall_financial_score_fy_three_finding__1  = $request->input('overall_financial_score_fy_three_finding__1');
       $FinancialsFindingsFyThree->save();

        $FinancialsFindingsFyFour = FinancialsFindingsFyFour::where('financial_id', $Financial->id)->firstOrFail();


       $FinancialsFindingsFyFour->revenue_fy_four_finding__1  = $request->input('revenue_fy_four_finding__1');
       $FinancialsFindingsFyFour->net_profit_fy_four_finding__1  = $request->input('net_profit_fy_four_finding__1');
       $FinancialsFindingsFyFour->gross_profit_fy_four_finding__1  = $request->input('gross_profit_fy_four_finding__1');
       $FinancialsFindingsFyFour->working_capital_1_fy_four_finding__1  = $request->input('working_capital_1_fy_four_finding__1');
       $FinancialsFindingsFyFour->working_capital_2_fy_four_finding__1  = $request->input('working_capital_2_fy_four_finding__1');
       $FinancialsFindingsFyFour->total_assets_fy_four_finding__1  = $request->input('total_assets_fy_four_finding__1');
       $FinancialsFindingsFyFour->current_assets_fy_four_finding__1  = $request->input('current_assets_fy_four_finding__1');
       $FinancialsFindingsFyFour->current_liabilities_fy_four_finding__1  = $request->input('current_liabilities_fy_four_finding__1');
       $FinancialsFindingsFyFour->debt_fy_four_finding__1  = $request->input('debt_fy_four_finding__1');
       $FinancialsFindingsFyFour->average_inventory_fy_four_finding__1  = $request->input('average_inventory_fy_four_finding__1');
       $FinancialsFindingsFyFour->net_sales_fy_four_finding__1  = $request->input('net_sales_fy_four_finding__1');
       $FinancialsFindingsFyFour->equity_share_capital_fy_four_finding__1  = $request->input('equity_share_capital_fy_four_finding__1');
       $FinancialsFindingsFyFour->sundry_debtors_fy_four_finding__1  = $request->input('sundry_debtors_fy_four_finding__1');
       $FinancialsFindingsFyFour->sundry_creditors_fy_four_finding__1  = $request->input('sundry_creditors_fy_four_finding__1');
       $FinancialsFindingsFyFour->loans_and_advances_fy_four_finding__1  = $request->input('loans_and_advances_fy_four_finding__1');
       $FinancialsFindingsFyFour->cash_and_cash_equivalents_fy_four_finding__1  = $request->input('cash_and_cash_equivalents_fy_four_finding__1');
        //    $FinancialsFindingsFyFour->overall_financial_score_fy_four_finding__1  = $request->input('overall_financial_score_fy_four_finding__1');
            $FinancialsFindingsFyFour->save();

            $FinancialsFindingsFyFive = FinancialsFindingsFyFive::where('financial_id', $Financial->id)->firstOrFail();


       $FinancialsFindingsFyFive->revenue_fy_five_finding__1  = $request->input('revenue_fy_five_finding__1');
       $FinancialsFindingsFyFive->net_profit_fy_five_finding__1  = $request->input('net_profit_fy_five_finding__1');
       $FinancialsFindingsFyFive->gross_profit_fy_five_finding__1  = $request->input('gross_profit_fy_five_finding__1');
       $FinancialsFindingsFyFive->working_capital_1_fy_five_finding__1  = $request->input('working_capital_1_fy_five_finding__1');
       $FinancialsFindingsFyFive->working_capital_2_fy_five_finding__1  = $request->input('working_capital_2_fy_five_finding__1');
       $FinancialsFindingsFyFive->total_assets_fy_five_finding__1  = $request->input('total_assets_fy_five_finding__1');
       $FinancialsFindingsFyFive->current_assets_fy_five_finding__1  = $request->input('current_assets_fy_five_finding__1');
       $FinancialsFindingsFyFive->current_liabilities_fy_five_finding__1  = $request->input('current_liabilities_fy_five_finding__1');
       $FinancialsFindingsFyFive->debt_fy_five_finding__1  = $request->input('debt_fy_five_finding__1');
       $FinancialsFindingsFyFive->average_inventory_fy_five_finding__1  = $request->input('average_inventory_fy_five_finding__1');
       $FinancialsFindingsFyFive->net_sales_fy_five_finding__1  = $request->input('net_sales_fy_five_finding__1');
       $FinancialsFindingsFyFive->equity_share_capital_fy_five_finding__1  = $request->input('equity_share_capital_fy_five_finding__1');
       $FinancialsFindingsFyFive->sundry_debtors_fy_five_finding__1  = $request->input('sundry_debtors_fy_five_finding__1');
       $FinancialsFindingsFyFive->sundry_creditors_fy_five_finding__1  = $request->input('sundry_creditors_fy_five_finding__1');
       $FinancialsFindingsFyFive->loans_and_advances_fy_five_finding__1  = $request->input('loans_and_advances_fy_five_finding__1');
       $FinancialsFindingsFyFive->cash_and_cash_equivalents_fy_five_finding__1  = $request->input('cash_and_cash_equivalents_fy_five_finding__1');
        //    $FinancialsFindingsFyFive->overall_financial_score_fy_five_finding__1  = $request->input('overall_financial_score_fy_five_finding__1');
            $FinancialsFindingsFyFive->save();




        $FinancialsRatioAnalysisFyOne = FinancialsRatioAnalysisFyOne::where('financial_id', $Financial->id)->firstOrFail();


       $FinancialsRatioAnalysisFyOne->current_ratio_fy_one_1  = $request->input('current_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->current_ratio_analysis_fy_one_1  = $request->input('current_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->debt_ratio_fy_one_1  = $request->input('debt_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->debt_ratio_analysis_fy_one_1  = $request->input('debt_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->solvency_ratio_fy_one_1  = $request->input('solvency_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->solvency_ratio_analysis_fy_one_1  = $request->input('solvency_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->debt_to_equity_ratio_fy_one_1  = $request->input('debt_to_equity_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->debt_to_equity_ratio_analysis_fy_one_1  = $request->input('debt_to_equity_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->asset_turnover_ratio_fy_one_1  = $request->input('asset_turnover_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->asset_turnover_ratio_analysis_fy_one_1  = $request->input('asset_turnover_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->absolute_liquidity_ratio_fy_one_1  = $request->input('absolute_liquidity_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->absolute_liquidity_ratio_analysis_fy_one_1  = $request->input('absolute_liquidity_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->proprietary_ratio_fy_one_1  = $request->input('proprietary_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->proprietary_ratio_analysis_fy_one_1  = $request->input('proprietary_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->net_profit_ratio_fy_one_1  = $request->input('net_profit_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->net_profit_ratio_analysis_fy_one_1  = $request->input('net_profit_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->gross_profit_ratio_fy_one_1  = $request->input('gross_profit_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->gross_profit_ratio_analysis_fy_one_1  = $request->input('gross_profit_ratio_analysis_fy_one_1');
       $FinancialsRatioAnalysisFyOne->springate_s_score_ratio_fy_one_1  = $request->input('springate_s_score_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->trade_receivable_days_ratio_fy_one_1  = $request->input('trade_receivable_days_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->trade_payable_days_ratio_fy_one_1  = $request->input('trade_payable_days_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->taffler_z_score_ratio_fy_one_1  = $request->input('taffler_z_score_ratio_fy_one_1');
       $FinancialsRatioAnalysisFyOne->zmijewski_x_score_ratio_fy_one_1  = $request->input('zmijewski_x_score_ratio_fy_one_1');
            $FinancialsRatioAnalysisFyOne->save();

        $FinancialsRatioAnalysisFyTwo = FinancialsRatioAnalysisFyTwo::where('financial_id', $Financial->id)->firstOrFail();



       $FinancialsRatioAnalysisFyTwo->current_ratio_fy_two_1  = $request->input('current_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->current_ratio_analysis_fy_two_1  = $request->input('current_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->debt_ratio_fy_two_1  = $request->input('debt_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->debt_ratio_analysis_fy_two_1  = $request->input('debt_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->solvency_ratio_fy_two_1  = $request->input('solvency_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->solvency_ratio_analysis_fy_two_1  = $request->input('solvency_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->debt_to_equity_ratio_fy_two_1  = $request->input('debt_to_equity_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->debt_to_equity_ratio_analysis_fy_two_1  = $request->input('debt_to_equity_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->asset_turnover_ratio_fy_two_1  = $request->input('asset_turnover_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->asset_turnover_ratio_analysis_fy_two_1  = $request->input('asset_turnover_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->absolute_liquidity_ratio_fy_two_1  = $request->input('absolute_liquidity_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->absolute_liquidity_ratio_analysis_fy_two_1  = $request->input('absolute_liquidity_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->proprietary_ratio_fy_two_1  = $request->input('proprietary_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->proprietary_ratio_analysis_fy_two_1  = $request->input('proprietary_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->net_profit_ratio_fy_two_1  = $request->input('net_profit_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->net_profit_ratio_analysis_fy_two_1  = $request->input('net_profit_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->gross_profit_ratio_fy_two_1  = $request->input('gross_profit_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->gross_profit_ratio_analysis_fy_two_1  = $request->input('gross_profit_ratio_analysis_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->springate_s_score_ratio_fy_two_1  = $request->input('springate_s_score_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->trade_receivable_days_ratio_fy_two_1  = $request->input('trade_receivable_days_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->trade_payable_days_ratio_fy_two_1  = $request->input('trade_payable_days_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->taffler_z_score_ratio_fy_two_1  = $request->input('taffler_z_score_ratio_fy_two_1');
       $FinancialsRatioAnalysisFyTwo->zmijewski_x_score_ratio_fy_two_1  = $request->input('zmijewski_x_score_ratio_fy_two_1');
            $FinancialsRatioAnalysisFyTwo->save();





        $FinancialsRatioAnalysisFyThree = FinancialsRatioAnalysisFyThree::where('financial_id', $Financial->id)->firstOrFail();

       $FinancialsRatioAnalysisFyThree->current_ratio_fy_three_1  = $request->input('current_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->current_ratio_analysis_fy_three_1  = $request->input('current_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->debt_ratio_fy_three_1  = $request->input('debt_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->debt_ratio_analysis_fy_three_1  = $request->input('debt_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->solvency_ratio_fy_three_1  = $request->input('solvency_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->solvency_ratio_analysis_fy_three_1  = $request->input('solvency_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->debt_to_equity_ratio_fy_three_1  = $request->input('debt_to_equity_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->debt_to_equity_ratio_analysis_fy_three_1  = $request->input('debt_to_equity_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->asset_turnover_ratio_fy_three_1  = $request->input('asset_turnover_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->asset_turnover_ratio_analysis_fy_three_1  = $request->input('asset_turnover_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->absolute_liquidity_ratio_fy_three_1  = $request->input('absolute_liquidity_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->absolute_liquidity_ratio_analysis_fy_three_1  = $request->input('absolute_liquidity_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->proprietary_ratio_fy_three_1  = $request->input('proprietary_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->proprietary_ratio_analysis_fy_three_1  = $request->input('proprietary_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->net_profit_ratio_fy_three_1  = $request->input('net_profit_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->net_profit_ratio_analysis_fy_three_1  = $request->input('net_profit_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->gross_profit_ratio_fy_three_1  = $request->input('gross_profit_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->gross_profit_ratio_analysis_fy_three_1  = $request->input('gross_profit_ratio_analysis_fy_three_1');
       $FinancialsRatioAnalysisFyThree->springate_s_score_ratio_fy_three_1  = $request->input('springate_s_score_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->trade_receivable_days_ratio_fy_three_1  = $request->input('trade_receivable_days_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->trade_payable_days_ratio_fy_three_1  = $request->input('trade_payable_days_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->taffler_z_score_ratio_fy_three_1  = $request->input('taffler_z_score_ratio_fy_three_1');
       $FinancialsRatioAnalysisFyThree->zmijewski_x_score_ratio_fy_three_1  = $request->input('zmijewski_x_score_ratio_fy_three_1');
            $FinancialsRatioAnalysisFyThree->SAVE();





        $FinancialsRatioAnalysisFyFour = FinancialsRatioAnalysisFyFour::where('financial_id', $Financial->id)->firstOrFail();

       $FinancialsRatioAnalysisFyFour->current_ratio_fy_four_1  = $request->input('current_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->current_ratio_analysis_fy_four_1  = $request->input('current_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->debt_ratio_fy_four_1  = $request->input('debt_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->debt_ratio_analysis_fy_four_1  = $request->input('debt_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->solvency_ratio_fy_four_1  = $request->input('solvency_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->solvency_ratio_analysis_fy_four_1  = $request->input('solvency_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->debt_to_equity_ratio_fy_four_1  = $request->input('debt_to_equity_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->debt_to_equity_ratio_analysis_fy_four_1  = $request->input('debt_to_equity_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->asset_turnover_ratio_fy_four_1  = $request->input('asset_turnover_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->asset_turnover_ratio_analysis_fy_four_1  = $request->input('asset_turnover_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->absolute_liquidity_ratio_fy_four_1  = $request->input('absolute_liquidity_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->absolute_liquidity_ratio_analysis_fy_four_1  = $request->input('absolute_liquidity_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->proprietary_ratio_fy_four_1  = $request->input('proprietary_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->proprietary_ratio_analysis_fy_four_1  = $request->input('proprietary_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->net_profit_ratio_fy_four_1  = $request->input('net_profit_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->net_profit_ratio_analysis_fy_four_1  = $request->input('net_profit_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->gross_profit_ratio_fy_four_1  = $request->input('gross_profit_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->gross_profit_ratio_analysis_fy_four_1  = $request->input('gross_profit_ratio_analysis_fy_four_1');
       $FinancialsRatioAnalysisFyFour->springate_s_score_ratio_fy_four_1  = $request->input('springate_s_score_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->trade_receivable_days_ratio_fy_four_1  = $request->input('trade_receivable_days_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->trade_payable_days_ratio_fy_four_1  = $request->input('trade_payable_days_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->taffler_z_score_ratio_fy_four_1  = $request->input('taffler_z_score_ratio_fy_four_1');
       $FinancialsRatioAnalysisFyFour->zmijewski_x_score_ratio_fy_four_1  = $request->input('zmijewski_x_score_ratio_fy_four_1');
        $FinancialsRatioAnalysisFyFour->save();

        $FinancialsRatioAnalysisFyFive = FinancialsRatioAnalysisFyFive::where('financial_id', $Financial->id)->firstOrFail();

       $FinancialsRatioAnalysisFyFive->current_ratio_fy_five_1  = $request->input('current_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->current_ratio_analysis_fy_five_1  = $request->input('current_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->debt_ratio_fy_five_1  = $request->input('debt_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->debt_ratio_analysis_fy_five_1  = $request->input('debt_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->solvency_ratio_fy_five_1  = $request->input('solvency_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->solvency_ratio_analysis_fy_five_1  = $request->input('solvency_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->debt_to_equity_ratio_fy_five_1  = $request->input('debt_to_equity_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->debt_to_equity_ratio_analysis_fy_five_1  = $request->input('debt_to_equity_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->asset_turnover_ratio_fy_five_1  = $request->input('asset_turnover_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->asset_turnover_ratio_analysis_fy_five_1  = $request->input('asset_turnover_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->absolute_liquidity_ratio_fy_five_1  = $request->input('absolute_liquidity_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->absolute_liquidity_ratio_analysis_fy_five_1  = $request->input('absolute_liquidity_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->proprietary_ratio_fy_five_1  = $request->input('proprietary_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->proprietary_ratio_analysis_fy_five_1  = $request->input('proprietary_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->net_profit_ratio_fy_five_1  = $request->input('net_profit_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->net_profit_ratio_analysis_fy_five_1  = $request->input('net_profit_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->gross_profit_ratio_fy_five_1  = $request->input('gross_profit_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->gross_profit_ratio_analysis_fy_five_1  = $request->input('gross_profit_ratio_analysis_fy_five_1');
       $FinancialsRatioAnalysisFyFive->springate_s_score_ratio_fy_five_1  = $request->input('springate_s_score_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->trade_receivable_days_ratio_fy_five_1  = $request->input('trade_receivable_days_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->trade_payable_days_ratio_fy_five_1  = $request->input('trade_payable_days_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->taffler_z_score_ratio_fy_five_1  = $request->input('taffler_z_score_ratio_fy_five_1');
       $FinancialsRatioAnalysisFyFive->zmijewski_x_score_ratio_fy_five_1  = $request->input('zmijewski_x_score_ratio_fy_five_1');
        $FinancialsRatioAnalysisFyFive->save();
        }
        return response()->json(['message' => 'Financial  Reports updated successfully!']);


    }

    function update_Business_Intelligence(Request $request){
        // dd($request->all());

        $BusinessIntelligence = BusinessIntelligence::findOrFail($request->BusinessIntelligenceID);
        if (!$BusinessIntelligence) {
            return response()->json(['error' => 'This Reports not found.']);

        }

        $BusinessIntelligence->business_fy1  = $request->input('business_fy1');
        $BusinessIntelligence->business_fy2  = $request->input('business_fy2');
        $BusinessIntelligence->business_fy3  = $request->input('business_fy3');
        $BusinessIntelligence->business_fy4  = $request->input('business_fy4');
        $BusinessIntelligence->business_fy5  = $request->input('business_fy5');

        $BusinessIntelligence->operating_efficiency_ratio  = $request->input('operating_efficiency_ratio');
        $BusinessIntelligence->operating_efficiency_ratio_analysis  = $request->input('operating_efficiency_ratio_analysis');
        $BusinessIntelligence->inventory_turnover_ratio  = $request->input('inventory_turnover_ratio');
        $BusinessIntelligence->inventory_turnover_ratio_analysis  = $request->input('inventory_turnover_ratio_analysis');
        $BusinessIntelligence->days_sales_in_inventory  = $request->input('days_sales_in_inventory');
        $BusinessIntelligence->days_sales_in_inventory_analysis  = $request->input('days_sales_in_inventory_analysis');
        $BusinessIntelligence->accounts_payable_turnover_ratio  = $request->input('accounts_payable_turnover_ratio');
        $BusinessIntelligence->accounts_payable_turnover_ratio_analysis  = $request->input('accounts_payable_turnover_ratio_analysis');
        $BusinessIntelligence->efficiency_score  = $request->input('efficiency_score');



        $BusinessIntelligence->score_analysis = $request->input('score_analysis');
        $BusinessIntelligence->Type_of_risk = $request->input('efficiency_score') > 60 ? 'High Risk' : ($request->input('efficiency_score') <= 60 && $request->input('efficiency_score') > 30 ? 'Medium Risk' : ($request->input('efficiency_score') <= 30 ? 'Low Risk' : '' ) );

        $BusinessIntelligence->save();
        return response()->json(['message' => 'Business Intelligence  Reports updated successfully!']);

    }

    function update_Tax_Return_and_Credit(Request $request){
        // dd($request->all());

        $TaxReurnCredit = TaxReurnCredit::findOrFail($request->TaxReurnCreditID);
        if (!$TaxReurnCredit) {
            return response()->json(['error' => 'This Reports not found.']);

        }

        $TaxReurnCredit->tax_fy1  = $request->input('tax_fy1');
        $TaxReurnCredit->tax_fy2  = $request->input('tax_fy2');
        $TaxReurnCredit->tax_fy3  = $request->input('tax_fy3');
        $TaxReurnCredit->tax_fy4  = $request->input('tax_fy4');
        $TaxReurnCredit->tax_fy5  = $request->input('tax_fy5');

        $TaxReurnCredit->name_1  = $request->input('name_1');
        $TaxReurnCredit->credit_score_1  = $request->input('credit_score_1');
        $TaxReurnCredit->outstanding_amount_1  = $request->input('outstanding_amount_1');
        $TaxReurnCredit->solvency_1  = $request->input('solvency_1');
        $TaxReurnCredit->payment_history_1  = $request->input('payment_history_1');
        $TaxReurnCredit->credit_dependency_1  = $request->input('credit_dependency_1');
        $TaxReurnCredit->num_of_loans_1  = $request->input('num_of_loans_1');
        $TaxReurnCredit->num_of_loans_2  = $request->input('num_of_loans_2');
        $TaxReurnCredit->num_of_loans_3  = $request->input('num_of_loans_3');
        $TaxReurnCredit->num_of_loans_4  = $request->input('num_of_loans_4');



        $TaxReurnCredit->name_2  = $request->input('name_2');
        $TaxReurnCredit->credit_score_2  = $request->input('credit_score_2');
        $TaxReurnCredit->outstanding_amount_2  = $request->input('outstanding_amount_2');
        $TaxReurnCredit->solvency_2  = $request->input('solvency_2');
        $TaxReurnCredit->payment_history_2  = $request->input('payment_history_2');
        $TaxReurnCredit->credit_dependency_2  = $request->input('credit_dependency_2');

        $TaxReurnCredit->name_3  = $request->input('name_3');
        $TaxReurnCredit->credit_score_3  = $request->input('credit_score_3');
        $TaxReurnCredit->outstanding_amount_3  = $request->input('outstanding_amount_3');
        $TaxReurnCredit->solvency_3  = $request->input('solvency_3');
        $TaxReurnCredit->payment_history_3  = $request->input('payment_history_3');
        $TaxReurnCredit->credit_dependency_3  = $request->input('credit_dependency_3');

        $TaxReurnCredit->name_4  = $request->input('name_4');
        $TaxReurnCredit->credit_score_4  = $request->input('credit_score_4');
        $TaxReurnCredit->outstanding_amount_4  = $request->input('outstanding_amount_4');
        $TaxReurnCredit->solvency_4  = $request->input('solvency_4');
        $TaxReurnCredit->payment_history_4  = $request->input('payment_history_4');
        $TaxReurnCredit->credit_dependency_4  = $request->input('credit_dependency_4');


        $TaxReurnCredit->overall_credit_history_score  = $request->input('overall_credit_history_score');
        $TaxReurnCredit->score_analysis = $request->input('score_analysis');
        $TaxReurnCredit->Type_of_risk = $request->input('overall_credit_history_score') > 60 ? 'High Risk' : ($request->input('overall_credit_history_score') <= 60 && $request->input('overall_credit_history_score') > 30 ? 'Medium Risk' : ($request->input('overall_credit_history_score') <= 30 ? 'Low Risk' : '' ) );

        $TaxReurnCredit->save();
        return response()->json(['message' => 'Tax Reurn Credit  Reports updated successfully!']);



    }

    function update_Market_Reputation(Request $request){

        // dd($request->all());
        $MarketReputation = MarketReputation::findOrFail($request->MarketReputationID);
        if (!$MarketReputation) {
            return response()->json(['error' => 'This Reports not found.']);

       }

        if ($request->hasFile('file_path_market_reputations')) {
            $file = $request->file('file_path_market_reputations');
            // Generate a unique filename
            $filename = 'MarketReputations' . '-' . date('dmyHis') . rand() . '.' . $file->getClientOriginalExtension();
            // Move the file to the destination folder
            $file->move(public_path('admin/assets/imgs/MarketReputations/'), $filename);


            $MarketReputation->file_path_market_reputations = $filename;
        }



        $MarketReputation->market_reputation_score  = $request->input('market_reputation_score');
        $MarketReputation->score_analysis = $request->input('score_analysis');
        $MarketReputation->Type_of_risk = $request->input('market_reputation_score') > 60 ? 'High Risk' : ($request->input('market_reputation_score') <= 60 && $request->input('market_reputation_score') > 30 ? 'Medium Risk' : ($request->input('market_reputation_score') <= 30 ? 'Low Risk' : '' ) );

        $MarketReputation->save();
        return response()->json(['message' => 'Market Reputations  Reports updated successfully!']);
    }

    function update_Key_Observation(Request $request){

        // dd($request->all());
        $KeyObservation = KeyObservation::findOrFail($request->KeyObservationID);
        if (!$KeyObservation) {
            return response()->json(['error' => 'This Reports not found.']);

       }


       $KeyObservation->overall_risk_score  = $request->input('overall_risk_score');
       $KeyObservation->key_observation  = $request->input('key_observation');
       $KeyObservation->key_recommendations  = $request->input('key_recommendations');
       $KeyObservation->overall_risk_score = $request->input('overall_risk_score');
       $KeyObservation->status = 3;
       $KeyObservation->Type_of_risk = $request->input('overall_risk_score') > 60 ? 'High Risk' : ($request->input('overall_risk_score') <= 60 && $request->input('overall_risk_score') > 30 ? 'Medium Risk' : ($request->input('overall_risk_score') <= 30 ? 'Low Risk' : '' ) );

       $KeyObservation->save();

       $FirmBackground = FirmBackground::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
       $FirmBackground->status = 3;
       $FirmBackground->save();

       $BusinessIntelligence = BusinessIntelligence::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
       $BusinessIntelligence->status = 3;
       $BusinessIntelligence->save();

       $CourtCheck = CourtCheck::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
       $CourtCheck->status = 3;
       $CourtCheck->save();

       $Financial = Financial::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
       $Financial->status = 3;
       $Financial->save();

       $MarketReputation = MarketReputation::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
       $MarketReputation->status = 3;
       $MarketReputation->save();

       $OnGroundVerification = OnGroundVerification::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
       $OnGroundVerification->status = 3;
       $OnGroundVerification->save();

       $TaxReurnCredit = TaxReurnCredit::where('third_party_id', $request->getThirdPartyForID)->firstOrFail();
       $TaxReurnCredit->status = 3;
       $TaxReurnCredit->save();

       $ThirdParty = ThirdParty::findOrFail($request->getThirdPartyForID);
       $ThirdParty->status = 3;
       $ThirdParty->save();


       return response()->json(['message' => 'Key Observation  Reports updated successfully!']);



    }


    function update_resubmited_allreports(Request $request){

        $KeyObservation = KeyObservation::where('third_party_id', $request->thirdpartyId)->firstOrFail();
        $KeyObservation->status = 2;
        $KeyObservation->save();

       $FirmBackground = FirmBackground::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $FirmBackground->status = 2;
       $FirmBackground->save();

       $BusinessIntelligence = BusinessIntelligence::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $BusinessIntelligence->status = 2;
       $BusinessIntelligence->save();

       $CourtCheck = CourtCheck::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $CourtCheck->status = 2;
       $CourtCheck->save();

       $Financial = Financial::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $Financial->status = 2;
       $Financial->save();

       $MarketReputation = MarketReputation::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $MarketReputation->status = 2;
       $MarketReputation->save();

       $OnGroundVerification = OnGroundVerification::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $OnGroundVerification->status = 2;
       $OnGroundVerification->save();

       $TaxReurnCredit = TaxReurnCredit::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $TaxReurnCredit->status = 2;
       $TaxReurnCredit->save();

       $ThirdParty = ThirdParty::findOrFail($request->thirdpartyId);
       $ThirdParty->status = 2;
       $ThirdParty->save();

       return response()->json(['message' => 'ALl Reports Re-Submited successfully!']);


    }

    function update_completed_allreports(Request $request){

        $KeyObservation = KeyObservation::where('third_party_id', $request->thirdpartyId)->firstOrFail();
        $KeyObservation->status = 3;
        $KeyObservation->save();

       $FirmBackground = FirmBackground::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $FirmBackground->status = 3;
       $FirmBackground->save();

       $BusinessIntelligence = BusinessIntelligence::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $BusinessIntelligence->status = 3;
       $BusinessIntelligence->save();

       $CourtCheck = CourtCheck::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $CourtCheck->status = 3;
       $CourtCheck->save();

       $Financial = Financial::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $Financial->status = 3;
       $Financial->save();

       $MarketReputation = MarketReputation::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $MarketReputation->status = 3;
       $MarketReputation->save();

       $OnGroundVerification = OnGroundVerification::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $OnGroundVerification->status = 3;
       $OnGroundVerification->save();

       $TaxReurnCredit = TaxReurnCredit::where('third_party_id', $request->thirdpartyId)->firstOrFail();
       $TaxReurnCredit->status = 3;
       $TaxReurnCredit->save();

       $ThirdParty = ThirdParty::findOrFail($request->thirdpartyId);
       $ThirdParty->status = 3;
       $ThirdParty->save();

       return response()->json(['message' => 'ALl Reports Comapleted successfully!']);


    }


    public function firm_file_download($id)
    {
        $data['FirmBackground'] = FirmBackground::where('id', $id)->first();

        // Replace 'path/to/your/image.jpg' with the actual path to your image
        $imagePath = public_path('admin/assets/imgs/firmBacgroundImages/' . $data['FirmBackground']->file);

        // Specify the desired file name
        $fileName = $data['FirmBackground']->file;

        return response()->download($imagePath, $fileName);
    }
    public function onGround_file_download($id)
    {
        $data['OnGroundVerification'] = OnGroundVerification::where('id', $id)->first();

        // Replace 'path/to/your/image.jpg' with the actual path to your image
        $imagePath = public_path('admin/assets/imgs/OnGroundVerification/' . $data['OnGroundVerification']->upload_picture);

        // Specify the desired file name
        $fileName = $data['OnGroundVerification']->upload_picture;

        return response()->download($imagePath, $fileName);
    }


    public function generate_pdf_of_reports($id)
    {
        // dd($id);
        $data['BusinessIntelligence'] = BusinessIntelligence::where('third_party_id',$id)->first();
        $data['CourtCheck'] = CourtCheck::where('third_party_id',$id)->first();
        $data['Financial'] = Financial::where('third_party_id',$id)->first();
        $data['KeyObservation'] = KeyObservation::where('third_party_id',$id)->first();
        $data['MarketReputation'] = MarketReputation::where('third_party_id',$id)->first();
        $data['OnGroundVerification'] = OnGroundVerification::where('third_party_id',$id)->first();
        $data['TaxReurnCredit'] = TaxReurnCredit::where('third_party_id',$id)->first();

        $data['FinancialsFindingsFyFive'] = FinancialsFindingsFyFive::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsFindingsFyFour'] = FinancialsFindingsFyFour::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsFindingsFyThree'] = FinancialsFindingsFyThree::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsFindingsFyTwo'] = FinancialsFindingsFyTwo::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsFindingsFyOne'] = FinancialsFindingsFyOne::where('financial_id',$data['Financial']->id)->first();

        // dd($data['FinancialsFindingsFyFive'] );
        $data['FinancialsRatioAnalysisFyFive'] = FinancialsRatioAnalysisFyFive::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsRatioAnalysisFyFour'] = FinancialsRatioAnalysisFyFour::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsRatioAnalysisFyThree'] = FinancialsRatioAnalysisFyThree::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsRatioAnalysisFyTwo'] = FinancialsRatioAnalysisFyTwo::where('financial_id',$data['Financial']->id)->first();
        $data['FinancialsRatioAnalysisFyOne'] = FinancialsRatioAnalysisFyOne::where('financial_id',$data['Financial']->id)->first();

        $data['FirmBackground'] = FirmBackground::where('third_party_id',$id)->first();
        $data['FirstDirectorsFirm'] = FirstDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['SecondDirectorsFirm'] = SecondDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['ThirdDirectorsFirm'] = ThirdDirectorsFirm::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['License'] = License::where('firm_background_id',$data['FirmBackground']->id)->first();
        $data['getThirdPartyForID'] = ThirdParty::where('id',$id)->first();
        $data['Getclient'] = User::where('id', $data['getThirdPartyForID']->user_id)->first();
        $data['GetTeaMuser'] = TeamUser::where('id', $data['FirmBackground']->team_user_id)->first();
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,

            ]
        ]);


        $pdf = PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);
        //#################################################################################

        $pdf->setOptions(['isPhpEnabled' => true])->loadView('admin.report.all_reports_pdf', $data)
            ->setOptions(['defaultFont' => 'sans-serif']);
            // return View('admin.sale-invoices.trade-buyer-invoice-2', ['tradeInvoices' =>$data, 'path_img_jrais' => $path_img_jrais, 'path_img_logo' => $path_img_logo,]);
        $fecha = date('d/m/Y');
        return $pdf->download("reports-" . strtoupper(utf8_decode($id)) . "-detail-" . $fecha . ".pdf");
    }
    // vender  means Third-party list end









    //  public function memberSendMail()
    // {

    //     $curr = date('Y-m-d');
    //     $validate = date('Y-m-d', strtotime('+5 days', strtotime($curr)));
    //     $data = User::where('is_feature',1)
    //                 ->whereHas('featured', function($q) use ($validate){
    //                     return $q->where('expired_date', $validate);
    //                 })
    //                 ->orderby('created_at', 'Desc')->get();

    //     foreach ($data as $val) {

    //         $to_name = $val->name;
    //         $to_email = $val->email;
    //         $data = array("name"=>$val->name);

    //         Mail::send('mail.sendMail', $data, function($message) use ($to_name, $to_email) {
    //         $message->to($to_email, $to_name)
    //         ->subject("Subscription Expiry Notification");
    //         $message->from("Info@bsb.com","BSB");
    //         });

    //     }

    //     return redirect()->back()->with('success', 'Email has been sent successfully');



    // }




}
