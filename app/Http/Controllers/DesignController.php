<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;

class DesignController extends Controller
{
    function index(){
        return view('models',[
            'designs'=>Design::all()]);
    }
    function show($id){
        return view('Design',[
            'design'=>Design::find($id)]);
    }
    function delete($id){
        $design=Design::find($id);
        $design->delete();
        return back()->with('message','Design has been deleted');
    }
}
