<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\student\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students()
    {
        $student = Student::get();
        return view('admin.student.index', compact('student'));
    }

    public function addStudent()
    {
        return view('admin.student.add');
    }

    public function storeStudent(Request $request)
    {
        $studentID = 'GID' . mt_rand(100000, 999999);

        $request->validate([
            'passport_no' => ['required', 'unique:' . Student::class],
            'email' => ['required', 'unique:' . Student::class],
        ]);

        $student = new Student();
        $student->student_id = $studentID;
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->mname = $request->mname;
        $student->passport_no = $request->passport_no;
        $student->passport_expirey = $request->passport_expirey;
        $student->gender = $request->gender;
        $student->country = $request->country;
        $student->state = $request->state;
        $student->city = $request->city;
        $student->address = $request->address;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->status = $request->status;
        $student->referral = $request->referral;
        $student->country_of_interest = $request->country_of_interest;
        $student->country_of_edu = $request->country_of_edu;
        $student->edu_level = $request->edu_level;
        $student->grading_scheme = $request->grading_scheme;
        $student->grading_average = $request->grading_average;
        $student->rejection = $request->rejection;
        if ($request->hasFile('profile_pic')) {
            $picture = $request->profile_pic;
            $profile_pic = rand(1111111, 9999999) . '.' . $picture->getClientOriginalExtension();
            $picture->move(public_path('student/'), $profile_pic);
            $student->profile_pic = $profile_pic;
        }

        $student->added_by = 'Super Admin';
        $student->save();
        return redirect()->back()->with('success', 'Student Added Successfully');
    }

    public function studentDetial($id)
    {
        $student = Student::find($id);
        return view('admin.student.studentDetail', compact('student'));
    }
}
