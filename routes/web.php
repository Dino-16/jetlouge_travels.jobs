<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.jobs');
});

Route::get('/about-us', function () {
    return view('about-us');
});


Route::get('/job-details', function () {
    return view('jobs.job-details');
});