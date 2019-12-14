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

// Route::view('/','home');
Route::view('/home','home');
Route::view('/test','test');


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
	// Route::delete('/deleted/{id}',function($id){
	// 	return redirect("/thanhcong/".$id);
	// })->name('todo.task.delete');
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

// Route::get('/hello2',function(){
// 	return view('hello2',[
// 		'name' => 'UYÊN',
// 		'year' => '2000',
// 		'school' => 'vnua'
// 	]);
// });

Route::get('/hello2',function(){
	$records=['1','2'];
	return view('hello2')->with([
		'name'=>'<h1>uyên</h1>',
		'year'=>'2000000000',
		'school'=>'vnua',
		'records'=>$records
		]);
});

Route::get('/hello1',function(){
	return view('hello1');
});
Route::get('/sub/hello1',function(){
	return view('hello.hello1');
});
Route::get('/sub/hello2',function(){
	return view('hello.hello2');
});
Route::get('/layout/home',function(){
	return view('layout.home');
});
Route::get('/layout/detail',function(){
	return view('layout.detail');
});

//profile
Route::get('/profile',function(){
	return view('profile')->with([
		'name'=> 'Vũ Thị Uyên',
		'birthYear'=>'200000000',
		'school'=>'Học viện Nông Nghiệp Việt Nam',
		'homeTown'=>'Kim Sơn, Ninh Bình',
		'information'=>'<div><i><b>-Chiều cao: </b></i><strike> 1m52 </strike> 1m48 <br><i><b>-Cân nặng: </b></i>42kg <br><i><b>-Sở thích: </b></i>Ngủ + ôm mèo = ôm mèo ngủ</div>',
		'target'=>'lập trình thành công ra virus-> tống tiền thế giới'
	]);
});

//list
Route::get('/list',function(){
	return view('list')->with([
		'list' => [
	        [
	            'name' => 'Học View trong Laravel',
	            'status' => 0
	        ],
	        [
	            'name' => 'Học Route trong Laravel',
	            'status' => 1
	        ],
	        [
	            'name' => 'Làm bài tập View trong Laravel',
	            'status' => -1
	        ],
    ]
	]);
});

Route::get('/','HomeController@index');
Route::get('/page/{page?}','HomeController@page');
Route::get('/Setting1','SettingController@index');

Route::group([
	'namespace'=>'Admin',
], function(){
	Route::get('/Setting2','SettingController@index');
	Route::get('/Setting3','Test\SettingController@index');
	Route::get('/Dashboard','dashboardController@index');
});
Route::resource('task','Frontend\taskController');

//btvn 4
Route::get('/create','Frontend\taskController@create')->name('todo.task.create');
Route::get('/store','Frontend\taskController@store')->name('todo.task.store');
Route::get('/show/{id}','Frontend\taskController@show')->name('todo.task.show');
Route::get('/edit/{id}','Frontend\taskController@edit')->name('todo.task.edit');
Route::get('/update/{id}','Frontend\taskController@update')->name('todo.task.update');
Route::delete('/destroy/{id}','Frontend\taskController@destroy')->name('todo.task.destroy');


