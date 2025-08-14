@extends('layouts.default')

@section('content')
    <div class="container">
<div class="card p-4 mb-4" style="border-radius: 8px;">
    <div class="row">
        <!-- Left Side: Job Info -->
        <div class="col-md-8">
            <h5 class="fw-bold mb-1">DESIGNER</h5>
            <small class="text-muted d-block mb-3">Job title</small>
            <p>
                Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas. Laculis massa nisl malesuada lacinia integer nunc posuere. Ut hendrerit semper vel class aptent taciti sociosqu. 
            </p>
            <small class="text-muted d-block mb-2">Job Description</small>
            <p class="mb-1 fw-bold">Location</p>
            <p class="mb-4">Quezon City</p>
        </div>

        <!-- Right Side: Job Details -->
        <div class="col-md-4">
            <h6 class="fw-bold">Job Details</h6>
            <ul class="list-unstyled mb-4">
                <li>Salary - $300 - $500</li>
                <li>Job Type - On Site</li>
                <li>Shift and Schedule - 12 hours</li>
            </ul>

            <h6 class="fw-bold">Skill Requirements</h6>
            <ul class="list-unstyled mb-4">
                <li>Have background on designing</li>
                <li>At least 1 year experience</li>
                <li>Have time management</li>
            </ul>

            <a href="#" class="btn btn-primary w-100">Apply Now</a>
        </div>
    </div>
</div>


        <!-- Additional Designer Cards -->
<div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
    @for ($i = 0; $i < 3; $i++)
        <div class="col">
            <div class="card h-100 border-0" style="border-radius: 20px; box-shadow: 0px 4px 8px rgba(0,0,0,0.08);">
                <div class="card-body text-center">
                    <!-- Title -->
                    <h5 class="fw-bold mb-1" style="color: #1b3358;">Designer</h5>
                    <!-- Subtitle -->
                    <p class="text-muted mb-4">Be one of our designers!</p>
                    <!-- Tags -->
                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        <span class="px-3 py-1 rounded-pill" 
                              style="background-color: #e9edf6; font-size: 0.9rem; box-shadow: 0px 2px 4px rgba(0,0,0,0.1);">
                            Pampanga
                        </span>
                        <span class="px-3 py-1 rounded-pill" 
                              style="background-color: #e9edf6; font-size: 0.9rem; box-shadow: 0px 2px 4px rgba(0,0,0,0.1);">
                            $200 - $400 Salary
                        </span>
                        <span class="px-3 py-1 rounded-pill" 
                              style="background-color: #e9edf6; font-size: 0.9rem; box-shadow: 0px 2px 4px rgba(0,0,0,0.1);">
                            Remote Setup
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</div>


        <!-- Pagination Buttons -->
        <nav>
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" href="#">Previous</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection