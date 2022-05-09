<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index()
    {
        $siswa = Student::with('user')->latest()->paginate(5);

        return view('student.index', compact('siswa'));
    }

    public function show($id)
    {
        $users = User::whereId($id)->firstOrFail();
        $books = $users->books()->latest()->get();

        return view('student.detail', compact('users', 'books'));
    }


    public function create(){
        return view('student.create');
    }

    public function store(StudentRequest $request){

        //get post request
        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password'=> bcrypt($request->password),
            'role' => 'student',
            'remember_token' => Str::random(10)
        ];

        $user = User::create($userData);

        $studentData = [
            'nis' => $request->nis,
            'phone' => $request->phone,
            'user_id' => $user->id
        ];

        //insert to table
        Student::create($studentData);

        return redirect()
        ->route('student.index')
        ->with('success', 'Data berhasil ditambahkan');

    }

    public function destroy($user){

        //delete student
        User::destroy($user);

        //redirect
        session()->flash('success', 'Data Siswa berhasil dihapus');
        return redirect()->back();
    }

    public function edit(Student $student){

        return view('student.edit', compact('student'));
    }

    public function update(StudentRequest $request, Student $student){

        //get post request
        $user = User::findOrFail($student->user_id);

        $userData = [
            'name' => $request->name,
            'email' => $request->email,
            'password'=> bcrypt($request->password),
            'role' => 'student',
            'remember_token' => Str::random(10)
        ];

        $studentData = [
            'nis' => $request->nis,
            'phone' => $request->phone,
            'user_id' => $user->id
        ];

        //update to table
        $student->update($studentData);
        $user->update($userData);

        //redirect
        session()->flash('success', 'Siswa berhasil diubah');
        return redirect()->back();
    }
}
