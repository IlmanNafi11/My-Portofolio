<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Style --}}
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Ilman | Home</title>
</head>
<body>
    {{-- Container --}}
    <div class="container-fluid p-0 m-0 main-container">
        <nav class="navbar fixed-top p-0 m-0">
            <div class="container-fluid justify-content-between px-0 py-0">
                <div class="main-logo">
                    <a href="#" class="navbar-brand text-white align-items-center">ILMAN</a>
                </div>
                <div class="toggle-menu">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
        {{-- Navbar --}}


        {{-- Content --}}
        <div class="container-content">

            {{-- hero --}}
            <div class="content hero-images container-fluid m-0 p-0">
                <div class="hero-title d-flex flex-column align-items-center justify-content-center text-white">
                    <p class="hero main-title">Ilman Nafin</p>
                    <p class="hero subtitle">Web developer since 2024 in sragen, Indonesia</p>
                </div>
            </div>

            {{-- about section --}}
            <div class="section section-about d-flex mt-5">
                <div class="about about-images">
                    <img src="{{asset('img/card-1.jpg')}}" alt="my-foto">
                </div>
                <div class="about about-content">
                    <h4 class="title-about title-about-content">about my carrer</h4>
                    <h3 class="main-about main-about-content">My name is Ilman Nafian. I'm Mobile developer and web developer from sragen, indonesia.</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur recusandae mollitia officiis sint obcaecati similique atque in eum. Libero nisi dolore, dignissimos dolores error blanditiis necessitatibus minima omnis laboriosam molestias.</p>
                </div>
            </div>
        </div>


    </div>
    <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
