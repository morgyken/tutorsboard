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

Route::get('/', function () {  return view('gen.index'); })->name('home');


Route::get('sample-two/', function(){ 	return view('tut.sample'); });

Route::get('question-stat',array('as'=>'question-stat','uses'=>'QuestionController@questionStat'));

Auth::routes();

Route::post('profile-pic-view/',array('as'=>'profile-pic-view','uses'=>'UserController@ProfilePicView'));


Route::post('profile-pic',array('as'=>'profile-pic','uses'=>'UserController@fileUpload'));


//Route::get('sample',array('as'=>'sample','uses'=>'DateTimeController@getDeadlineInSeconds12'));


Route::get('comment-files/{question_id}/{filename}/{commentId}',array('as'=>'comment-files','uses'=>'QuestionController@CommentFilesDownload'));

Route::get('all-questions/{status?}',
	array(
		'as'=>'all-questions',
		'uses'=>'AdminController@TutProfile'
	));

// get tutor payment route, all payments

Route::get('get-payment/{myurl?}',array('as'=>'get-payment','uses'=>'PaymentController@getPayments'));

Route::post('post-payment',array(
	'as'=>'paytutor',
	'uses'=>'PaymentController@postPayments'));

Route::post('ask-questions',array('as'=>'ask-questions','uses'=>'AskQuestionController@askQuestions'));

Route::get('post-questions',array('as'=>'post-questions','uses'=>'QuestionController@postQuestions'));


Route::get('view-question/{question_id}/{optional?}',array('as'=>'view-question','uses'=>'QuestionController@QuestionDetails'));

Route::post('/post-answer/{question_id}', ['as' =>'post.answer', 'uses' => 'QuestionController@PostAnswer']);


Route::get('questions-answered',array('as'=>'questions-answered','uses'=>'AdminController@QuestionsAnswered'));
Route::get('file-download/{question_id}/{filename}/{type}',array('as'=>'file-download','uses'=>'QuestionController@downloads'));
/*
 * Post deadline and price using these two
 */
Route::get('post-deadlinePrice',array('as'=>'post-deadlinePrice','uses'=>'QuestionController@postdeadlinePrice'));

Route::post('PostQuestionPriceDeadline',array('as'=>'PostQuestionPrice','uses'=>'AskQuestionController@PostQuestionPriceDeadline'));


//admin commwnts

Route::post('/post-admin-comments/{question_id}', ['as'=> 'post-comments1', 'uses' => 'QuestionController@PostAdminComments']);


Route::post('/post-comments/{question_id}', ['as'=> 'post-comments', 'uses' => 'QuestionController@PostComments']);

Route::get('sample/{question}/{status}',array('as'=>'sample','uses'=>'QuestionController@UpdateStatus'));

/*
 * Update Question Status here
 */


Route::post('/update-question/{question_id}', array('as' => 'update-question', 'uses'=>'UpdateQuestionController@UpdateQuestionStatus'));

/*
 * accept answer here 
 */

/**
 * Tutot page questions
 */

Route::get('tut-questions',array('as'=>'tut-questions','uses'=>'TutorController@TutProfile'))->name('tut.home');

/**
 *
 * end tutor side
 */




Route::post('/autocomplete', array('as' => 'autocomplete', 'uses'=>'SearchController@autocomplete'));


Route::post('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));

Route::get('/home', 'HomeController@index')->name('home');

Route::post('autocomplete-search',array('as'=>'autocomplete.search','uses'=>'SearchController@index'));

Route::post('autocomplete-ajax',array('as'=>'searchajax','uses'=>'SearchController@autoComplete'));

//admin routes starts here


Route::get('admin-question-loader',array('as'=>'admin-question-loader','uses'=>'AdminController@AdmQLoader'));
Route::get('adm-payments',array('as'=>'adm-payments','uses'=>'AdminController@AdmPayments'));
Route::get('adm-tutors',array('as'=>'adm-tutors','uses'=>'AdminController@AdmTutors'));

Route::get('adm-tut-payments',array('as'=>'adm-tut-payments','uses'=>'AdminController@AdmGetPyments'));
Route::get('adm-profile',array('as'=>'adm-profile','uses'=>'AdminController@AdmProfile'));

Route::get('adm-dashboard',array('as'=>'adm-dashboard','uses'=>'AdminController@AdmDashboard'));

Route::get('post-payment-request/{amount}',array('as'=>'post-payment-request','uses'=>'QuestionController@PostPaymentRequest'));

Route::get('tut-profile/{email}/{optional?}',array('as'=>'tut-profile','uses'=>'AdminController@TutProfile'));

Route::get('tut-links/{view}/{optional?}',array('as'=>'tut-links','uses'=>'AdminController@TutorLinks'));

/**
 * View various accounts profile, 
 * such as home, payment, tut-profile, and account profile
 * Pass the view to be shown by the tutProfile function
 */

Route::get('tut-profile/{view?}',array('as'=>'tut-main-profile',
    'uses'=>'TutorController@tutProfile'));


Route::get('adm-post-payments/{amount}/{request_id}',array('as'=>'post-payments','uses'=>'AdminController@AdmPostPyments'));

Route::post('tut-payment12',array('as'=>'tut-payment','uses'=>'QuestionController@PayRequests'));






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
