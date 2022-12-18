<?php

namespace App\Http\Controllers\Tools;

use App\Models\Tool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ToolsController extends Controller
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
        $tools = Tool::paginate(15);
        return view('addTools.add_tools' , compact('tools'));
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
            'serial_number' => 'required',
            'item_name' => 'required',
            'brand' => 'required',
            'status' => 'required',
            'location' => 'required',
            'department' => 'required'
        ]);

        $insert = Tool::create([
            'serial_number'=>$request->serial_number ,
            'item_name'=>$request->item_name,
            'brand'=>$request->brand,
            'status'=>$request->status,
            'location'=>$request->location,
            'department'=>$request->department,
            'tool_image'=>$request->tool_image
        ]);
        if($insert){
            return redirect()->back()->with('Inserted Successfully');
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
        $find = Tool::where('id', $id)->first();
        $tools = Tool::paginate(15);
        return view('addTools.edit_tool' , compact('tools','find'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $find = Tool::where('id', $id)->update([
            'serial_number'=>$request->serial_number ,
            'item_name'=>$request->item_name,
            'brand'=>$request->brand,
            'status'=>$request->status,
            'location'=>$request->location,
            'department'=>$request->department,
            'tool_image'=>$request->tool_image
        ]);
        if($find){
            return redirect()->route('infoTools.create');
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
        $delete = Tool::where('id', $id)->delete();
        if($delete){
            return redirect()->route('infoTools.create');
        }
    }
}
