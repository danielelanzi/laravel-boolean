<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{   
    // Gender
    // Funzione Api per Javascript per ricevere dati in POST
    public function gender(Request $request)
    {
    
        $data = $request->all();

        // Dati nella config simil Database
        $genders = config('students.genders');
        $students = config('students.students');
    
        // dd($data);

        // Result vuoto da riutilizzare per la chiamata in json
        $result = [
            'error' => '',
            'response' => []
        ];

        // Il data->gender e genders nel database o config esiste
        if (in_array($data['gender'], $genders)) {

            // variabile di data->gender
            $genderPost = $data['gender'];

            // Restituisce tutti i gender
            if ($genderPost == 'all') {
                // result di json
                $result['response'] = $students;
                // rerturn di json
                return response()->json($result, 200);
            } 
            else // Restituisce solo il gender specificato
            {
                foreach ($students as $key => $student) 
                {
                    if ($student['gender'] == $genderPost) 
                    {
                        $result['response'][] = $student;
                    }
                }
                return response()->json($result, 200);
            }
        }
        // Se non esiste mi ristituisci un errore
        else {
            $result['error'] = 'Gender non esistente';
            return response()->json($result, 200);
        }
    }

    // Età
    public function eta(Request $request)
    {
    
        $data = $request->all();

        // Dati nella config simil Database
        $eta = config('students.eta');
        $students = config('students.students');

        // dd($data);

        // Result vuoto da riutilizzare per la chiamata in json
        $result = [
            'error' => '',
            'response' => []
        ];

        // Il data->gender e eta nel database o config esiste
        if (in_array($data['eta'], $eta)) {

            // variabile di data->eta
            $etaPost = $data['eta'];

            // Restituisce tutti le eta
            if ($etaPost == 'all') {
                // result di json
                $result['response'] = $students;
                // rerturn di json
                return response()->json($result, 200);
            } else // Restituisce solo eta specificata
            {
                foreach ($students as $key => $student) {
                    if ($student['eta'] == $etaPost) {
                        $result['response'][] = $student;
                    }
                }
                return response()->json($result, 200);
            }
        }
        // Se non esiste mi ristituisci un errore
        else {
            $result['error'] = 'Età non esistente';
            return response()->json($result, 200);
        }
    }
}
