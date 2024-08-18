<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Bootstrap Style --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    {{-- AOS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Custom Style --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    {{-- Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Ilman | Home</title>
</head>

<body>
    {{-- Container --}}
    <div class="container-fluid p-0 m-0 main-container">
        <nav class="navbar fixed-top m-0 justify-content-between py-0">
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
                        <a class="text-decoration-none" href="#home">Home</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#about-section">About</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#service-section">Service</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#project-section">Project</a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="text-decoration-none" href="#contact-section">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        {{-- Navbar --}}


        {{-- Content --}}
        <div class="container-fluid bg-dark container-content px-0 py-0">

            {{-- hero section --}}
            <section class="section hero-section d-flex flex-column justify-content-center align-items-center mb-4" data-aos= "zoom-in-up" data-aos-duration="1000" id="home">
                <span class="text-uppercase text-white text-center fw-bold">Ilman Nafian</span>
                <div class="container-subtitle-typed">
                    <span class="main-sub-hero">I'am</span>
                    <span id="subtitle-hero-typed"></span>
                </div>
            </section>

            {{-- About section --}}
            <section class="section content-section about-section d-flex px-3 py-4 column-gap-4">
                <div class="about-images pe-4" data-aos="zoom-out-right" data-aos-duration="500">
                    <img src="{{ asset('img/its-me.jpg') }}" alt="my-foto"
                        class="object-fit-cover w-100 h-100 d-block">
                </div>
                <div class="content-section-about">
                    <span class="header-content-section" id="about-section">About Me carrer</span>
                    <p class="main-section-content text-white" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">My name is Ilman Nafian. I'am Mobile Developer and Web
                        Developer from Sragen, Indonesia</p>
                    <p class="subtitle-section-about text-white" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Vel deserunt officiis, ratione eaque alias recusandae maiores nam porro delectus nisi
                        quasi nulla esse iste sint obcaecati earum praesentium eius quam?</p>
                    <p class="subtitle-section-about text-white" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Veniam id facere aperiam ipsa, quod eius molestias explicabo, repellendus architecto
                        nostrum suscipit. Accusantium, fugit a saepe itaque quas eligendi quidem quam.</p>
                    <img src="{{ asset('img/my-sign.png') }}" alt="sign"
                        class="d-block w-25 h-auto mb-4 mt-0 mw-100 mh-auto" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <button class="btn btn-light d-block" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">Download CV</button>
                </div>
            </section>

            {{-- Service section --}}
            <section class="section service-section px-3 py-4" id="service-section">
                <span class="header-content-section">awesome service</span>
                <p class="main-section-content text-white">I recommed you high quality service</p>
                <div class="group-box-service">
                    <div class="container-fluid d-flex flex-row row-gap-4 flex-wrap justify-content-between px-0 py-0">
                        <div class="service-item rounded p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio,
                                beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio,
                                beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio,
                                beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio,
                                beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio,
                                beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                        <div class="service-item rounded p-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
                            <span class="header-service text-white">Web Development</span>
                            <p class="subtitle-service text-white">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit. Id unde nostrum odit incidunt delectus? Maiores quibusdam soluta distinctio,
                                beatae cumque eaque, iste ducimus tempora neque commodi dicta earum totam expedita.</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Project Section --}}
            <section class="section project-section px-3 py-4" id="project-section">
                <span class="header-content-section text-uppercase">Creative project</span>
                <p class="main-section-content text-white">Check out my latest project</p>
                <div class="group-box-project d-flex flex-row row-gap-4 flex-wrap justify-content-between text-center">
                    <div class="project-item rounded position-relative overflow-hidden p-0 m-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="200">
                        <img src="{{ asset('img/card-1.jpg') }}" alt="project-images" class="img-fluid">
                        <div class="caption-project position-absolute d-flex flex-column justify-content-center align-items-center top-0 left-0">
                            <span class="header-project text-white">Finansial Managemen Application UD SUMBER AGUNG</span>
                            <p class="subtitle-project text-white">Desktop based application</p>
                        </div>
                    </div>
                    <div class="project-item rounded position-relative overflow-hidden p-0 m-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="300">
                        <img src="{{ asset('img/card-1.jpg') }}" alt="project-images" class="img-fluid">
                        <div class="caption-project position-absolute d-flex flex-column justify-content-center align-items-center top-0 left-0">
                            <span class="header-project text-white">Finansial Managemen Application UD SUMBER AGUNG</span>
                            <p class="subtitle-project text-white">Desktop based application</p>
                        </div>
                    </div>
                    <div class="project-item rounded position-relative overflow-hidden p-0 m-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="400">
                        <img src="{{ asset('img/card-1.jpg') }}" alt="project-images" class="img-fluid">
                        <div class="caption-project position-absolute d-flex flex-column justify-content-center align-items-center top-0 left-0">
                            <span class="header-project text-white">Finansial Managemen Application UD SUMBER AGUNG</span>
                            <p class="subtitle-project text-white">Desktop based application</p>
                        </div>
                    </div>
                    <div class="project-item rounded position-relative overflow-hidden p-0 m-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="500">
                        <img src="{{ asset('img/card-1.jpg') }}" alt="project-images" class="img-fluid">
                        <div class="caption-project position-absolute d-flex flex-column justify-content-center align-items-center top-0 left-0">
                            <span class="header-project text-white">Finansial Managemen Application UD SUMBER AGUNG</span>
                            <p class="subtitle-project text-white">Desktop based application</p>
                        </div>
                    </div>
                    <div class="project-item rounded position-relative overflow-hidden p-0 m-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="600">
                        <img src="{{ asset('img/card-1.jpg') }}" alt="project-images" class="img-fluid">
                        <div class="caption-project position-absolute d-flex flex-column justify-content-center align-items-center top-0 left-0">
                            <span class="header-project text-white">Finansial Managemen Application UD SUMBER AGUNG</span>
                            <p class="subtitle-project text-white">Desktop based application</p>
                        </div>
                    </div>
                    <div class="project-item rounded position-relative overflow-hidden p-0 m-0" data-aos="flip-right" data-aos-duration="500" data-aos-delay="700">
                        <img src="{{ asset('img/card-1.jpg') }}" alt="project-images" class="img-fluid">
                        <div class="caption-project position-absolute d-flex flex-column justify-content-center align-items-center top-0 left-0">
                            <span class="header-project text-white">Finansial Managemen Application UD SUMBER AGUNG</span>
                            <p class="subtitle-project text-white">Desktop based application</p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Contact Section --}}
            <section class="section contact-section px-3 py-4" id="contact-section">
                <span class="header-content-section text-uppercase">Contact Me</span>
                <p class="main-section-content text-white">Get in touch with me</p>
                <div class="container-contact-content d-flex justify-content-between">
                    <div class="subtitle-contact d-flex flex-column row-gap-2 w-50" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <span class="sub-street"><a href="#" class="text-decoration-none text-white">Masaran, Sragen, Central Java</a></span>
                        <span class="sub-street"><a href="https://api.whatsapp.com/send/?phone=6287831620075&text&type=phone_number&app_absent=0" class="text-decoration-none text-white" target="#">+62-8232-0865-098</a></span>
                        <span class="sub-street"><a href="#" class="text-decoration-none text-white">ilmannafi04@gmail.com</a></span>
                        <span class="sub-street"><a href="#" class="text-decoration-none text-white">@ilmannafi4</a></span>
                    </div>
                    <form class="form-contact d-flex flex-column row-gap-3 w-100" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="form-bio d-flex justify-content-between column-gap-4">
                            <input name="name" type="text" class="form-name" placeholder="Your Name" aria-label="form-name" required>
                            <input name="email" type="email" class="form-email" placeholder="Your email" aria-label="form-email" required>
                        </div>
                        <input name="message" id="message-detail" class="form-message-detail" placeholder="Your Message" aria-label="form-message" required></input>
                        <button type="submit" class="btn btn-light" style="height: 38px; width: 76px">Submit</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- footer --}}
        <div class="footer position-fixed bottom-0 left-0 right-0 w-100 align-content-center">
            <div class="footer-box d-flex justify-content-between">
                <div class="sub-copyright text-white">
                    <span>Copyright &copy; 2024. All Rights are Reserved</span>
                </div>
                <div class="sub-social-icon d-flex column-gap-2">
                    <i class="bi bi-instagram" style="color: white; cursor: pointer;"></i>
                    <i class="bi bi-threads" style="color: white; cursor: pointer;"></i>
                    <i class="bi bi-linkedin" style="color: white; cursor: pointer;"></i>

                    <a href="https://github.com/IlmanNafi11" target="#"><i class="bi bi-github" style="color: white; cursor: pointer;"></i></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Bootstrap js --}}
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        startEvent: 'DOMContentLoaded',
        once: true
    });
    </script>

    {{-- typed.js --}}
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    {{-- custom js --}}
    <script src="{{ asset('js/script.js') }}"></script>

    <script>
        var typed = new Typed('#subtitle-hero-typed', {
            strings: ['Mobile and Web Developer.', 'From Sragen, Central Java.'], typeSpeed: 50, loop: Infinity, backSpeed: 40, backDelay: 1000,
        })
    </script>


</body>

</html>
