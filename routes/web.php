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

Route::get('/', function () {  return view('gen.main-index'); });




Route::get('/sample', function () {  return view('part.auto-com'); });


Route::get('sample-two/', function(){ 	return view('tut.sample'); });

Route::get('question-stat',array('as'=>'question-stat','uses'=>'QuestionController@questionStat'));

Route::get('/university', array('as'=>'university', 'uses' => 'AutoComplete@OneAutocomplete'));


Auth::routes();

//profile pics 

Route::get('profile-pic-view/',array('as'=>'profile-pic-view','uses'=>'UserController@ProfilePicView'));
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
Route::get('adm-tut-payments',array('as'=>'adm-tut-payments','uses'=>'AdminController@AdmGetPyments'));

Route::get('adm-dashboard',array('as'=>'adm-dashboard','uses'=>'AdminController@AdmDashboard'));


Route::get('post-payment-request/{amount}',array('as'=>'post-payment-request','uses'=>'QuestionController@PostPaymentRequest'));


Route::post('tut-payment12',array('as'=>'tut-payment','uses'=>'QuestionController@PayRequests'));
//get tutor profile
Route::get('tut-profile',array('as'=>'tut-profile','uses'=>'TutorController@getTutProfile'));
//post tutor profile
Route::post('tut-profile',array('as'=>'tut-profile','uses'=>'TutorController@postTutProfile'));

//get tutor proggress
Route::get('tut-progress',array('as'=>'tut-progress','uses'=>'TutorController@getTutProgress'));
//post tutor progress
Route::post('tut-progress',array('as'=>'tut-progress','uses'=>'TutorController@postTutProgress'));
//get tutor profile
Route::get('tut-account',array('as'=>'tut-account','uses'=>'TutorController@getTutAccount'));

//post tutor profile
Route::post('tut-account',array('as'=>'tut-account','uses'=>'TutorController@postTutAccount'));

//post tutor profile

Route::post('tut-education',array('as'=>'tut-education','uses'=>'TutorController@postTutEducation'));


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
