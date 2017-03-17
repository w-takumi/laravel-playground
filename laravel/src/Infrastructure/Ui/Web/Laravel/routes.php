<?php
use Shippinno\WishList\Infrastructure\Ui\Web\Laravel\Controller\WishController;

Route::get('/', function() {
	$wishes = file_get_contents(base_path('src/Infrastructure/Persistence/Filesystem/wishes.txt'));
	dd($wishes);
});

Route::get('/wishes/create', '\\'.WishController::class.'@create')->name('wish.create');
Route::post('/wishes/store', '\\'.WishController::class.'@store')->name('wish.store');
