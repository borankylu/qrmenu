Route::get('/yemekler', 'YemekController@index');
Route::get('/yemekler/{kategori}', 'YemekController@kategoriyeGoreListele');
