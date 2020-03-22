<?php

namespace App\Http\Controllers;
use App\Applicant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Requests;
class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
    
     
        if ($request->isMethod('post')) {
           
            // vallidate  required inputs
            $this->validate($request, [
                    'surname' => 'required',
                    'fristName' => 'required',
                    'photograph' => 'required',
                    'email' => 'required',
                    'cv' => 'required',
                    'photo' => 'required|mimes:jpeg|max:100',
                    //'cv' => 'required|mimes:doc,docx,pdf|max:2048'

                ]
            );


            $cv = $request->cv->getClientOriginalName();
            $cvcontent = file_get_contents($request->cv);
            $photo = $request->photograph->getClientOriginalName();
            $photocontent = file_get_contents($request->photograph);

            // Store the files in storage folder
            Storage::disk('local')->put($cv, $cvcontent);
            Storage::disk('local')->put($photo, $photocontent);
            /// Create applicant record in DB
            Applicant::create($request->all());
        return route('home');
    }
    return view('apply');
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
