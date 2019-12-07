<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','home');
Route::view('/home','home');

//user
Route::get('/user/{id?}', function ($id=null) {
	if($id==null){
		echo "all";
	}else{
		echo "user ".$id;
	}
});

//thành công
Route::get('/thanhcong/{id}', function($id){
	dd('thành công'.$id);
});



Route::prefix('task')->group(function(){
	//delete
	Route::delete('/deleted/{id}',function($id){
		return redirect("/thanhcong/".$id);
	})->name('todo.task.delete');
	//edit
	Route::get('/edit/{id}',function($id){
		dd('edit');
	})->name('todo.task.edit');
	//finish
	Route::get('/finish/{id?}',function($id=null){
		if($id==null){
			echo "finish all";
		}else{
			echo "finish ".$id;
		}
		})->name('todo.task.finish');
	//again
	Route::get('/again/{id?}',function($id=null){
		if($id==null){
			echo 'do again all!';
		}else{
			echo "again ".$id;
		}
	})->name('todo.task.again');
});