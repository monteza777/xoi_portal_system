<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Candidate;
use App\CandidatesDetail;
use App\Rules\FileValidation;
use Validator;
class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates = Candidate::all();
        return view('admin.candidates.index',compact('candidates'));
    }

    public function create()
    {
        return view('admin.candidates.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'has_images.*' => 'mimes:pdf,dot,doc,docx'
        ]);
        
        $files = $request->file('has_images');
        $candidate = new Candidate;
        if(empty($files)):
           Candidate::create($request->all());
        else:
            foreach($files as $file):

                $filenameWithExt = $file->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileNametoStore = $filename.'_'.time().'.'.$extension;
                $path = $file->storeAs('public/uploads', $fileNametoStore);

                $cvs[] = [
                    'CV' => $fileNametoStore
                ];
            endforeach;
            $data = request()->all();
            $data['has_images'] =  json_encode($cvs); // if not empty
            Candidate::create($data);

        endif;
        
            foreach ($request->input('details', []) as $data) {
            $candidate->candidate_details()->create($data);
            }
        return redirect()->route('admin.candidates.index');
    }

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
        return 'test';
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

    public function upload(Request $request){

    }
}
