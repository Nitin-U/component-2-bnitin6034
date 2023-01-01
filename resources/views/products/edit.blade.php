@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
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
                <option value="cd" @if($product->category=='cd') selected @endif>CD</option>
                <option value="book" @if($product->category=='book') selected @endif>Book</option>
                <option value="game" @if($product->category=='game') selected @endif>Game</option>
            </select>
        </div>
        <div class="form-field col-lg-6">
            <input id="name" name="title" class="input-text js-input" type="text" value="{{ $product->title }}" required>
            <label class="label" for="title">Title</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="email" name="firstname" class="input-text js-input" type="text" value="{{ $product->firstname }}" required>
            <label class="label" for="firstname">Firstname (optional)</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="company" name="surname" class="input-text js-input" type="text" value="{{ $product->surname }}" required>
            <label class="label" for="surname">Surname / Band</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="phone" name="price" class="input-text js-input" type="text" value="{{ $product->price }}" required>
            <label class="label" for="price">Price</label>
        </div>
        <div class="form-field col-lg-12">
            <input id="message" name="pages" class="input-text js-input" type="text" value="{{ $product->pages }}" required>
            <label class="label" for="pages">Pages / Playlength</label>
        </div>
        <div class="form-field col-lg-12 d-flex justify-content-between align-items-center">
            <input class="submit-btn" type="submit" value="Submit">
        </div>
    </form>
</section>

@endsection