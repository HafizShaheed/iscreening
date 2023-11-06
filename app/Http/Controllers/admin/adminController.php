<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;
use Mail;
use Carbon\Carbon;

class adminController extends Controller
{
      //
    function index(){

    $data['title'] = "Admin Dashboard";
    $data['page'] = "Dashboard";
    $data['pageIntro'] = "Introducing DD Dashboard";
    $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
    $data['totaluser']=User::all()->count();
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
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.client.index',$data);
    }


    function Edit_company(){

        $data['title'] = "Client Managment";
        $data['page'] = "Edit Client";
        $data['pageIntro'] = "Company";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.client.edit',$data);
    }

    // team list start 
    function team_List(){

        $data['title'] = "Team Managment";
        $data['page'] = "Team Managment";
        $data['pageIntro'] = "Team List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.team.index',$data);
    }

    function Edit_team(){

        $data['title'] = "Team Managment";
        $data['page'] = "Edit Team";
        $data['pageIntro'] = "Team Edit";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.team.edit',$data);
    }

    // team list end 


    
    // vender means Third-party list start 
    function vender_List(){

        $data['title'] = "Third-Party Managment";
        $data['page'] = "Third-Party Managment";
        $data['pageIntro'] = "Third-Party List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.third-party.index',$data);
    }

    function Edit_vender(){

        $data['title'] = "Third-Party Managment";
        $data['page'] = "Edit Third-Party";
        $data['pageIntro'] = "Third-Party Edit";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.third-party.edit',$data);
    }

    // vender  means Third-party list end 


     // vender means Reports list start 
     function report_List(){

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports Managment";
        $data['pageIntro'] = "Reports List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.report.index',$data);
    }

    function report_View(){

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports View";
        $data['pageIntro'] = "Reports View";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.report.view-reports',$data);
    }

    function Edit_report(){

        $data['title'] = "Reports Managment";
        $data['page'] = "Edit Reports";
        $data['pageIntro'] = "Reports Edit";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('admin.report.update-report',$data);
    }

    // vender  means Third-party list end 









     public function memberSendMail()
    {

        $curr = date('Y-m-d');
        $validate = date('Y-m-d', strtotime('+5 days', strtotime($curr)));
        $data = User::where('is_feature',1)
                    ->whereHas('featured', function($q) use ($validate){
                        return $q->where('expired_date', $validate);
                    })
                    ->orderby('created_at', 'Desc')->get();

        foreach ($data as $val) {

            $to_name = $val->name;
            $to_email = $val->email;
            $data = array("name"=>$val->name);

            Mail::send('mail.sendMail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
            ->subject("Subscription Expiry Notification");
            $message->from("Info@bsb.com","BSB");
            });

        }

        return redirect()->back()->with('success', 'Email has been sent successfully');



    }




}
