<?php
use think\Route;
//ask 问知api
//特点一：支持resutFul
//特点二：api接口不可以直接告诉调用者在哪一个控制器
Route::resource('ask','api/ask');
Route::resource('user','api/user');
Route::resource('vip','api/vip');
Route::resource('vpcategory','api/vpcategory');
Route::resource('smalltalk','api/smalltalk');
Route::resource('smalltalkContent','api/smalltalkContent');
Route::resource('smalltalkCate','api/smalltalkCate');
Route::resource('smalltalkAudio','api/smalltalkAudio');
Route::resource('comment','api/comment');
Route::resource('reply','api/reply');
Route::resource('special','api/special');
Route::resource('quickaskCate','api/quickaskCate');
Route::resource('quickask','api/quickask');
Route::resource('quickaskAnswer','api/quickaskAnswer');