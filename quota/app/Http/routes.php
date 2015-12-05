<?php
//php artisan route:list or cache
//to see list of routes
Route::get('about','PagesController@about');
Route::get('contact','PagesController@contact');

Route::get('budgets/bar_graph/{id}', ['as' => 'budgets.bar_graph', 'uses' => 'BudgetController@graph1']);
Route::get('budgets/pie_graph/{id}', ['as' => 'budgets.pie_graph', 'uses' => 'BudgetController@graph2']);

Route::resource('budgets','BudgetController');

Route::model('budget', 'Budget');
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
