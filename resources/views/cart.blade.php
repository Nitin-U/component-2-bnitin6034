@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/cart.css">
<link rel="stylesheet" href="css/bookstyle.css">
<script src="https://kit.fontawesome.com/f6dd6c55d1.js" crossorigin="anonymous"></script>
<div class="container ps-4" id="customcontainer">
    <div>
        <h5>
            <span class="border-red ">
                Your
            </span>
            Cart
        </h5>
    </div>
</div>
<div class="container mt-5 p-3 rounded cart">
    <div class="row no-gutters">
        <div class="col">
            <div class="product-details me-2">
                <div class="d-flex flex-row align-items-center"><i class="fa fa-long-arrow-left"></i><span
                        class="ms-2">Continue Shopping</span></div>
                <hr>
                <h6 class="mb-0">Grand Total: $ {{ Cart::getTotal() }}</h6>
                <div class="d-flex justify-content-between"><span>You have <b>{{ Cart::getTotalQuantity()}}</b> items in
                        your cart</span>
                    <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center">
                            <button class="btn btn-primary">Remove All</button>
                        </div>
                    </form>
                </div>
                @foreach ($cartItems as $item)
                <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                    <div class="d-flex flex-row"><img class="rounded" src="images/{{ $item->attributes->image }}"
                            width="40">
                        <div class="ms-2"><span class="fw-bold d-block">{{ $item->name }}</span><span
                                class="spec">Category</span></div>
                    </div>
                    <form action="{{ route('cart.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $item->id}}">
                        <input type="number" name="quantity" value="{{ $item->quantity }}" size="3">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                    <div class="d-flex flex-row align-items-center">
                        <span class="d-block ms-5 fw-bold">
                            $ {{ $item->price }}
                        </span>
                        <form action="{{ route('cart.destroy') }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" value="{{ $item->id }}" name="id">
                            <button class="show-delete btn fa-solid fa-trash"></button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection