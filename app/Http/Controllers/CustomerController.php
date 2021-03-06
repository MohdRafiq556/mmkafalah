<?php

namespace App\Http\Controllers;

use App\Models\Hibah;
use App\Models\Receiver;
use Illuminate\Http\Request;

use App\Models\Customer;

class CustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['customer_view_receivers', 'customer_view', 'customer_view_receiver_detail', 'customer_view_hibah_detail']);
    }//end construct
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $role_id = auth()->user()->role_id;

        if($request->get('keyword') != null){
            //search based of keyword
            $keyword = $request->get('keyword');
            $customers = Customer::where('nombor_ic', 'LIKE', '%'.$keyword.'%')->paginate(10);
        }
        //display all record
        else{
            if($role_id != 1){
                $customers = Customer::where('user_id', auth()->user()->id)->paginate(10);//SELECT * from customers
            } else {
                $customers = Customer::paginate(10);//SELECT * from customers
            }
        }
        return view ('customers.index')->with(compact('customers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //display form create
        return view('customers.create');//create.blade.php

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $customer = new Customer();
            //$customer->user_id = get('user_id');
            $customer->nama_penuh = $request->get('nama_penuh');
            $customer->nombor_ic = $request->get('nombor_ic');
            $customer->tarikhlahir = $request->get('tarikhlahir');
            $customer->tempat_lahir = $request->get('tempat_lahir');
            $customer->keturunan = $request->get('keturunan');
            $customer->warganegara = $request->get('warganegara');
            $customer->jantina = $request->get('jantina');
            $customer->agama = $request->get('agama');
            $customer->nombor_telefon = $request->get('nombor_telefon');
            $customer->nombor_hp = $request->get('nombor_hp');
            $customer->alamat_rumah = $request->get('alamat_rumah');
            $customer->poskod = $request->get('poskod');
            $customer->bandar = $request->get('bandar');
            $customer->negeri = $request->get('negeri');
            $customer->pekerjaan = $request->get('pekerjaan');
            $customer->pendapatan = $request->get('pendapatan');
            $customer->nama_majikan = $request->get('nama_majikan');
            $customer->sektor = $request->get('sektor');
            $customer->jumlah_tanggungan = $request->get('jumlah_tanggungan');
            $customer->tinggi = $request->get('tinggi');
            $customer->berat = $request->get('berat');
            $customer->nombor_akaun = $request->get('nombor_akaun');
            $customer->bank = $request->get('bank');
            $customer->pakej_pilihan = $request->get('pakej_pilihan');
            $customer->jumlah_simpanan = $request->get('jumlah_simpanan');
            $customer->jum_simpanan = $request->get('jum_simpanan');
            $customer->email_pelanggan = $request->get('email_pelanggan');
            $customer->tarikh = $request->get('tarikh');
            $customer->pegawai_perunding = $request->get('pegawai_perunding');
            $customer->gambar_ic = $request->file('gambar_ic')->store('public/storage');
            $customer->user_id = auth()->user()->id;
            $customer->save();



        //redirect to index
        return redirect('/customers');
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
        $customer = Customer::find($id);
        return view ('customers.show')->with(compact('customer'));

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
        $customer=Customer::find($id);
        return view('customers.edit')->with(compact('customer'));//call form edit
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
        $customer = Customer::find($id);
        $customer->update($request->only('tempat_lahir','keturunan','warganegara','jantina','agama','nombor_telefon','nombor_hp','alamat_rumah','poskod','bandar','negeri','pekerjaan','pendapatan','nama_majikan','sektor','jumlah_tanggungan','tinggi','berat','nombor_akaun','bank','pakej_pilihan','jumlah_simpanan','jum_simpanan','email_pelanggan','tarikh','pegawai_perunding','gambar_ic'));

        //redirect to index
        return redirect('/customers')->with('success', 'Maklumat Pelanggan Berjaya diKemasikini!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //delete record based on IC number
        $customer = Customer::find($id);
        $customer->delete();

        return redirect ('/customers')->with('success', "Rekod Berjaya Dipadam!");
    }

    public function customer_view(Request $request){
        $hibahs = Hibah::where('customer_id', $request->customer)->paginate(10);

        return view('share_hibah_view')->with('hibahs', $hibahs);
    }

    public function customer_view_receivers(Request $request){
        $data = new \stdClass();
        //
        $receivers = Receiver::where('hibah_id', $request->hibah)->paginate(10);
        $hibah_id = $request->hibah;
        $hibah = Hibah::find($hibah_id);
        $customer_id = $hibah->customer_id;
        $data->receivers = $receivers;
        $data->hibah_id = $hibah_id;
        $data->customer_id = $customer_id;


        return view('share_receivers')->with('receivers', $receivers)->with('data', $data);
    }

    public function customer_view_receiver_detail(Request $request){
        $receiver = Receiver::find($request->receiver);

        return view('share_detail_receiver')->with('receiver', $receiver);
    }

    public function customer_view_hibah_detail(Request $request){
        $customer = Customer::find($request->customer);

        return view('share_detail_hibah_view')->with('customer', $customer);
    }

    public function download(Request $request)
    {
        $dl = File::find($id);
        $dl = $customer->gambar_ic;
        return Storage::download($dl);
    }


    
}
