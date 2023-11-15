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

use App\Models\KeyObservation;
use App\Models\License;
use App\Models\MarketReputation;
use App\Models\OnGroundVerification;
use App\Models\TaxReurnCredit;
use Validator;

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
    function companyList(){

        $data['title'] = "Client Managment";
        $data['page'] = "Client Managment";
        $data['pageIntro'] = "Company List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $data['getallclient'] = User::latest()->get();
        // dd($data['getallclient']);
        //   $vendoruser=User::where('vendor_status',2)->count();
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
            'location' => 'required',
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
            'location' => $request->location,
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
    function team_List(){

        $data['title'] = "Team Managment";
        $data['page'] = "Team Managment";
        $data['pageIntro'] = "Team List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        $data['getallTeamMember'] = TeamUser::latest()->get();
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
    function vender_List(){

        $data['title'] = "Third-Party Managment";
        $data['page'] = "Third-Party Managment";
        $data['pageIntro'] = "Third-Party List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        //   $vendoruser=User::where('vendor_status',2)->count();
        $data['getallThirdParty'] = ThirdParty::latest()->get();
        // dd( $data['getallThirdParty']);

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
            'third_party_department' => 'required',
            'third_party_pos' => 'required',
            'third_party_location' => 'required',
            'third_party_phone' => 'required',
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
            'third_party_name' => $request->third_party_name,
            'third_party_email' => $request->third_party_email,
            'user_id' => $request->user_id,
            'third_party_address' => $request->third_party_address,
            'third_party_department' => $request->third_party_department,
            'third_party_pos' => $request->third_party_pos,
            'third_party_location' => $request->third_party_location,
            'third_party_phone' => $request->third_party_phone,
            

        ]);

        return redirect()->route('admin.team_List')->with('success', 'Team updated successfully!');

    }

     // vender means Reports list start
     function report_List(){

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports Managment";
        $data['pageIntro'] = "Reports List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $data['getallThirdParty'] = ThirdParty::latest()->get();
      
        return view('admin.report.index',$data);
    }

    function report_View($id){

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports View";
        $data['pageIntro'] = "Reports View";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

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

        // $data['BusinessIntelligence'] = BusinessIntelligence::where('third_party_id',$id)->first();
    
        
        
        
        // FinancialsFindingsFyFive
        // FinancialsFindingsFyFour
        // FinancialsFindingsFyThree
        // FinancialsFindingsFyTwo
        // FinancialsFindingsFyOne

        // FinancialsRatioAnalysisFyFive
        // FinancialsRatioAnalysisFyFour
        // FinancialsRatioAnalysisFyThree
        // FinancialsRatioAnalysisFyTwo
        // FinancialsRatioAnalysisFyOne
        
        // FirstDirectorsFirm
        // License
        // SecondDirectorsFirm
        // ThirdDirectorsFirm
        
        
        
        
        
       
        return view('admin.report.update-report',$data);
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
