@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/global.css') }}">
<script src="https://kit.fontawesome.com/f6dd6c55d1.js" crossorigin="anonymous"></script>


<div class="container">
    <div class="col text-center">
        <h1>All Products<i class="fa-solid fa-basket-shopping ms-3"></i></h1>
        <hr>
    </div>
    {{--@can('editor')--}}
    <div class="col text-end mb-2">
        <a href="{{ route('products.create') }}" class="btn btn-secondary sm-margin-addbtn" id="button-addnew">Add New</a>
    </div>
    {{--@endcan--}}
    <div class="row">
        @foreach ($products as $product)
        <div class="col-lg-4 col-md-4 col-sm-6 sm-margin mb-4">
            <div class="card h-100 position-relative">
                <img src="images/{{ $product -> image }}" id="bookimg" class="card-img-book" alt="Palm Springs Road" />
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $product -> title }}</h5>
                    <p class="card-text">{{ $product -> firstname }}</p>
                    <p class="card-text">{{ $product -> surname }}</p>
                    <p class="card-text"> <b> $ </b> {{ $product -> price }}</p>
                    <p class="card-text">
                        @if($product->category == 'book')
                    <p>Page {{ $product -> pages }}</p>
                    @elseif($product->category == 'Cd')
                    <p>Playlength {{ $product -> pages }} min</p>
                    @else
                    <p>PEGI - {{ $product -> pages }}</p>
                    @endif
                    </p>
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="text-end">
                            <a href="{{ route('products.show',$product->id) }}" class="btn btn-secondary select-btn" id="button-select">Select</a>
                            <!-- <div class="btn btn-light rounded-pill position-absolute top-0 end-0 p-0">
                                <button class="btn fa-solid fa-trash fa-md "></button>
                            </div> -->
                            <div class="position-absolute top-0 start-100 translate-middle">
                                <button class="btn fa-solid fa-circle-xmark fa-md" id="button-cross"></button>
                            </div>
                            
                        </div>
                    </form>
                </div>
                <!--div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div-->
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
{{ $products->links()  }}
</div>
</div>


@endsection