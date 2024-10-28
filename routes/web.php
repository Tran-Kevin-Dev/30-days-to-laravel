<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'greeting' => 'hoi',
        'name' =>  'Stefan/Rico/Servi/50 shades of job',
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'Title' => 'Director',
                'Salary' => '50 000',
            ],
            [
                'id' => 2,
                'Title' => 'Dev',
                'Salary' => '10 000',
            ],
            [
                'id' => 3,
                'Title' => 'Pro wrestler',
                'Salary' => '100 000',
            ],
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'Title' => 'Director',
            'Salary' => '50 000',
        ],
        [
            'id' => 2,
            'Title' => 'Dev',
            'Salary' => '10 000',
        ],
        [
            'id' => 3,
            'Title' => 'Pro wrestler',
            'Salary' => '100 000',
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == '$id');

    return view('job',['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});