@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/bookstyle.css">
<link rel="stylesheet" href="css/searchpage.css">

<style>
.hidden {
    display: none;
}
</style>

<!-- <nav>
    <ul>
        <li><a href="#" id="book-link">Book</a></li>
        <li><a href="#" id="cd-link">CD</a></li>
        <li><a href="#" id="game-link">Game</a></li>
    </ul>
</nav> -->


<nav class="container p-3 navbar navbar-expand-md navbar-light bg-white">
    <div class="container-fluid p-0"> <a class="navbar-brand text-uppercase fw-800" href="#">
            <form action="" method="GET">
                <div class="d-flex justify-content-center col">
                    <select class="form-select w-100" name="sort" aria-label="Default select example">
                        <option disabled selected value="">Sort By</option>
                        <option value="price-asc">Low - High</option>
                        <option value="price-desc">High - Low</option>
                        <option value="title-asc">Title A-Z</option>
                        <option value="title-desc">Title Z-A</option>
                    </select>
                    <input type="hidden" name="search" value="{{ request()->search }}">
                    <button class="ms-2 btn btn-primary w-100" type="submit">Sort</button>
                </div>
            </form>
        </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav"
            aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="fas fa-bars"></span> </button>
        <div class="collapse navbar-collapse" id="myNav">
            <div class="navbar-nav ms-auto">
                <a class="nav-link search" aria-current="page" href="#" id="all-link">All</a>
                <a class="nav-link search" href="#" id="cd-link">Cd</a>
                <a class="nav-link search" href="#" id="book-link">Book</a>
                <a class="nav-link search" href="#" id="game-link">Games</a> 
            </div>
        </div>
    </div>
</nav>


<div class="container bg-white hidden" id="book-div">
    <h5 class="d-flex justify-content-between p-2">
        <!-- <div>
            <span class="border-red ">
                Book
            </span>
            Result
        </div> -->

        <!-- <form action="" method="GET">
            <div calss="d-flex">
                <select class="form-select w-100" name="sort" aria-label="Default select example">
                    <option disabled selected value="">----Sort By----</option>
                    <option value="price-asc">Low - High</option>
                    <option value="price-desc">High - Low</option>
                    <option value="title-asc">Title A-Z</option>
                    <option value="title-desc">Title Z-A</option>
                </select>
                <input type="hidden" name="search" value="{{ request()->search }}">
                <button class="btn btn-primary w-100 mt-2" type="submit">Sort</button>
            </div>
        </form> -->
    </h5>
    <hr>
    <div class="row">
        @foreach($books as $book)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="{{ route('books.show',$book->id) }}"><img src="/images/{{ $book->image }}"
                        alt=""></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-red">
            </div>
            <div class="title pt-4 pb-1">{{ $book->title }}</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$ {{ $book->price }}</div>
        </div>
        @endforeach
    </div>
</div>

<div class="container bg-white hidden" id="cd-div">
    <h5 class="d-flex justify-content-between p-2">
        <!-- <div>
            <span class="border-red ">
                Cd
            </span>
            Result
        </div> -->

        <!-- <form action="" method="GET">
            <div calss="d-flex">
                <select class="form-select" name="sort" aria-label="Default select example">
                    <option disabled selected value="">----Sort By----</option>
                    <option value="price-asc">High - Low</option>
                    <option value="price-desc">Low - High</option>
                    <option value="title-asc">Title A-Z</option>
                    <option value="title-desc">Title Z-A</option>
                </select>
                <input type="hidden" name="search" value="{{ request()->search }}">
                <button class="btn btn-primary w-100 mt-2" type="submit">Sort</button>
            </div>
        </form> -->
    </h5>
    <hr>
    <div class="row">
        @foreach($cds as $cd)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="{{ route('cds.show',$cd->id) }}"><img src="/images/{{ $cd->image }}"
                        alt=""></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-red">
            </div>
            <div class="title pt-4 pb-1">{{ $cd->title }}</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$ {{ $cd->price }}</div>
        </div>
        @endforeach
    </div>
</div>

<div class="container bg-white hidden" id="game-div">
    <h5 class="d-flex justify-content-between p-2">
        <!-- <div>
            <span class="border-red ">
                Game
            </span>
            Result
        </div> -->

        <!-- <form action="" method="GET">
            <div calss="d-flex">
                <select class="form-select" name="sort" aria-label="Default select example">
                    <option disabled selected value="">----Sort By----</option>
                    <option value="price-asc">High - Low</option>
                    <option value="price-desc">Low - High</option>
                    <option value="title-asc">Title A-Z</option>
                    <option value="title-desc">Title Z-A</option>
                </select>
                <input type="hidden" name="search" value="{{ request()->search }}">
                <button class="btn btn-primary w-100 mt-2" type="submit">Sort</button>
            </div>
        </form> -->
    </h5>
    <hr>
    <div class="row">
        @foreach($games as $game)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="{{ route('games.show',$game->id) }}"><img src="/images/{{ $game->image }}"
                        alt=""></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-red">
            </div>
            <div class="title pt-4 pb-1">{{ $game->title }}</div>
            <div class="d-flex align-content-center justify-content-center">
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
                <span class="fas fa-star"></span>
            </div>
            <div class="price">$ {{ $game->price }}</div>
        </div>
        @endforeach
    </div>
</div>

<script>
const bookLink = document.getElementById("book-link");
const allLink = document.getElementById("all-link");
const cdLink = document.getElementById("cd-link");
const gameLink = document.getElementById("game-link");
const bookDiv = document.getElementById("book-div");
const cdDiv = document.getElementById("cd-div");
const gameDiv = document.getElementById("game-div");

// Add click event listeners to the links
bookLink.addEventListener("click", () => {
  bookDiv.style.display = "block";
  cdDiv.style.display = "none";
  gameDiv.style.display = "none";
  bookLink.classList.add("active");
  allLink.classList.remove("active");
  gameLink.classList.remove("active");
  cdLink.classList.remove("active");
});

cdLink.addEventListener("click", () => {
  bookDiv.style.display = "none";
  cdDiv.style.display = "block";
  gameDiv.style.display = "none";
  cdLink.classList.add("active");
  allLink.classList.remove("active");
  bookLink.classList.remove("active");
  gameLink.classList.remove("active");
});

gameLink.addEventListener("click", () => {
  bookDiv.style.display = "none";
  cdDiv.style.display = "none";
  gameDiv.style.display = "block";
  gameLink.classList.add("active");
  allLink.classList.remove("active");
  bookLink.classList.remove("active");
  cdLink.classList.remove("active");
});

allLink.addEventListener("click", () => {
  bookDiv.style.display = "block";
  cdDiv.style.display = "block";
  gameDiv.style.display = "block";
  bookLink.classList.remove("active");
  allLink.classList.add("active");
  gameLink.classList.remove("active");
  cdLink.classList.remove("active");
});

// Show all divs at first
bookDiv.style.display = "block";
cdDiv.style.display = "block";
gameDiv.style.display = "block";
allLink.classList.add("active");

</script>

@endsection