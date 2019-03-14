<?php

Route::get('/', 'Dashboard@index')->name('admin_dashboard');

Route::get('/', 'UserController@inicio')->name('inicio');
Route::get('/usuarios', 'UserController@index')->name('admin.users.index');
Route::get('/usuarios/detalle/{user}', 'UserController@show')->name('admin.users.show');
Route::get('/usuarios/nuevo', 'UserController@create')->name('users.create');
Route::post('/usuarios', 'UserController@store')->name('admin.users.store');
Route::get('/usuarios/{user}', 'UserController@edit')->name('admin.users.edit');
Route::put('/usuarios/{user}', 'UserController@update')->name('admin.users.update');
Route::delete('/usuarios/{user}', 'UserController@destroy')->name('admin.users.destroy');


//Route::resource('vehiculo', 'VehiculoController', ['as' => 'admin']);


Route::get('/vehiculo', 'VehiculoController@index')->name('admin.vehiculo.index');
Route::get('/vehiculo/nuevo/{user}', 'VehiculoController@create')->name('admin.vehiculo.create');
Route::get('/vehiculo/detalle/{vehiculo}', 'VehiculoController@show')->name('admin.vehiculo.show');

Route::post('/vehiculo', 'VehiculoController@store')->name('admin.vehiculo.store');


Route::get('/cotizacion', 'CotizacionController@index')->name('admin.cotizacion.index');
Route::get('/cotizacion/nuevo/{vehiculo}', 'CotizacionController@create')->name('admin.cotizacion.create');
Route::post('/cotizacion', 'CotizacionController@store')->name('admin.cotizacion.store');
Route::get('/cotizacion/{cotizacion}', 'CotizacionController@edit')->name('admin.cotizacion.edit');


Route::post('/cotizacion', 'DetalleController@store')->name('admin.detalle.store');