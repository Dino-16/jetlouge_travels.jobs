<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JETLOUGE TRAVELS</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">

    <header class="bg-white p-3 sticky-top">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand"><i class="bi bi-airplane me-2"></i>Jetlouge Travels</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex collapse navbar-collapse"  id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/jobs">Jobs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

            
    <main class="flex-grow-1 d-flex align-items-center justify-content-center vh-100 fade-section" 
          style="background-color: #D3EFFC;">
            @yield('content')
    </main>

    <section class="bg-body-tertiary p-3 fade-section">
            @yield('section-1')
    </section>

    <section class="bg-white p-3 fade-section">
            @yield('section-2')
    </section>

    <footer>
        <div class="container-fluid mt-2 bg-dark p-3">
            <p class="mb-0 text-center text-white">&copy; Jetlouge Travels</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>

    <script>
document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray(".fade-section").forEach((section) => {
        gsap.from(section, {
            opacity: 0,
            y: 50,
            duration: 1,
            scrollTrigger: {
                trigger: section,
                start: "top 80%", // start animation when section is 80% from top of viewport
                toggleActions: "play none none reverse"
            }
        });
    });
});
</script>
</body>
</html>