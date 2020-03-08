<?php

namespace App\Http\Controllers;
use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{
    public function submit(CompanyRequest $req){
        $company= new Company();
        $company->name = $req->input('name');
        $company->email = $req->input('email');
        $company->logo;
        $company->website = $req->input('website');
        $company->save();
        return redirect()->route('companies');
    }

    public function getData(){
        $company= new Company();
        return view('companies', ['data'=> DB::table('companies')->paginate(10)]);
    }

    public function rename($id){
        $company= new Company();
        return view('renameCompany', ['data'=>$company->find($id)]);
    }

    public function update( $id, CompanyRequest $req){
        $company= new Company();
        $company->name = $req->input('first_name');
        $company->email = $req->input('email');
        $company->logo = $req->input('logo');
        $company->company = $req->input('company');
        $company->website = $req->input('website');
        $company->save();
        return redirect()->route('companies');
    }

    public function delete($id){
        Company::find($id)->delete();
        return redirect()->route('companies');
    }


}
