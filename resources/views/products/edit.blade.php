@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Linking mdbootstrap and Form's Custom CSS ---------->

<section class="get-in-touch">
    <h1 class="create-form-heading">Update Product</h1>
    <form class="contact-form row" action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-between align-items-center">
            <select class="w-25 p-2 mb-4" name="category">
                <option value="cd" @if($product->category=='Cd') selected @endif>CD</option>
                <option value="book" @if($product->category=='book') selected @endif>Book</option>
                <option value="game" @if($product->category=='Game') selected @endif>Game</option>
            </select>
            <!------ Error Message Here ---------->
            <div class="form-field col-lg-6 mb-3 p-0">@error('category')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-field col-lg-6 mt-4">
            <input id="name" name="title" class="input-text js-input" type="text" value="{{ $product -> title }}">
            <label class="label" for="title">Title</label>
        </div>
        <div class="form-field col-lg-6 mt-4">
            <input id="email" name="firstname" class="input-text js-input" type="text" value="{{ $product -> firstname }}">
            <label class="label" for="firstname">Firstname (optional)</label>
        </div>

        <!------ Error Message Here ---------->
        <div class="form-field col-lg-6 mb-5">@error('title')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-field col-lg-6">@error('firstname')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-field col-lg-6 ">
            <input id="company" name="surname" class="input-text js-input" type="text" value="{{ $product -> surname }}">
            <label class="label" for="surname">Surname / Band</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="phone" name="price" class="input-text js-input" type="text" value="{{ $product -> price }}">
            <label class="label" for="price">Price</label>
        </div>

        <!------ Error Message Here ---------->
        <div class="col-lg-6 mb-5">@error('surname')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-6">@error('price')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-field col-lg-12">
            <input id="message" name="pages" class="input-text js-input" type="text" value="{{ $product -> pages }}">
            <label class="label" for="pages">Pages / Playlength</label>
        </div>

        <!------ Error Message Here ---------->
        <div class="col-lg-12 mb-5">@error('pages')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <!-- <div class="form-field col-lg-12">
            <input id="message" name="image" class="input-text js-input" type="text" value="{{ $product -> image }}">
            <label class="label" for="images">Image</label>
        </div> -->
        <div class="mb-3">
            <input class="form-control" name="image" type="file" id="formFile">
        </div>

        <!------ Error Message Here ---------->
        <div class="col-lg-12 mb-5">@error('image')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="form-field col-lg-12 d-flex justify-content-between align-items-center">
            <input class="submit-btn" type="submit" value="Submit">
        </div>
    </form>
</section>

@endsection