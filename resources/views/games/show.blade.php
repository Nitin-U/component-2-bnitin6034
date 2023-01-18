@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script src="https://kit.fontawesome.com/f6dd6c55d1.js" crossorigin="anonymous"></script>
<div class="container-fluid mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="images p-3">
                            <div class="text-center p-4"> <img id="main-image" src="/images/{{ $game -> image }}"
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
                                <div class="d-flex align-items-center">
                                    <a class="show-anchor" href="{{ route('games.index') }}">
                                        <i class="fa fa-long-arrow-left"></i>
                                        <span class="ml-1">Back
                                        </span>
                                    </a>
                                </div>
                                @can('isgameAdmin')
                                <form action="{{ route('games.destroy',$game->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="d-flex justify-content-end align-items-center">
                                        <a href="{{route('games.edit',$game->id)}}"><i
                                                class="show-edit fa-solid fa-pen-to-square mx-3"></i></a>
                                        <button class="show-delete btn fa-solid fa-trash"></button>
                                    </div>
                                </form>
                                @endcan

                            </div>
                            <div class="mt-4 mb-3"> <span
                                    class="text-uppercase text-muted brand">{{ $game -> category }}</span>
                                <h5 class="text-uppercase">{{ $game -> title }}</h5>
                                <div class="price d-flex flex-row align-items-center"> <span class="act-price">$
                                        {{ $game -> price }}</span>
                                </div>
                            </div>
                            <p class="about">{{ $game -> description }}
                            </p>
                            <h5 class="text-uppercase">
                                <p>PEGI: {{ $game -> pegi }}</p>
                            </h5>
                            <div class="cart mt-5 align-items-center">
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="game_{{ $game->id }}" name="id">
                                    <input type="hidden" value="{{ $game->title }}" name="name">
                                    <input type="hidden" value="{{ $game->price }}" name="price">
                                    <input type="hidden" value="{{ $game->image }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button class="btn btn-danger text-uppercase mr-2 px-4">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection