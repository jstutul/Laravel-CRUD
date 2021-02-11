<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;
class EmployController extends Controller
{
    function EmployList(Request $req)
    {
        $data= Employe::all();
        return view("insert",['data'=>$data]);
    }
    function addEmployes(Request $req)
    {
       $em=new Employe();
       $em->first_name=$req->first_name;
       $em->last_name=$req->last_name;
       $em->city=$req->city;
       $em->age=$req->age;
       $em->save();
       $req->session()->flash('save',"Data");
       return redirect('add');

    }
    function empdelete($id,Request $req)
    {

        $data =Employe::find($id);
        $data->delete();
        $req->session()->flash('delete',"Data");
        return redirect('add');
    }
    function empedit($id)
    {
        $data=Employe::find($id);
        return view('update',['data'=>$data]);
    }
    function update(Request $req)
    {
        $em=Employe::find($req->id);
        $em->first_name=$req->first_name;
        $em->last_name=$req->last_name;
        $em->city=$req->city;
        $em->age=$req->age;
        $em->save();
        $req->session()->flash('update','Data');
        return redirect('add');


    }
}
