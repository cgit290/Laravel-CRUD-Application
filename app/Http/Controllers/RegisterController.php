<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url = route('member.register');
        $title = "Member Registration Form";
        $member="";
        $data = compact('member','url','title');
        return view('register')->with($data);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'member_name' => 'required',
                'email' => 'required | email',
                'dob' => 'required',
                'gender' => 'required',
                'password' => 'required | confirmed',
                'password_confirmation' => 'required'
            ]
        );
        $member = new Members;
        $member->member_name = $request->input('member_name'); 
        $member->email = $request->input('email');
        $member->password = bcrypt($request->input('password')); // Encrypt password
        $member->dob = $request->input('dob');
        $member->gender = $request->input('gender');
        $member->status = 1;
        $member->save();
        return redirect('view');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $members = Members::all();
        $data = compact('members');
        return view('view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Members::find($id);
        $title = "Member Edit Form";
        $url = route('member.update',$id);
        $data = compact('member','url','title');
        return view('register')->with($data);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function status($id)
    {
        $member = Members::find($id);
        $getstatus = $member['status'];
        if($getstatus == 1){
            $setstatus = 0;
        }else{
            $setstatus = 1;
        }
        $member->status = $setstatus;
        $member->save();
        return redirect('view');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Members::find($id);
        $member->member_name = $request->input('member_name'); 
        $member->email = $request->input('email');
        $member->dob = $request->input('dob');
        $member->gender = $request->input('gender');
        $member->save();
        return redirect('view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Members::find($id);
        if(!is_null($member)){
            $member->delete();
        }
        return redirect('view');
    }
}
