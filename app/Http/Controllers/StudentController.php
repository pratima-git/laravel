<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request)
    {
        $student= new Student();
        $student->name=$request['name'];
        $student->address=$request['address'];
        $student->email=$request['email'];
        $student->save();
        
        //Student::create($request(all));
       
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('student.show',['student'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', ['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->name=$request->input('name');
        $student->address=$request->input('address');
        $student->email=$request->input('email');
        $student->update();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index');
    }

    /**
     * 
     *  @return \Illuminate\Http\Response
     */
    public function check_email(AjaxUserExistsRequest $request)
    {
        $email = $request->input('email'); // Uta data mah j name dinxa yeta input mah tyai hunxa
        $status = Student::where('email', '=', $email)->exists();
        if($status == true){ //yo sajilo hunxa vanerw lekheko haii
            return response()->json([
                'success'=> false,
                'message'=> 'This email already exists'
            ]);
        }
        else{ // Yoo pani
            // Aba run hunxa hola
            //tyo jun jun edit garey xam ni arkai color axa
            // Tyo tmle git mah halerw hoo
            // upload gare paxi yoo yoo heheheh
        return response()->json([
            'success'=> true,
            'message'=>'This email is available'
        ]);
    }
    }
    
    
}
