<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Applicant;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('apply.applicant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email'  => 'required|email|unique',
            'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:100',
            'resume_file_name' => 'required|mimes:pdf,doc,docx|max:2048',
            'phonenumber' => 'required|integer',
            'cover_letter' => 'required|string',
            
             
        ]);
       
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        $resumeFileName = $request->file('select_file')->getClientOriginalName();

  

        request()->image->move(public_path('images'), $imageName);
        
        $applicant = new Applicant([
            'first_name' => $request->get('product_name'),
            'surnname' => $request->get('description'),
            'email' => $request->get('price'),
            'image_name' => $imageName,
            'phonenumber' => $request->get('phonenumber'),
            'resume_file_name' => $resumeFileName,
            'cover_letter' => $request->get('cover_letter')
            
    
        ]);
        return back()->with('success','You have successfully added a new product.');

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
