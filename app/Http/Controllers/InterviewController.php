<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interviews = Interview::orderBy('created_at' , 'DESC')->simplePaginate(2);
        // compact untuk kirim data
        return view("dashboard.index", compact('interviews'));    }

        public function data(Request $request)
        {
            $search = $request->search;
            $interviews = Interview::where('nama', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'DESC')->get();
            // compact untuk kirim data
            return view("dashboard.data", compact('interviews'));
        
        }
    public function login()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'nama' => 'required|min:3',
                'email' => 'required',
                'age' => 'required',
                'no_tlp' => 'required',
                'last_education' => 'required',
                'education_name' => 'required',
                'cv_file' => 'required|image|mimes:jpeg,jpg,png,svg',
            ]);
    
            $image = $request->file('cv_file');
            $imgName = rand(). '.' .  $image->extension();
            $path = public_path('assets/image/');
            $image->move($path, $imgName);
    
            Interview::create([
                'nama' => $request->nama,
                'email' => $request->email,
                'age' => $request->age,
                'no_tlp' => $request->no_tlp,
                'last_education' => $request->last_education,
                'education_name' => $request->education_name,
                'cv_file' => $imgName,
    
            ]);
    
            return redirect()->back()->with('Succes', 'Berhasil menambahkan data baru!');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interview $interview)
    {
        //
    }
}
