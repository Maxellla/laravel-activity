<?php

use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return 'Hello, Laravel!';
});

Route::get('tasks', TasksController::class);