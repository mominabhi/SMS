<?php

namespace App\Http\Controllers;

use App\secModel;
use Request;
use Illuminate\Support\Facades\Redirect;

class formController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * All Forms are here
     */

    public function newSection(Request $request){

        $sec = new secModel();

        $sec->name = $request->name;
        $sec->save();

        return Redirect::to('add_sec');
    }

    public function deleteSection($id){
        $sec = secModel::where('id',$id)->first();
        $sec->delete();

        return Redirect::to('add_sec');

    }
    public function editSection($id){

        $sections = secModel::orderBy('name','asc')->get();

        $sec = secModel::where('id',$id)->first();
        $sec_id_edit = $sec->id;

        $secView = view('pages.addSection')
            ->with('sec_id_edit',$sec_id_edit)
            ->with('sections',$sections);

        return view('main')->with('main_content',$secView);
    }

    public function updateSection(Request $request){
       // $sec = secModel::where('id',$request->id)->first();

        print_r($_POST);
        echo "<br>".$_POST['name'];
        echo "<br>".$request->name;
    }
}
