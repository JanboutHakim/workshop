<?php

namespace App\Http\Controllers;

use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesignController extends Controller
{
    function getAddDesigns()
    {
        return view('addmodel');
    }
    // Method to handle form submission and store data
    public function postAddDesign(Request $request)
    {
        // Validate the form input
        $request->validate([
            'model_number' => 'required|string|max:255',
            'year' => 'required|string|max:255',
            'start_date' => 'required|date',
            'details' => 'required|string',
            'department' => 'required|string|max:255',
            'manager' => 'required|string|max:255',
        ]);

        // Store data into the database
        Design::create([
            'model_number' => $request->model_number,
            'year' => $request->year,
            'start_date' => $request->start_date,
            'details' => $request->details,
            'department' => $request->department,
            'manager' => $request->manager,
        ]);

        // Redirect back with success message
        return redirect()->route('post.create')->with('success', 'تم إضافة المنشور بنجاح!');
    }

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
