<?php

namespace App\Http\Controllers\Assign;

use App\Models\Tool;
use App\Models\Staff;
use App\Models\Assign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AssignToolsController extends Controller
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
        $tools = Tool::where('assign',null)->get();
        $staff = Staff::all();

        return view('assignTools.assignTools', compact('tools', 'staff'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'staff_id'=> 'required',
            'tool_id'=>'required'
        ]);
        $assign = Assign::create([
            'staff_id' => $request->staff_id,
            'tool_id' => $request->tool_id
        ]);
        $tools = Tool::where('id', $request->tool_id)->update([
            'assign'=> 1
        ]);
        if($assign){
            return redirect()->route('dashboard');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
