@extends('layouts.app')

@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Linking mdbootstrap and Form's Custom CSS ---------->

<section class="get-in-touch">
    <h1 class="create-form-heading">Add Product</h1>
    <form class="contact-form row">
        <div class="form-field col-lg-6">
            <input id="name" class="input-text js-input" type="text" required>
            <label class="label" for="name">Title</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="email" class="input-text js-input" type="email" required>
            <label class="label" for="email">Firstname (optional)</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="company" class="input-text js-input" type="text" required>
            <label class="label" for="company">Surname / Band</label>
        </div>
        <div class="form-field col-lg-6 ">
            <input id="phone" class="input-text js-input" type="text" required>
            <label class="label" for="phone">Price</label>
        </div>
        <div class="form-field col-lg-12">
            <input id="message" class="input-text js-input" type="text" required>
            <label class="label" for="message">Pages / Playlength</label>
        </div>
        <div class="form-field col-lg-12">
            <input class="submit-btn" type="submit" value="Submit">
        </div>
    </form>
</section>

@endsection