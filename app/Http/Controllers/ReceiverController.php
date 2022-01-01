<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hibah;
use Illuminate\Http\Request;

use App\Models\Receiver;

class ReceiverController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth');
    }//end construct*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = new \stdClass();
        //
         $receivers = Receiver::where('hibah_id', $request->id)->paginate(10);
        $hibah_id = $request->id;
        $hibah = Hibah::find($hibah_id);
        $customer_id = $hibah->customer_id;
        $data->receivers = $receivers;
        $data->hibah_id = $hibah_id;
        $data->customer_id = $customer_id;

        return view('receivers.index')->with('receivers', $receivers)->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $hibah_id = $request->id;
        return view('receivers.create')->with('hibah_id', $hibah_id);//create.blade.php
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
        $receiver = new Receiver();
            $receiver->nama_penerima = $request->get('nama_penerima');
            $receiver->ic_penerima = $request->get('ic_penerima');
            $receiver->no_tel_penerima = $request->get('no_tel_penerima');
            $receiver->hubungan = $request->get('hubungan');
            $receiver->bahagian = $request->get('bahagian');
            $receiver->hibah_id = $request->id;
            $receiver->save();

        //redirect to index
        return redirect('/receivers/' . $request->id);
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
        $receiver = Receiver::find($id);
        
        return view ('receivers.show')->with('receiver', $receiver);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $receiver = Receiver::find($id);
        
        return view('receivers.edit')->with(compact('receiver'));//call form edit
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
        //save edited record
        $receiver = Receiver::find($id);
        $receiver->update($request->only('nama_penerima', 'ic_penerima', 'no_tel_penerima', 'hubungan', 'bahagian'));

        //redirect to index
        return redirect('/receivers/' . $request->id)->with('success', 'Maklumat Penerima Berjaya diKemasikini!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        //delete record based on IC number
        $receiver = Receiver::find($id);
        $receiver->delete();

        return redirect ('receivers/{id}')->with('success', "Rekod Berjaya Dipadam!");
    }
}
