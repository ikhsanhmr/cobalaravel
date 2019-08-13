<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = Student::all();

		return view('students.index',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
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
        //$student = new Student;
        //$student->nama = $request->nama;
       // $student->nrp = $request->nrp;
        //$student->email = $request->email;
       // $student->jurusan = $request->jurusan;

      //  $student->save();
/*
        Student::create([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan

        ]);
        */


        $request->validate([
'nama'=>'required',
'nrp'=>'required|size:9',
'email'=>'required',
'jurusan'=>'required',
        ]);


        Student::create($request->all());
        return redirect('/students')->with('status', 'Data ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
      // dump($student);
        return view ('students.show', compact ('student'));
        //return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
        request()->validate([
            'nama' => 'required',
            'nrp' => 'required',
        ]);


        $student->update($request->all());


        return redirect()->route('students.index')
                        ->with('status','Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
        $student->delete();


        return redirect()->route('students.index')
                        ->with('status','Data berhasil di hapus');
    }
}
