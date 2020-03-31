@extends('layouts.layout')
@section('main')
    <div class="filter">
    <select name="filter" id="filter">
        @foreach ($genders as $gender)
            <option value="{{$gender}}">{{$gender}}</option>
        @endforeach
    </select>
</div>
    <div class="students">
        {{-- {{config('students.students')}} --}}
        @foreach ($students as $student)
            <div class="student">
                <div class="info">
                    <img src="{{$student['img']}}" alt="{{$student['nome']}}">
                    <div class="text">
                    <a href="{{route('student.show', ['slug' => $student['slug']])}}">
                            <h2>
                                {{$student['nome']}} ({{$student['eta']}} anni)
                            </h2>
                        </a>
                        <h3>
                            Assunt{{($student['gender'] == 'f') ? 'a' : 'o'}} da {{$student['azienda']}} come {{$student['ruolo']}}
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

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
@endsection