<?php

namespace App\Http\Controllers\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class teamController extends Controller
{
    function index()  {

        $data['title'] = "Team Dashboard";
        $data['page'] = "Dashboard";
        $data['pageIntro'] = "Introducing Team Dashboard";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        return view('team.index',$data);
    }

    function login(){
        if(Auth::guard('team')->check()){
            return redirect(route('team.index'));
        }else{
            return view('team.login');

        }
    }

    function loginSubmit(Request $request){
        $data = $request->all();
        if(Auth::guard('team')->attempt(['team_email' => $data['team_email'], 'password' => $data['password'], 'status' => 1])){
            return redirect(route('team.index'));
        }else{
            return redirect()->back()->with('error', 'Authentication Failed.');
        }
    }

     // vender means Reports list start 
     function report_List(){

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports Managment";
        $data['pageIntro'] = "Reports List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('team.report.index',$data);
    }

    function report_View(){

        $data['title'] = "Reports Managment";
        $data['page'] = "Reports Managment";
        $data['pageIntro'] = "Reports View";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('team.report.view-reports',$data);
    }

    function add_report(){

        $data['title'] = "Reports Managment";
        $data['page'] = "Add Reports";
        $data['pageIntro'] = "Reports Edit";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('team.report.add-report',$data);
    }

    // vender  means Third-party list end 


     // vender means Third-party list start 
     function vender_List(){

        $data['title'] = "Third-Party Managment";
        $data['page'] = "Third-Party Managment";
        $data['pageIntro'] = "Third-Party List";
        $data['pageDescription'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
       
        //   $vendoruser=User::where('vendor_status',2)->count();
            return view('team.third-party.index',$data);
    }

     // vender means Third-party list End 




    function logout(){
        Auth::guard('team')->logout();

        return redirect(route('team.login'));
    }
}
