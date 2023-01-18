@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/bookform.css">
<link rel="stylesheet" href="/css/bookstyle.css">

<div class="container bg-white" id="customcontainer">
    <h5 class="p-2 text-center">
        <span class="border-red ">
            Edit
        </span>
        Books
    </h5>

    <div class="registration-form">
        <form action="{{ route('books.update',$book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-icon">
                <span><img class="rounded" src="/images/{{ $book->image }}" alt="" style="width: 90px;"></span>
            </div>
            
            <div class="form-group mb-4">
                <input type="text" class="form-control customformcontrol item @error('title') is-invalid @enderror" name="title" value="{{ $book->title }}" id="username" placeholder="Title">
                @error('title')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control customformcontrol item @error('name') is-invalid @enderror" name="name" value="{{ $book->name }}" id="password" placeholder="Name (optional)">
                @error('name')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control customformcontrol item @error('author') is-invalid @enderror" name="author" value="{{ $book->author }}" id="email" placeholder="Author">
                @error('author')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control customformcontrol item @error('price') is-invalid @enderror" name="price" value="{{ $book->price }}" id="phone-number" placeholder="Price">
                @error('price')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <textarea class="form-control customformcontrol item custom-textarea @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Description">{{ $book->description }}</textarea>
                    @error('description')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control customformcontrol item @error('pages') is-invalid @enderror" name="pages" value="{{ $book->pages }}" id="birth-date" placeholder="Pages">
                @error('pages')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="file" class="form-control customformcontrol item @error('image') is-invalid @enderror" name="image" id="birth-date" placeholder="Image">
                @error('image')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
                <!-- <input class="form-control item custom-file-input" type="file" id="formFile"> -->
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Update</button>
            </div>
        </form>
        <div class="social-media">
        </div>
    </div>

</div>



@endsection