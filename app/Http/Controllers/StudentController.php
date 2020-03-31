<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;

    public function __construct()
    {
        $this->getAllStudents();
    }

    public function index()
    {
        $students = $this->students;
        // dd($this->students);
        // return view('students.index', compact('students'));
        return view('students.index');
    }

    public function show($id)
    {    // controlla se la chiave di un array esiste
        if(!array_key_exists($id, $this->students)) {
            // rimanda a una pagina errore tramite stringa
            abort('404');
        }
        $student = $this->students[$id];

        return view('students.show', compact('student'));
    }

    private function getAllStudents()
    {
       
        $this ->students = config('students.students');
        // dd($this->students);
    }
}
