@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <div class="container-welcome">
        <div class="col mb-5">
        <div class="row w-100 welcome-body m-0">
            <div class="col text-center">
                <h1 class="text-white">Marketplace for Books, Cds and Games</h1>
                
                <p class="px-5 text-justify fw-lighter welcome-paragraph text-white mt-5">Welcome to our website! We are a one-stop shop for all your entertainment needs. We offer a wide selection of books, CDs, and games at affordable prices. Our inventory is constantly updating, so there is always something new to discover. Whether you are looking for the latest bestseller or a classic album, you can find it here. We also have a variety of games for all ages, from board games to video games. Thank you for visiting our site, and we hope you find something you love!</p>

                <div class="welcome-icon">
                    <i class="fa-solid fa-store fa-2xl mt-5 p-3 welcome-icon-body"></i>
                    <i class="fa-solid fa-credit-card fa-2xl mt-5 p-3 welcome-icon-body"></i>
                    <i class="fa-solid fa-shop fa-2xl mt-5 p-3 welcome-icon-body"></i>
                </div>

            </div>
        </div>
        <footer class="mt-1">
            <p>Copyright &copy; 2022 | Nitin Utsav Bartaula | All Rights Reserved.</p>
        </footer>
        </div>

        
    </div>                                    
@endsection