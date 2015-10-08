<?php

Route::get('about','PagesController@about'); 
Route::get('contact','PagesController@contact');

//Route::get('budgets', 'BudgetController@index');
//Route::get('budgets/create','BudgetController@create');
//Route::get('budgets/{id}', 'BudgetController@show');
//Route::post('budgets', 'BudgetController@store');
//Route::get('budgets/{id}/edit','BudgetController@edit');

Route::resource('budgets','BudgetController');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);