@extends('layouts.default')

@section('content')
   <div class="container">
        <div class="row d-flex align-items-center justify-content-between px-5 gx-5">
            <div class="col-md-7">
                <div class="mb-5">
                    <h1 style="color: #276894;">WELCOME TO JETLOUGE TRAVELS</h1>
                    <h3>Where careers grow and teams thrive.</h3>
                </div>
                <div>
                    <p>
                        Finding the right job or the perfect hire shouldn't be stressful or complicated. 
                        That's why we've created a space where talented people and great companies can 
                        connect with ease.
                    </p>
                </div>
            </div>
            <div class="col-md-5">
                <div>
                    <img src="{{ asset('images/hero1.jpg') }}" class="rounded-circle img-fluid" alt="hero1">
                </div>
            </div>
        </div>
   </div>
@endsection


@section('section-1')
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <img src="{{ asset('images/hero2.png') }}" style="transform: scaleX(-1);"
                 class="img-fluid" width="250" height="250" alt="hero2">
            </div>
            <div class="col-md-7">
                <p>
                    If you're chasing your dream role, we'll help you get there. 
                    If you're building your dream team, we'll help you find the right match. With smart search tools, 
                    trusted listings, and personalized suggestions, 
                    we make it simpler than ever to bring the right people together.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('section-2')
    <div class="container p-5">
        <div class="mb-5">
            <h1 class="fw-medium">At Jetlouge Travels, we stand for:</h1>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div>
            <div class="d-flex align-items-center mb-5">
                <div class="h1 ">
                    <i class="bi bi-person me-2"></i>
                </div>
                <div>
                    <h3 class="fw-normal">Empowering Job seekers</h3>
                    <p>Opportunities that truly fit your skills and ambitions.</p>
                </div>
            </div>
            <div class="d-flex align-items-center mb-5">
                <div class="h1">
                    <i class="bi bi-person me-2"></i>
                </div>
                <div>
                    <h3 class="fw-normal">Helping employers succeed</h3>
                    <p>Quick, efficient access to qualified talent.</p>
                </div>
            </div>
            <div class="d-flex align-items-center mb-5">
                <div class="h1">
                    <i class="bi bi-person me-2"></i>
                </div>
                <div>
                    <h3 class="fw-normal">Fostering growth</h3>
                    <p>Building a strong network where careers and businesses flourish.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection