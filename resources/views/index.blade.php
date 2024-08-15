<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap Style --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <title>Ilman | Home</title>
</head>

<body>
    {{-- Container --}}
    <div class="container-fluid p-0 m-0 main-container">
        <nav class="navbar fixed-top m-0 justify-content-between px-3 py-0">
            <div class="main-logo">
                <a href="#" class="navbar-brand text-white">ILMAN</a>
            </div>
            <div class="toggle-menu" id="toggle-menu">
                <span class="line-hamburger"></span>
                <span class="line-hamburger"></span>
            </div>
            <div class="nav-menu bg-dark d-flex flex-column justify-content-center align-items-center" id="nav-menu">
                <ul class="list-unstyled text-center">
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#">About</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#">Service</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#">Project</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- Navbar --}}


        {{-- Content --}}
        <div class="container-fluid bg-dark container-content px-0 py-0">

            {{-- hero --}}
            <div class="section hero-section d-flex justify-content-center align-items-center">
                <span class="text-uppercase text-white text-center fw-bold">Ilman Nafian <br>Mobile and web Developer
                    since 2024 in sragen, Indonesia</span>
            </div>

            <div class="section content-section d-flex px-3 py-4">
                <div class="about-images pe-4">
                    <img src="{{asset('img/its-me.jpg')}}" alt="my-foto" class="object-fit-cover w-100 h-100 d-block rounded">
                </div>
                <div class="content-section-about">
                    <span class="header-content-section">About Me carrer</span>
                    <p class="main-section-content text-white">My name is Ilman Nafian. I'am Mobile Developer and Web Developer from Sragen, Indonesia</p>
                    <p class="subtitle-section-about text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel deserunt officiis, ratione eaque alias recusandae maiores nam porro delectus nisi quasi nulla esse iste sint obcaecati earum praesentium eius quam?</p>
                    <p class="subtitle-section-about text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam id facere aperiam ipsa, quod eius molestias explicabo, repellendus architecto nostrum suscipit. Accusantium, fugit a saepe itaque quas eligendi quidem quam.</p>
                    <img src="{{asset('img/my-sign.png')}}" alt="sign" class="d-block w-25 h-auto mb-4 mt-0 mw-100 mh-auto">
                    <button class="btn btn-light d-block">Download CV</button>
                </div>
            </div>

            <div class="section service-section px-3 py-4">
                <span class="header-content-section">awesome service</span>
                <p class="main-section-content text-white">I recommed you high quality service</p>
                <div class="group-box-service">
                    <div class="container-fluid d-flex flex-row row-gap-4 flex-wrap justify-content-between px-0 py-0">
                        <div class="service-item rounded p-4">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio, beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio, beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio, beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio, beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio, beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio, beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap js --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- custom js --}}
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
