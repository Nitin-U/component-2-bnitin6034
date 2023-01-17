@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/bookform.css">
<link rel="stylesheet" href="/css/bookstyle.css">

<div class="container bg-white" id="customcontainer">
    <h5 class="p-2 text-center">
        <span class="border-red ">
            Add
        </span>
        Cd
    </h5>

    <div class="registration-form">
        <form action="{{ route('cds.store') }}" method="POST">
            @csrf
            <!-- <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div> -->
            
            <div class="form-group mb-4">
                <input type="text" class="form-control item @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" id="username" placeholder="Title">
                @error('title')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control item @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" id="password" placeholder="Name (optional)">
                @error('name')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control item @error('band') is-invalid @enderror" name="band" value="{{old('band')}}" id="email" placeholder="Band">
                @error('band')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control item @error('price') is-invalid @enderror" name="price" value="{{old('price')}}" id="phone-number" placeholder="Price">
                @error('price')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <textarea class="form-control item custom-textarea @error('description') is-invalid @enderror" name="description" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Description">{{old('description')}}</textarea>
                    @error('description')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control item @error('playlength') is-invalid @enderror" name="playlength" value="{{old('playlength')}}" id="birth-date" placeholder="Playlength">
                @error('playlength')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-4">
                <input type="text" class="form-control item @error('image') is-invalid @enderror" name="image" id="birth-date" placeholder="Image">
                @error('image')
                <span class="text-danger ms-2 validation-msg">{{ $message }}</span>
                @enderror
                <!-- <input class="form-control item custom-file-input" type="file" id="formFile"> -->
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-block create-account">Submit</button>
            </div>
        </form>
        <div class="social-media">
        </div>
    </div>

</div>



@endsection