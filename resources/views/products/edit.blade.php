@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/f6dd6c55d1.js" crossorigin="anonymous"></script>
<!------ Linking mdbootstrap and Form's Custom CSS ---------->

<section class="get-in-touch">
    <h1 class="create-form-heading">Update Product</h1>
    <form class="contact-form row" action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="d-flex justify-content-between align-items-center">
            <select class="w-25 p-2" name="category">
                <option selected value="cd">CD</option>
                <option value="book">Book</option>
                <option value="game">Game</option>
            </select>
            <i class="fa-solid fa-trash fa-2xl"></i>
        </div>
        <div class="form-field col-lg-6">
            <input id="name" name="title" class="input-text js-input" type="text" required>
            <label class="label" for="title">Title</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="email" name="firstname" class="input-text js-input" type="text" required>
            <label class="label" for="firstname">Firstname (optional)</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="company" name="surname" class="input-text js-input" type="text" required>
            <label class="label" for="surname">Surname / Band</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="phone" name="price" class="input-text js-input" type="text" required>
            <label class="label" for="price">Price</label>
        </div>
        <div class="form-field col-lg-12">
            <input id="message" name="pages" class="input-text js-input" type="text" required>
            <label class="label" for="pages">Pages / Playlength</label>
        </div>
        <div class="form-field col-lg-12 d-flex justify-content-between align-items-center">
            <input class="submit-btn" type="submit" value="Submit">
        </div>
    </form>
</section>

@endsection