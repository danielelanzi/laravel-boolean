<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="https://www.boolean.careers/images/favicon/favicon.ico" type="image/x-icon">
    <title>Dopo il corso, carriere lavorative</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
{{-- @dd(Request::route()->getName()); --}}
<body>
    <div class="container">
        {{-- header --}}
        <header>
            <nav class="navbar">
                <div class="logo">
                    <img src="https://www.boolean.careers/images/common/logo.png" alt="Boolean Carreers">
                </div>
                <ul>
                    <li>
                        {{-- condizione = bool,  vero = ?,  falso = : --}}
                    <a class=" {{ (Request::route()->getName() == 'static_page.home') ? 'active' : ''}} " href="{{route('static_page.home')}}">Home</a>
                    </li>
                    <li>
                        <a href="">Corso</a>
                    </li>
                    <li>
                        {{-- condizione = bool,  vero = ?,  falso = : --}}
                    <a class="{{ (Request::route()->getName() == 'student.index') ? 'active' : ''}} " href="{{route('student.index')}}">Dopo Corso</a>
                    </li>
                    <li>
                        <a href="">Lezione Gratuita</a>
                    </li>
                    <li>
                        <a class="btn" href="">Canditati ora</a>
                    </li>
                </ul>
            </nav>
            @yield('header')
        </header>
        {{-- /header --}}