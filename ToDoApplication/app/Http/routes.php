<?php

Route::resource('Projects','ProjectsController');
Route::resource('task','TaskController');

//slug config
Route::bind('task',function($value,$route){
    return App\Task::whereSlug($value)->first();
});

Route::bind ('projects',function($value,$route){
    return App\Projects::whereSlug($value)->first();
    
});