<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderByDesc('created_at')->paginate(20);
        // dd($companies);
        return view('users.companies.index',[
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => ['required',
            'numeric', new PhoneNumber
            ]
        ]);
        // dd($data);
        Company::create($data);
        // $company = new Company;
        // $company->name = $data['name'];
        // $company->address = $data['address'];
        // $company->phone = $data['phone'];
        // $company->save();

        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     *  * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('users.companies.show',[
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('users.companies.edit',[
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Company $company)
    {
            $data = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => ['required',
            'numeric', new PhoneNumber
            ]]);
            $company ->update($data);
            return redirect()->route('companies.index');
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
