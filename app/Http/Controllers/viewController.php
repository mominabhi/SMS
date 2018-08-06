<?php

namespace App\Http\Controllers;

use App\Db_class;
use App\Db_sec;
use Illuminate\Http\Request;

class viewController extends Controller
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


    /* My Code Start From here */

    /* load all the page */

    public function loadMain(){
        return view('main');
    }
    public function loadDashboard(){

        $dashboard = view('pages.dashboard');
        return view('main')->with('main_content',$dashboard);
    }
    public function loadSection(){

        $sec_id_edit = 0;
        $sections = Db_sec::orderBy('name','asc')->get();
        $addSection = view('pages.addSection')
            ->with('sec_id_edit',$sec_id_edit)
            ->with('sections',$sections);
        return view('main')->with('main_content',$addSection);
    }
    public function loadClass(){

        $class_id_edit = 0;
        $classes = Db_class::orderBy('name','asc')->get();
        $sections = Db_sec::orderBy('name','asc')->get();

        $addClass = view('pages.addClass')
            ->with('class_id_edit',$class_id_edit)
            ->with('classes',$classes)
            ->with('sections',$sections);

        return view('main')->with('main_content',$addClass);
    }
}
