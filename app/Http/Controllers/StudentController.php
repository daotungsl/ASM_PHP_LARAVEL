<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;
use Illuminate\View\View;
use App\Student;

class StudentController extends Controller
{
    //

    public function doSave()
    {
        $student = new Student();
        $student->rollNumber = Input::get('rollNumber');
        $student->name = Input::get('name');
        $student->gender = Input::get('gender');
        $student->phone = Input::get('phone');
        $student->email = Input::get('email');
        $student->save();

        return 'success';

    }
    public function select(){

    }

    public function doEit(Request $request,$id){
        $editStudent = Student::find($id);
        $editStudent->rollNumber = Input::get('rollNumber');
        $editStudent->name = Input::get('name');
        $editStudent->gender = Input::get('gender');
        $editStudent->phone = Input::get('phone');
        $editStudent->email = Input::get('email');
        $editStudent->save();
    }

}
