<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    private $students;
    private $genders;

    public function __construct()
    {
        $this->students = config('students.students');
        $this->genders = config('students.genders');
        // $this->getAllStudents();
        // $this->getAllGenders();
    }

    public function index()
    {
        $data = 
        [
            'students' => $this->students,
            'genders' => $this->genders
        ]; 
        // dd($this->students);
        // return view('students.index', compact('students'));
        return view('students.index', $data);
    }

    public function show($slug = null)
    {
        foreach ($this->students as $studente) 
        {

            if ($studente['slug'] == $slug) {
                return view('students.show', ['student' => $studente]);
            }
        }
        return abort('404');
    }

    public function getById($id)
    {    // controlla se la chiave di un array esiste
        if(!array_key_exists($id, $this->students)) {
            // rimanda a una pagina errore tramite stringa
            return abort('404');
        }
        // $student = $this->students[$id];

        return view('students.show', ['student' => $this->students[$id]]);
    }

    // private function getAllStudents()
    // {
       
    //     $this ->students = config('students.students');
    //     // dd($this->students);
    // }

    // private function getAllGenders()
    // {
       
    //     $this ->genders = config('students.genders');
    //     // dd($this->students);
    // }
}
