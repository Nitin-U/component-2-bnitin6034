@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

<div class="container-welcome">
    <div class="col mb-5">
        <div class="row w-100 welcome-body m-0">
            <div class="col text-center">
                <h1 class="text-white welcome-heading">Marketplace for Books, Cds and Games</h1>

                <p class="px-5 text-justify fw-lighter welcome-paragraph text-white mt-5">Welcome to our website! We are
                    a one-stop shop for all your entertainment needs. We offer a wide selection of books, CDs, and games
                    at affordable prices. Our inventory is constantly updating, so there is always something new to
                    discover. Whether you are looking for the latest bestseller or a classic album, you can find it
                    here. We also have a variety of games for all ages, from board games to video games. Thank you for
                    visiting our site, and we hope you find something you love!</p>

                <section class="home-newsletter mt-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="single">
                                    <h2>Subscribe to our Newsletter</h2>
                                    <form action="/newsletter" method="GET">
                                        @csrf
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Enter your email">
                                            <span class="input-group-btn">
                                                <button class="btn btn-theme" type="submit">Subscribe</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="welcome-icon">
                    <i class="fa-solid fa-store fa-2xl mt-5 p-3 welcome-icon-body"></i>
                    <i class="fa-solid fa-credit-card fa-2xl mt-5 p-3 welcome-icon-body"></i>
                    <i class="fa-solid fa-shop fa-2xl mt-5 p-3 welcome-icon-body"></i>
                </div>

            </div>
        </div>
        <!-- <footer class="mt-1">
            <p>Copyright &copy; 2022 | Nitin Utsav Bartaula | All Rights Reserved.</p>
        </footer> -->
    </div>
</div>

<div class="how-section1">
    <div class="row">
        <div class="col-md-6 how-img">
            <img src="{{ url('images/welcome1.jpg') }}" class="rounded-circle img-fluid" alt="" />
        </div>
        <div class="col-md-6">
            <h4>Cds</h4>
            <h4 class="subheading">Music from your favourite Artists</h4>
            <p class="text-muted">Selling albums of people's favorite artist is the process of offering physical or
                digital copies of music recorded and released by a particular artist or group for purchase by their
                fans. This can be done through various channels, such as online music stores, retail outlets, or through
                the artist's own website. Albums may be offered in various formats, such as CD, vinyl, or as digital
                downloads, and may include bonus content such as liner notes, lyrics, or bonus tracks. Some artists also
                offer exclusive packages or merchandise bundles with their albums. By selling albums, artists can
                generate income from their music and reach a wider audience.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h4>Games</h4>
            <h4 class="subheading">Look out for your preferred games</h4>
            <p class="text-muted">Selling games is the process of offering copies of computer and video games for
                purchase by consumers. This can be done through various channels, such as online game stores, retail
                outlets, or through the game developer's own website. Games may be offered in various formats, such as
                physical copies on DVD or Blu-ray, digital downloads, or as subscription-based services. In addition to
                the game itself, developers may also offer additional content such as expansion packs, in-game currency,
                or other in-game items for sale. By selling games, game developers can generate income from their
                creations and reach a wider audience.</p>
        </div>
        <div class="col-md-6 how-img">
            <img src="{{ url('images/welcome2.jpg') }}" class="rounded-circle img-fluid" alt="" />
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 how-img">
            <img src="{{ url('images/welcome3.jpg') }}" class="rounded-circle img-fluid" alt="" />
        </div>
        <div class="col-md-6">
            <h4>Books</h4>
            <h4 class="subheading">Get to know the world and ideas through other's experience</h4>
            <p class="text-muted">Selling books is the process of offering physical or digital copies of written works
                for purchase by readers. This can be done through various channels, such as online bookstores, retail
                outlets, or through the author's own website. Books may be offered in various formats, such as
                hardcover, paperback, or as e-books that can be read on electronic devices. In addition to the book
                itself, authors may also offer additional content such as author interviews, book club questions, or
                other resources for purchase. By selling books, authors can generate income from their writing and reach
                a wider audience.</p>
        </div>
    </div>
</div>



@endsection