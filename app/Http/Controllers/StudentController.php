<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('students.index', [
            'students' => student::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create', [
            'sexs' => ['M', 'F', 'U'],
            'maritals'=>['S', 'C','V','D','U'],
            'stratums'=>['1','2','3','4','5','6'],
            'residence_types'=>['URBANA', 'RURAL']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {

        //$student =new student();
        //$student->document_number = $request->document_number;
        //$student->name = $request->name;
        //$student->sex =$request ->sex;
        //$student->marital_status =$request ->marital_status;
        //$student->date_of_birth =$request ->date_of_birth;
        //$student->residence_address =$request ->residence_address;
        //$student->stratum =$request ->stratum;
        //$student->residence_type =$request ->residence_type;
        //$student->height =$request ->height;
        //$student->institutional_email =$request ->institutional_email;
        //$student->cell_phone_number =$request ->cell_phone_number;
        //$student->save();
        student::create($request->all());
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
        return view('students.show', [
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
        return view('students.edit', [
            'student' => $student,
            'sexs' => ['M', 'F', 'U'],
            'maritals'=>['S', 'C','V','D','U'],
            'stratums'=>['1','2','3','4','5','6'],
            'residence_types'=>['URBANA', 'RURAL']
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, student $student)
    {
        //$student->document_number = $request->document_number;
        //$student->name = $request->name;
        //$student->sex =$request ->sex;
        //$student->marital_status =$request ->marital_status;
        //$student->date_of_birth =$request ->date_of_birth;
        //$student->residence_address =$request ->residence_address;
        //$student->stratum =$request ->stratum;
        //$student->residence_type =$request ->residence_type;
        //$student->height =$request ->height;
        //$student->institutional_email =$request ->institutional_email;
        //$student->cell_phone_number =$request ->cell_phone_number;
        //$student->update();
        $student->update($request->all());
        return redirect('/students');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
        $student->delete();
        return back();

    }
}
