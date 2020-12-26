<?php

namespace App\Http\Controllers;
use App\Model\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function ShowCrudPage()
   {
   return view('Crud.index');
   }
   // Show insert form
     public function ShowTablePage()
   {
   return view('Crud.table');
   }

    public function SubmitFormData(Request $val)
   {
   	// validation
   	$this ->validate($val, [
   		'name' => 'required',
   		'email' => 'required| unique:Cruds',
   		'uname' => 'required',
   		'cell' => 'required',
   		

   	],[

   		'name.required' =>'plz name field fillup korun'
   	]);
   	// Data send to database table

   		Crud::create([
   			'name' =>$val ->name,
   			'email' =>$val ->email,
   			'cell' =>$val ->cell,
   			'uname' =>$val ->uname,
   			
   		]);
   		return redirect() ->back();
   }
}
