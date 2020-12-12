<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data["company"] = Company::where("user_id",Auth::id())->first();
        return view('work.company_profile',$data);
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
        $request->validate([
            'title' => 'required',
            'cin' => 'required',
            'address' => 'required',
            'industry_type' => 'required',
            'logo' => 'mimes:jpg,png',
        ]);

        //image insertion
        $filename = time() . "." . $request->logo->extension();
        $request->logo->move(public_path("company_logo"),$filename);


        $c = new Company();
        $c->title = $request->title;
        $c->cin = $request->cin;
        $c->est_year = $request->est_year;
        $c->address = $request->address;
        $c->industry_type = $request->industry_type;
        $c->logo = $filename;
        $c->description = $request->description;
        $c->user_id = Auth::id();
        $c->save();

        return redirect()->back();

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
