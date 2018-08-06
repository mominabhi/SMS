<?php

namespace App\Http\Controllers;

use App\Db_class;
use App\Db_sec;
use Illuminate\Http\Request;

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

        $sec = new Db_sec();

        $sec->name = $request->name;
        $sec->save();

        return Redirect::to('add_sec');
    }

    public function deleteSection($id){
        $sec = Db_sec::where('id',$id)->first();
        $sec->db_classes()->detach();
        $sec->delete();

        return Redirect::to('add_sec');

    }
    public function editSection($id){

        $sections = Db_sec::orderBy('name','asc')->get();

        $sec = Db_sec::where('id',$id)->first();
        $sec_id_edit = $sec->id;

        $secView = view('pages.addSection')
            ->with('sec_id_edit',$sec_id_edit)
            ->with('sections',$sections);

        return view('main')->with('main_content',$secView);
    }

    public function updateSection(Request $request){
       $sec = Db_sec::where('id',$request->id)->first();

        //print_r($_POST);
        //echo "<br>".$_POST['name'];
        //echo "<br>".$sec->name;
        $sec->name = $request->name;
        $sec->save();

        return Redirect::to('add_sec');


    }


    /*Class Operation*/

    public function newClass(Request $request){

        //echo $request->name;
        //print_r($request->sections);
        //dd($request);   //die and dump
        //exit();
        $class = new Db_class();



        $class->name = $request->name;
        $class->save();

        /**
         * false means don't override the existing association.
         * if i put True in 2nd parameter, then it delete existing table data and make totally new association
         **/
        $class->db_secs()->sync($request->sections,false);

        return Redirect::to('add_class');
    }

    public function deleteClass($id){
        $class = Db_class::where('id',$id)->first();
        $class->db_secs()->detach();
        $class->delete();

        return Redirect::to('add_class');

    }
    public function editClass($id){

        $classes = Db_class::orderBy('name','asc')->get();

        $class = Db_class::where('id',$id)->first();
        $class_id_edit = $class->id;

        $sections = Db_sec::orderBy('name','asc')->get();

        $classView = view('pages.addClass')
            ->with('class_id_edit',$class_id_edit)
            ->with('classes',$classes)
            ->with('sections',$sections);

        return view('main')->with('main_content',$classView);
    }

    public function updateClass(Request $request){
        $class = Db_class::where('id',$request->id)->first();

        //print_r($_POST);
        //echo "<br>".$_POST['name'];
        //echo "<br>".$sec->name;
        $class->name = $request->name;
        $class->save();

        $class->db_secs()->sync($request->sections,true);

        return Redirect::to('add_class');


    }
}
