<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

use DB;

class LandingpageController extends Controller
{

    public function index(Request $request)
    {

        $customers = [];
        if ($request->queries){
            $customers = Customer::where('nombor_ic', $request->queries)->get();
        }

        return view('landingpage')->with('customers', $customers);

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

    public function aboutus()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function hibah_aset()
    {
        return view('hibah_aset');
    }

    public function urus_pusaka()
    {
        return view('urus_pusaka');
    }

    public function khairat()
    {
        return view('khairat');
    }

    public function hartanah()
    {
        return view('hartanah');
    }

    public function poster()
    {
        return view('poster');
    }

    public function video()
    {
        return view('video');
    }
}
