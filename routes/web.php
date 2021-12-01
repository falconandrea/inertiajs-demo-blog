<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', [
        'posts' => [
            [
                'id' => 1,
                'title' => "Title test 1",
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est dignissimos qui perspiciatis dolorum iure, rem odit enim autem corporis, repellat neque optio. Quod, mollitia odio porro rem id dignissimos eius.",
                'date' => "29 nov 2021"
            ],
            [
                'id' => 2,
                'title' => "Title test 2",
                'description' => "Est dignissimos qui perspiciatis dolorum iure, rem odit enim autem corporis, repellat neque optio. Quod, mollitia odio porro rem id dignissimos eius.",
                'date' => "28 nov 2021"
            ],
            [
                'id' => 3,
                'title' => "Title test 3",
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est dignissimos qui perspiciatis dolorum iure, rem odit enim autem corporis, repellat neque optio. Quod, mollitia odio porro rem id dignissimos eius.",
                'date' => "27 nov 2021"
            ],
        ]
    ]);
});
