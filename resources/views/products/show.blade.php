@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<div class="container-fluid mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="/images/{{ $product -> image }}"
                                    width="250" />
                            </div>
                            <!-- <div class="thumbnail text-center"> <img onclick="change_image(this)"
                                    src="https://i.imgur.com/Rx7uKd0.jpg" width="70"> <img onclick="change_image(this)"
                                    src="https://i.imgur.com/Dhebu4F.jpg" width="70"> </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product p-4" style="min-height: 100%">
                            <div class="d-flex justify-content-between align-items-center mb-5">
                                <div class="d-flex align-items-center"> <i class="fa fa-long-arrow-left"></i> <span
                                        class="ml-1">Back
                                    </span>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <i class="fa-solid fa-pen-to-square mx-3"></i>
                                    <i class="fa-solid fa-trash"></i>
                                </div>

                            </div>
                            <div class="mt-4 mb-3"> <span
                                    class="text-uppercase text-muted brand">{{ $product -> category }}</span>
                                <h5 class="text-uppercase">{{ $product -> title }}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">$
                                        {{ $product -> price }}</span>
                                </div>
                            </div>
                            <p class="about">{{ $product -> description }}
                            </p>
                            <h5 class="text-uppercase">
                                @if($product->category == 'book')
                                <p>Total Pages: {{ $product -> pages }}</p>
                                @elseif($product->category == 'Cd')
                                <p>Playlength: {{ $product -> pages }} min</p>
                                @else
                                <p>Rating: PEGI - {{ $product -> pages }}</p>
                                @endif
                            </h5>
                            <div class="cart mt-5 align-items-center"> <button
                                    class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection