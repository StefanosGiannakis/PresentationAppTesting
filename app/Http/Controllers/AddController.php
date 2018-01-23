<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Presentation;
use App\User;

class AddController extends Controller
{
    
    public function PresentationPage()
    {
        return view('addpresentation');
    }

    
    function SaveForm(Request $request) {
       
       $this->validate($request, [
            'title'=> 'required',
            'description'=> 'required',
        ]);
       // Create new Presentation
        $data =new Presentation;
        $data-> title = $request->input('title');
        $data-> description = $request->input('description');
        
        // We pass the id of the active user 
        $data->  userId =Auth::user()->id;
        //Save it
        $data-> save();
        // Redirect
        return redirect('/mypresentations')->with('success','Presentation Added');
      //echo Auth::user();

    }

     public function MyPresentations()
    {
        $values=Presentation::where('userId',Auth::user()->id)->get(); 
        $user=User::all();
        
        return view('mypresentations')->with('presentations',$values,'user',$user);
       // echo $values;
    }
}
