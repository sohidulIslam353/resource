<?php




Route::get('/','HelloController@index');
Route::get('contact/us','helloController@contact')->name('contact');
Route::get('about/us','helloController@about')->name('about');



//category crud are here============
Route::get('all/category','boloController@AllCategory')->name('all.category');
Route::get('add/category','boloController@AddCategory')->name('add.category');
Route::post('store/category','boloController@StoreCategory')->name('store.category');
Route::get('view/category/{id}','boloController@ViewCategory');
Route::get('delete/category/{id}','boloController@DeleteCategory');
Route::get('edit/category/{id}','boloController@EditCategory');
Route::post('update/category/{id}','boloController@UpdateCategory');

//posts crud are here
Route::get('write/post','PostController@writePost')->name('write.post');
Route::post('store/post','PostController@StorePost')->name('store.post');
Route::get('all/post','PostController@AllPost')->name('all.post');
Route::get('view/post/{id}','PostController@ViewPost');
Route::get('delete/post/{id}','PostController@DeletePost');
Route::get('edit/post/{id}','PostController@EditPost');
Route::post('update/post/{id}','PostController@UpdatePost');

//student---
// Route::get('students','StudentController@create')->name('student');
// Route::post('store/student','StudentController@store')->name('store.student');
// Route::get('all/students','StudentController@index')->name('all.student');
// Route::get('view/student/{id}','StudentController@show');
// Route::get('delete/student/{id}','StudentController@destroy');
// Route::get('edit/student/{id}','StudentController@edit');
// Route::post('update/student/{id}','StudentController@update');

Route::resource('/student','StudentController');