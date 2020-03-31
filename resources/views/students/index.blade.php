@extends('layouts.layout')
@section('main')
    <div class="students">
        {{-- {{config('students.students')}} --}}
        @foreach (config('students.students') as $key => $student)
            <div class="student">
                <div class="info">
                    <img src="{{$student['img']}}" alt="{{$student['nome']}}">
                    <div class="text">
                    <a href="{{route('student.show', [ 'id' => $key ])}}">
                            <h2>
                                {{$student['nome']}} ({{$student['eta']}} anni)
                            </h2>
                        </a>
                        <h3>
                            Assunt{{($student['genere'] == 'm') ? 'o' : 'a'}} da {{$student['azienda']}} come {{$student['ruolo']}}
                        </h3>
                    </div>
                </div>
                <p class="description">
                    {{$student['descrizione']}}
                </p>
            </div>
        @endforeach
    </div>
@endsection