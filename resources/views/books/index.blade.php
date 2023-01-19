@extends('layouts.app')

@section('content')
@php
$count=0
@endphp
<link rel="stylesheet" href="css/bookstyle.css">
<div class="container bg-white" id="customcontainer">
    <h5 class="d-flex justify-content-between p-2">
        <div>
            <span class="border-red ">
                Book
            </span>
            Products
        </div>
        @can('isbookAdmin')
        <div>
            <a class="btn btn-primary" href="{{ route('books.create') }}">Add Book</a>
        </div>
        @endcan
    </h5>
    <div class="row">
        @foreach($books as $book)
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="{{ route('books.show',$book->id) }}"><img src="/images/{{ $book->image }}"
                        alt=""></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <a href="{{ route('books.show',$book->id) }}">
                        <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    </a>
                    <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="book_{{ $book->id }}" name="id">
                        <input type="hidden" value="{{ $book->title }}" name="name">
                        <input type="hidden" value="{{ $book->price }}" name="price">
                        <input type="hidden" value="{{ $book->image }}" name="image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="btn icon mx-3"><span class="fas fa-shopping-bag"></span></button>
                    </form>
                    <li class="icon"><span class="far fa-heart"></span></li>
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