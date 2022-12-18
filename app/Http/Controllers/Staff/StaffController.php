<?php

namespace App\Http\Controllers\Staff;

use App\Models\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaffController extends Controller
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
        $staff = Staff::paginate(10);
        return view('addStaff.addStaff' ,compact('staff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'location'=>'required',
            'staff_id'=>'required',
            'department'=>'required',
            'phone_number'=>'required|digits:10',
        ]);
        $staff = Staff::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'branch_id'=> $request->location,
            'staff_id'=>$request->staff_id,
            'department'=> $request->department,
            'phone_number'=>$request->phone_number,
            'status'=> 0
        ]);
        if($staff){
            return redirect()->back()->with(['success' => 'Data Saved Successfully']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $staff = Staff::where('id', $id)->first();
        return view('addStaff.editStaff', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $validate = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'location'=>'required',
            'staff_id'=>'required',
            'department'=>'required',
            'phone_number'=>'required|digits:10',
        ]);
        $staff = Staff::where('id', $id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'branch_id'=> $request->location,
            'staff_id'=>$request->staff_id,
            'department'=> $request->department,
            'phone_number'=>$request->phone_number,
            'status'=> 0
        ]);
        if($staff){
            return redirect()->route('infoStaff.create')->with(['success' => 'Data updated Successfully']);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = Staff::where('id', $id)->delete();
        return redirect()->route('infoStaff.create')->with(['success' => 'Data deleted Successfully']);

    }
}
