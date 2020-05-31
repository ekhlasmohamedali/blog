<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;
class RequestsController extends Controller
{
    
   public function index(){
    return view ('user.request');
}

public function store(Request $request){
    
 $request->validate([
        'gender' => ['required'],
        'student_type' => ['required'],
        'name' => ['required'],
        'student_ssn' => ['required'],
        'code' => ['required'],
        'birthday' => ['required'],
        'residence' => ['required'],
        'address' => ['required'],
        'email' => ['required'],
        'mobile' => ['required'],
        'study_year' => ['required'],
        'collegue' => ['required'],
        'grade' => ['required'],
        //'student_image' => ['required'],
        //'ssn_image' => ['required'],
        'password' => ['required'],
        'password_sure' => ['required'],
        'father_name' => ['required'],
        'parent_link' => ['required'],
        'father_ssn' => ['required'],
        'father_job' => ['required'],
        'phone' => ['required'],
        //'father_image' => ['required'],
        'resident' => ['required'],
        'Estimate_last_year' => ['required'],
        'Estimate_percentage' => ['required'],
        'Alazhar_secondaryschool' => ['required'],
        'Total_secondary_Azhar' => ['required'],
        'guarantor_name' => ['required'],
        'guarantor_ssn' => ['required'],
        'guarantor_mobil' => ['required'],
        'guarantor_job' => ['required'],
        //'guarantor_image' => ['required'],
        'name_of_father' => ['required'],
        'ssn_of_father' => ['required'],
        'job_of_father' => ['required'],
        'salary' => ['required'],
        'familymember_number' => ['required'],
        'bulding_name' => ['required'],
        'room_id' => ['required'],
        'message' => ['required'],
        'endorsement' => ['required'],
    
    ]);


    Student::create([
        'gender' => $request['gender'],
        'student_type' => $request['student_type'],
        'name' => $request['name'],
        'student_ssn' => $request['student_ssn'],
        'code' => $request['code'],
        'birthday' => $request['birthday'],
        'residence' => $request['residence'],
        'address' => $request['address'],
        'email' => $request['email'],
        'mobile' => $request['mobile'],
        'study_year' => $request['study_year'],
        'collegue' => $request['collegue'],
        'grade' => $request['grade'],
        'student_image' =>'ss',
        'ssn_image' =>'test',
        'password' => $request['password'],
        'password_sure' => $request['password_sure'],
        'father_name' => $request['father_name'],
        'parent_link' => $request['parent_link'],
        'father_ssn' =>$request['father_ssn'],
        'father_job' => $request['father_job'],
        'phone' => $request['phone'],
        'father_image' =>'kk',
        'resident' => $request['resident'],
        'Estimate_last_year' => $request['Estimate_last_year'],
        'Estimate_percentage' => $request['Estimate_percentage'],
        'Alazhar_secondaryschool' => $request['Alazhar_secondaryschool'],
        'Total_secondary_Azhar' => $request['Total_secondary_Azhar'],
        'guarantor_name' => $request['guarantor_name'],
        'guarantor_ssn' => $request['guarantor_ssn'],
        'guarantor_mobil' => $request['guarantor_mobil'],
        'guarantor_job' => $request['guarantor_job'],
        'guarantor_image' =>'fa',
        'name_of_father' => $request['name_of_father'],
        'ssn_of_father' => $request['ssn_of_father'],
        'job_of_father' => $request['job_of_father'],
        'salary' => $request['salary'],
        'familymember_number' => $request['familymember_number'],
        'bulding_name' => $request['bulding_name'],
        'room_id' => $request['room_id'],
        'message' => $request['message'],
        'endorsement' => $request['endorsement'],

        
    ]);
    return view('user.requestsucces');


}


}