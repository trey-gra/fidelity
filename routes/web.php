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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about_us', function () {
	return view('errors.construction');
    //return view('aboutus');
});

Route::get('/contact_us', function () {
    return view('contactus');
});

Route::get('/services', function () {
	return view('errors.construction');
    //return view('services');
});

Route::get('/manage', function () {
    return view('admin.mainAdmin');
});

Route::group(['middleware' => 'auth'], function(){
	//Users section
	Route::get('/users_list', ['uses' =>'userController@userList']);
	Route::get('/create_user', ['uses' =>'userController@create_user']);
	Route::post('/save_user', ['uses' =>'userController@save_user']);
	Route::get('/edit_user/{uid}', ['uses' =>'userController@edit_user'])->name('edit_user');
	Route::post('/update_user', ['uses' =>'userController@update_user'])->name('update_user');

	//Client Section
	Route::group(['prefix'=>'client'], function(){
		Route::get('index',['uses' => 'clientController@index'])->name('client_dash');
		Route::get('add_form', 'clientController@viewAddClientForm')->name('new_client_form');
		Route::get('list_clients', 'clientController@listClients');
		Route::get('/client/edit/{id}', 'clientController@editClients')->name('edit_client');
		Route::post('save_client',['uses' => 'clientController@addClient']);
		Route::get('client_detail',['uses' => 'clientController@getUserDetail'])->name('get_user_detail');
		Route::post('update_client',['uses' => 'clientController@update_client']);
	});
	Route::group(['prefix'=>'claim'], function(){
		Route::get('index', 'claimController@index')->name('claim_dash');
		Route::get('add_claim', 'claimController@createClaim')->name('add_claim');
		Route::get('list_claim', 'claimController@listClaim')->name('claim_list');//----------------
		Route::post('save_claim', 'claimController@saveClaim')->name('save_claim');
		Route::get('save_claim', 'claimController@getInsuranceBranch')->name('get_ins_branch');
		Route::post('upload_file', 'claimController@uploadFiles')->name('upload');
		Route::get('file_upload_form/{id}', 'claimController@file_form')->name('file_form');
		Route::get('find_claim_form/', 'claimController@edit_claim_form')->name('edit_claim');
		Route::post('update_claim/', 'claimController@updateClaim')->name('update_claim');
		Route::post('find_claim', 'claimController@find_claim')->name('find_claim');
		Route::get('find_claim_id/{claim_id}', 'claimController@find_claim_id')->name('find_claim_id');
		Route::get('find_claim_user/{user_id}', 'claimController@find_claim_user')->name('find_claim_user');


	});

	Route::get('add_insurance', 'insuranceController@add_insurer')->name('add_insurance_co');
	Route::get('insurace', 'insuranceController@index')->name('ins_index');
	Route::get('ins_detail/{id}', 'insuranceController@ins_detail')->name('ins_detail');
	Route::get('ins_edit/{id}', 'insuranceController@ins_edit')->name('ins_edit');
	Route::get('ins_branch_add', 'insuranceController@add_branch')->name('ins_branch_add');
	Route::get('ins_update', 'insuranceController@ins_update')->name('ins_update');
	Route::get('branch_update_form/{id}/{comp_id}', 'insuranceController@branch_update_form')->name('ins_branch_form');
	Route::get('branch_update', 'insuranceController@branch_update')->name('ins_branch_update');
	Route::get('branch_delete/{id}', 'insuranceController@branch_delete')->name('ins_branch_delete');
	
	Route::get('test', 'claimController@claimTest')->name('test');

	route::get('Mailbox', 'mailboxController@showMailBox');
	Route::get('Mailbox/{id}', 'mailboxController@readMessage')->name('readMessage');
	Route::post('save_message', 'mailboxController@saveMessage');
	
});

Auth::routes();

Route::get('/home', 'HomeController@index');
