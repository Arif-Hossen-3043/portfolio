<?php

use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::get('/blog/{id}', function ($id) {

    $blogs = [

        1 => [
            'title' => 'The Rise of Football in Bangladesh',
            'content' => 'Football is becoming popular again in Bangladesh. Young players are joining academies and international tournaments are creating new opportunities for future football stars.'
        ],

        2 => [
            'title' => 'The Beauty of Sundarbans and Cox\'s Bazar',
            'content' => 'Bangladesh is rich with natural beauty. The Sundarbans and Cox\'s Bazar attract thousands of tourists every year with forests, wildlife, and long sea beaches.'
        ],

        3 => [
            'title' => 'Artificial Intelligence in Modern Development',
            'content' => 'Artificial Intelligence is changing the world. Developers are using AI tools to automate tasks, analyze data, and build smarter applications faster than ever before.'
        ],

        4 => [
            'title' => 'Job Crisis in Web Development',
            'content' => 'Many new developers face job challenges due to competition. Building real-world projects and strong portfolios helps developers stand out in the job market.'
        ],

        5 => [
            'title' => 'Exploring Cox\'s Bazar Tourism',
            'content' => 'Cox\'s Bazar is one of the longest sea beaches in the world. It plays an important role in tourism and economic development in Bangladesh.'
        ],

    ];

    $blog = $blogs[$id];

    return view('blog.show', compact('blog'));

});    