<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

use App\Models\ThirdParty;
use App\Models\team\TeamUser;
use Auth;
use Illuminate\Support\Facades\Hash;
use DB;
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
use App\Models\Department;
use App\Models\Zone;

use Validator;
use PDF;

class userController extends Controller
{
    //
    public function index()
    {
        if (auth()->user()) {
            $data['title'] = "Client Dashboard";
        $data['page'] = "Dashboard";
        $data['pageIntro'] = "Introducing Client Dashboard";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        return view('company.index',$data);
        }else{
            return redirect()->route('web.login');
        }
    }



    // public function enteryReportsData()
    // {
    //     $data['title'] = "Entery Reports";
    //     $data['page'] = "Entry Reports";
    //     $data['pageIntro'] = "Introducing Client Reports";
    //     $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
    //     return view('company.reports.entry-reports',$data);
    // }
    function report_List(Request $request)
    {
        // dd($request->all());

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports Managment";
        $data['pageIntro'] = "Reports List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        // $data['getallThirdParty'] = ThirdParty::where('user_id', auth()->user()->id)->get();
        $query = ThirdParty::where('user_id', auth()->user()->id);

        if (isset($request->PartyName) && !empty($request->PartyName)) {
            $party_id = array_map('intval', $request->PartyName);
            $query->whereIn('id', $party_id);
        }

        if (isset($request->location) && !empty($request->location)) {
            $location = array_map('intval', $request->location);
            $query->whereIn('zone_id', $location);
        }

        if (isset($request->Department) && !empty($request->Department)) {
            $Department = array_map('intval', $request->Department);
            $query->whereIn('department_id', $Department);
        }
        if (isset($request->Department) && !empty($request->Department)) {
            $Department = array_map('intval', $request->Department);
            $query->whereIn('department_id', $Department);
        }

        if (isset($request->overallRisk) && !empty($request->overallRisk)) {
            $overallRisk = $request->overallRisk;
            $observationIds = KeyObservation::where('user_id', auth()->user()->id)
                ->where('Type_of_risk', $overallRisk)
                ->pluck('third_party_id'); // Assuming there is a column named 'third_party_id' in KeyObservation table

            $query->whereIn('id', $observationIds);
        }

        if (isset($request->HighRisk) && !empty($request->HighRisk)) {

            $observationIds = KeyObservation::where('user_id', auth()->user()->id)
                ->where('Type_of_risk', 'High Risk')
                ->pluck('third_party_id'); // Assuming there is a column named 'third_party_id' in KeyObservation table

            $query->whereIn('id', $observationIds);
        }

        if (isset($request->MediumRisk) && !empty($request->MediumRisk)) {

            $observationIds = KeyObservation::where('user_id', auth()->user()->id)
                ->where('Type_of_risk', 'Medium Risk')
                ->pluck('third_party_id'); // Assuming there is a column named 'third_party_id' in KeyObservation table

            $query->whereIn('id', $observationIds);
        }

        if (isset($request->LowRisk) && !empty($request->LowRisk)) {

            $observationIds = KeyObservation::where('user_id', auth()->user()->id)
                ->where('Type_of_risk', 'Low Risk')
                ->pluck('third_party_id'); // Assuming there is a column named 'third_party_id' in KeyObservation table

            $query->whereIn('id', $observationIds);
        }


        if (isset($request->riskType) && !empty($request->riskType)) {

            if ($request->riskType === "Reputation") {
                $MarketReputation = MarketReputation::where('user_id', auth()->user()->id)
                    ->where('market_reputation_score', '>', 30)
                    ->pluck('third_party_id');

                $query->whereIn('id', $MarketReputation);
            }


            if($request->riskType ==="Legal"){
                 $CourtCheck = CourtCheck::where('user_id', auth()->user()->id)
                    ->where('legal_score', '>', 30)
                    ->pluck('third_party_id');

                $query->whereIn('id', $CourtCheck);
            }
            if($request->riskType ==="Financial"){
                 $Financial = Financial::where('user_id', auth()->user()->id)
                    ->where('overall_financial_score', '>', 30)
                    ->pluck('third_party_id');

                $query->whereIn('id', $Financial);
            }
            if($request->riskType ==="Operational"){
                 $TaxReurnCredit = TaxReurnCredit::where('user_id', auth()->user()->id)
                    ->where('overall_credit_history_score', '>', 30)
                    ->pluck('third_party_id');

                $query->whereIn('id', $TaxReurnCredit);
            }
            if($request->riskType ==="Regulatory"){
                 $firmBackground = FirmBackground::where('user_id', auth()->user()->id)
                    ->where('regulatory_score', '>', 30)
                    ->pluck('third_party_id');

                $query->whereIn('id', $firmBackground);
            }

        }





        $data['getallThirdParty'] = $query->get();
        return view('company.reports.index', $data);

    }

