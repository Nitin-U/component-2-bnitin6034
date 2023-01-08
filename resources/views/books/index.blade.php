@extends('layouts.app')

@section('content')
@php
$count=0
@endphp
<link rel="stylesheet" href="css/bookstyle.css">
<div class="container bg-white">
    <h5 class="d-flex justify-content-between p-2">
        <div>
            <span class="border-red ">
                Book
            </span>
            Products
        </div>
        <div>
            <a class="btn btn-primary" href="{{ route('books.create') }}">Add Book</a>
        </div>
    </h5>
    <div class="row">
        @foreach($books as $book)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="{{ route('books.show',$book->id) }}"><img src="/images/{{ $book->image }}" alt=""></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            @if($count<4) <div class="tag bg-red">
                sale
        </div>
        @endif
        @php
        $count++
        @endphp
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
<div class="d-flex justify-content-center">
    {{ $books->links()  }}
</div>
@endsection