<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Support\Facades\Mail;
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
    function report_List(){
        // dd('dsds');

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports Managment";
        $data['pageIntro'] = "Reports List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('company.reports.index',$data);
    }

    public function viewReportsData()
    {
        $data['title'] = "View Reports";
        $data['page'] = "View Reports";
        $data['pageIntro'] = "Introducing Client View Reports";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        return view('company.reports.view-reports',$data);
    }

    public function sendEmailForRequestThirdParty(Request $request)
    {
        // dd($request->all());
        $data =array(
            "third_party_name" =>       $request->third_party_name,
            "third_party_address" =>    $request->third_party_address,
            "third_party_department" => $request->third_party_department,
            "third_party_pos" =>       $request->third_party_pos,
            "third_party_location" =>   $request->third_party_location,
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
