<?php

app()->get('/', function () {
    echo view('index');
});

app()->get('/about', function () {
    echo view('about', ['name' => 'John Doe']);
});

app()->get('/login', function () {
    echo view('login');
});
