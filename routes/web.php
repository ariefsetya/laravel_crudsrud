<?php

Route::get('/','SekolahController@index');
Route::get('/add','SekolahController@add');
Route::post('/save','SekolahController@save');
Route::get('/edit/{id}','SekolahController@edit');
Route::post('/update','SekolahController@update');
Route::get('/delete/{id}','SekolahController@delete');
Route::post('/search','SekolahController@search');
Route::get('/pdf/{id}','SekolahController@pdf');
Route::get('/download/{id}','SekolahController@download');
Route::get('/images/{filename}', function ($filename)
{
	$path = storage_path() . '/' . $filename;
	$file = File::get($path);
	$type = File::mimeType($path);
	$response = Response::make($file);
	$response->header("Content-Type", $type);
	return $response;
});