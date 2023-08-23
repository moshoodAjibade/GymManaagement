/*Route::get('/contact', function () { return view('contact');}); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/contact', 'PostController@create')->name('create');
Route::post('/contact', 'PostController@store')->name('contactstore');


//Route::get('/contact', [PostController::class, 'create']);

// Create New User

//Route::post('/contact5store]', [PostController::class, 'contactstore']);
*/
// Show Register/Create Form


Route::get('/bookappointment', function () {
    return view('bookappointment');
});

Route::get('/viewappointment', function () {
    return view('viewappointment');
});

Route::get('/cancel_appointment/{id}', function () {
    return view('cancel_appointment');
});



Route::get('/adminindex', function () {
    return view('adminindex');
});