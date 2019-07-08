<?php

namespace App\Http\Controllers;

use App\Clinic;
use App\Diagnosis;
use App\Doctor;
use Illuminate\Http\Request;
use app\User;
use Auth;
use App\FavoriteDoctor;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function information(){
        if(Auth::user()==null){
            return view('auth.login');
        }

        $users = Auth::user()->id;
        $diagnoses = Diagnosis::where('member_id',$users)->get();
        $clinics = Clinic::all();
        $doctors = Doctor::all();
        $data=['user'=>$users,'diagnoses'=>$diagnoses,'clinics'=>$clinics,'doctors'=>$doctors];
        return view('member.information', $data);

    }

    public function favoritedoctor($id){
        if(Auth::user()==null){
            return view('auth.login');
        }
        $doctors = Doctor::find($id);
        FavoriteDoctor::create([
            'user_id' =>Auth::user()->id,
            'doctor_id' => $doctors->id,
        ]);
        return back();
    }

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
}