    public function viewReportsData($id)
    {
        $id = base64_decode($id);
        $data['title'] = "View Reports";
        $data['page'] = "View Reports";
        $data['pageIntro'] = "Introducing Client View Reports";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
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



        return view('company.reports.view-reports',$data);
    }


    public function firm_file_download($id)
    {
        $id = base64_decode($id);
        $data['FirmBackground'] = FirmBackground::where('id', $id)->first();

        // Replace 'path/to/your/image.jpg' with the actual path to your image
        $imagePath = public_path('admin/assets/imgs/firmBacgroundImages/' . $data['FirmBackground']->file);

        // Specify the desired file name
        $fileName = $data['FirmBackground']->file;

        return response()->download($imagePath, $fileName);
    }
    public function onGround_file_download($id)
    {
        $id = base64_decode($id);
        $data['OnGroundVerification'] = OnGroundVerification::where('id', $id)->first();

        // Replace 'path/to/your/image.jpg' with the actual path to your image
        $imagePath = public_path('admin/assets/imgs/OnGroundVerification/' . $data['OnGroundVerification']->upload_picture);

        // Specify the desired file name
        $fileName = $data['OnGroundVerification']->upload_picture;

        return response()->download($imagePath, $fileName);
    }


    public function generate_pdf_of_reports($id)
    {
        $id = base64_decode($id);
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

        $pdf->setOptions(['isPhpEnabled' => true])->loadView('company.reports.all_reports_pdf', $data)
            ->setOptions(['defaultFont' => 'sans-serif']);
            // return View('admin.sale-invoices.trade-buyer-invoice-2', ['tradeInvoices' =>$data, 'path_img_jrais' => $path_img_jrais, 'path_img_logo' => $path_img_logo,]);
        $fecha = date('d/m/Y');
        return $pdf->download("reports-" . strtoupper(utf8_decode($id)) . "-detail-" . $fecha . ".pdf");
    }

    public function sendEmailForRequestThirdParty(Request $request)
    {
        // dd($request->all());

        $department=Department::where('id',$request->third_party_department)->first();
        $zone=Zone::where('id',$request->third_party_location)->first();

        $data =array(
            "third_party_name" =>       $request->third_party_name,
            "third_party_address" =>    $request->third_party_address,
            "third_party_department" => $department ? $department->dept_name : '',
            "third_party_pos" =>       $request->third_party_pos,
            "third_party_location" =>   $zone ? $zone->zone_name : '',
            "third_party_email" =>      $request->third_party_email,
            "third_party_phone" =>      $request->third_party_phone,
            'auth_name'=> auth()->user()->first_name,
            'auth_email'=> auth()->user()->email,
        );

        $recipient = array(
            'auth_name'=> auth()->user()->first_name,
            'auth_email'=> auth()->user()->email,
        );
        $subject='Request for third party';


        // Send email with Markdown template



        try {
            // Send email with Markdown template
            Mail::send('mail.forThirdpartyRequest', ['data' => $data], function ($mail) use ($recipient, $subject) {
                $mail->to($recipient['auth_email'],$recipient['auth_name'],)
                     ->subject($subject);
            });

            // Email sent successfully
            $response = [
                'success' => true,
                'message' => 'Email sent successfully!',
            ];
        } catch (\Exception $e) {
            // Email sending failed
            $response = [
                'success' => false,
                'message' => 'Email sending failed. Error: ' . $e->getMessage(),
            ];
        }

        return response()->json($response);

        return 'Email sent successfully!';
    }




    // public function settingProfile()
    // {
    //     $data['countries'] = countries::all();

    //     return view('user.setting.edit_profile')->with($data);
    // }

    public function settingProfileSubmit(Request $request)
    {
        $data =$request->all();
        User::updateProfile($data);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Auth::id().'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/admin/images/users/'), $filename);

            User::updateProfileImage($filename);
        }

        if ($request->hasFile('logo_file')) {
            $file = $request->file('logo_file');
            $filename = Auth::id().'-'.date('dmyHis').'.'.$file->getClientOriginalExtension();
            $file->move(base_path('/public/storage/vendor/logo/'), $filename);

            User::updateLogo($filename);
        }

        return redirect()->back()->with('success', 'Profile Updated.');
    }


    public function settingPassword()
    {
        return view('user.setting.change_password');
    }

    public function settingPasswordSubmit(Request $request)
    {
        $data = $request->all();
        $password = $request->input('old_password');

        $user = User::find(Auth::id());
        if (!Hash::check($password, $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        } else {
            if ($data['password'] == $data['password_confirmation']) {
                $user->password = bcrypt($data['password']);
                $user->save();

                return redirect()->back()->with('success', 'Password updated.');
            } else {
                return redirect()->back()->with('error', 'Password does not match.');
            }
        }
    }




}
