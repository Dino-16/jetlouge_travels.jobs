@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <div class="d-flex flex-column justify-content-end align-items-end p-5">
                    <div class="fade-section">
                        <h3 class="h4">ABOUT US</h3>
                        <h1 class="fw-normal h2 mb-3">
                            At Jetlouge Travels, we believe a career is more than a job,
                            it's a journey. And every journey deserves the right direction
                        </h1>
                        <h1 class="fw-normal h2">
                            We started with a simple mission: to make the hiring process more human, more efficient, and more rewarding for everyone.
                            Too often, talented people struggle to find the right opportunity, while great companies miss out on exceptional candidates.
                            We set out to change that.
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section-1')
<div class="container p-5">
    <h3 class="mb-5">Meet our team</h3>
    <div id="gsapCarousel" class="carousel-wrapper overflow-hidden">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="{{ asset('images/profile.jpg') }}" height="250" width="250" class="img-fluid rounded-circle" alt="...">
                            <p>Renzemark Olea</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <blockquote>
                            &quot;The best memories come from trips you take and the people you share them with.&quot;
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="{{ asset('images/profile.jpg') }}" height="250" width="250" class="img-fluid rounded-circle" alt="...">
                            <p>Aurea Crystal Lebite</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <blockquote>
                            &quot;All journeys have secret destinations of which the traveler is unaware.&quot;
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="{{ asset('images/profile.jpg') }}" height="250" width="250" class="img-fluid rounded-circle" alt="...">
                            <p>Christian Oliva</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <blockquote>
                            &quot;I believe every traveler deserves more than a trip, they deserve a story worth telling.&quot;
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="{{ asset('images/profile.jpg') }}" height="250" width="250" class="img-fluid rounded-circle" alt="...">
                            <p>Sherwin Mae Lapid</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <blockquote>
                            &quot;Our emotions don't define us, but how we respond to them shapes who we become.&quot;
                        </blockquote>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5">
                        <div class="text-center">
                            <img src="{{ asset('images/profile.jpg') }}" height="250" width="250" class="img-fluid rounded-circle" alt="...">
                            <p>Ceejay Encarnacion</p>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <blockquote>
                            &quot;Forget study, just sleep.&quot;
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- carousel animation --}}
@include('layouts.includes.carousel')
@endsection


@section('section-2')
    <div class="container">
        <div class="row p-5">
            <div class="col-md-7">
                <div class="card border-secondary mb-3" style="max-width: 32rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Our Approach</h5>
                        <p class="card-text">
                            We combine intelligent technology with a personal touch,
                            making sure every experience—whether you're applying or hiring—is simple, transparent, and meaningful.
                        </p>
                    </div>
                </div>
                <div class="card border-secondary mb-3" style="max-width: 32rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Our Promise</h5>
                        <p class="card-text">
                            Whether you're taking your first step into the job market, chasing a fresh challenge, or building a dream team,
                            Jetlouge Travels is here to help you reach your goals.
                        </p>
                    </div>
                </div>
                <div class="card border-success mb-3" style="max-width: 32rem;">
                    <div class="card-body text-secondary">
                        <h5 class="card-title">Our Passion</h5>
                        <p class="card-text">
                            Travel isn't just about getting from one place to another, it's about the moments you'll remember forever.
                            At Jetlouge Travels, we'#276894re driven by a love for exploration, culture, and connection.
                            Every trip we plan is crafted with care, ensuring you don't just see a destination, you trully experience it.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="d-flex flex-column">
                    <h1 class="display-5 fw-semibold" style="color: #276894">
                        Our next opportunity is out there—let's find it together.
                    </h1>
                    <img src="{{ asset('images/about1.jpg') }}" height="300" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
