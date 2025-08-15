@extends('layouts.default')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6 offset-md-6">
                <div class="text-start">
                    <h1 class="fw-semibold display-5 mb-3">
                        Find jobs where your heart desires.
                    </h1>
                    <h2 class="fw-normal h4">
                        Discover job openings that align with your expertise and ambitions. Take the next step with confidence.
                    </h2>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('section-1')
    <div class="container pt-5">
        <div class="row mb-4 align-items-center">
            <div class="col-md-5">
                <h2 class="fw-bold">All Available Jobs</h2>
            </div>
            <div class="col-md-7">
                <input type="search" class="form-control" placeholder="Search jobs...">
            </div>
        </div>

        <div class="row g-4">
            @for($i = 1; $i <= 9; $i++)
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-secondary d-flex flex-column">
                            <h5 class="card-title text-dark">Travel Agent</h5>
                            <div class="d-flex gap-3">
                                <p class="p-1 bg-body-tertiary rounded"> Pampanga</p>
                                <p class="p-1 bg-body-tertiary rounded"> Remote</p>
                                <p class="p-1 bg-body-tertiary rounded"> Full-time</p>
                            </div>
                            <p class="card-text flex-grow-1">
                                Arranges and sells travel services, accommodations, tours, and/or transportation.
                                Advises clients on destinations, accommodations, and tours. Secures reservations for clients.
                            </p>
                            <a href="/job-details" class="mt-auto text-primary text-decoration-underline">View Details</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>

        <div class="pt-4">
            <nav aria-label="Job pagination">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">67</a></li>
                    <li class="page-item"><a class="page-link" href="#">68</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection