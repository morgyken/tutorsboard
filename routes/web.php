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
        return view('gen.index');
})->name('home');

Auth::routes();



Route::get('all-questions',array('as'=>'all-questions','uses'=>'QuestionController@allQuestions'));

Route::post('ask-questions',array('as'=>'ask-questions','uses'=>'QuestionController@askQuestions'));

Route::get('post-questions',array('as'=>'post-questions','uses'=>'QuestionController@postQuestions'));


Route::get('view-question/{question_id}',array('as'=>'view-question','uses'=>'QuestionController@QuestionDetails'));

Route::post('/post-answer/{question_id}', ['as' =>'post.answer', 'uses' => 'QuestionController@PostAnswer']);

/*
 * Post deadline and price using these two
 */
Route::get('post-deadlinePrice',array('as'=>'post-deadlinePrice','uses'=>'QuestionController@postdeadlinePrice'));

Route::post('PostQuestionPriceDeadline',array('as'=>'PostQuestionPrice','uses'=>'QuestionController@PostQuestionPriceDeadline'));

Route::get('datetime-picker', function(){

    return view('quest.sample');
});

//admin commwnts

Route::post('/post-admin-comments/{question_id}', ['as'=> 'post-comments1', 'uses' => 'QuestionController@PostAdminComments']);


Route::post('/post-comments/{question_id}', ['as'=> 'post-comments', 'uses' => 'QuestionController@PostComments']);

Route::post('/commit-to-answer/{question_id}', ['uses' => 'QuestionController@CommitToAnswer'])->name('commit.answer');


Route::get('sample',array('as'=>'sample','uses'=>'SampleController@sample'));
/*
 * View Question details here
 */



/*
 * Check autocomplete
 * This url is used in the autcomplete of the input forms
 */


Route::post('/autocomplete', array('as' => 'autocomplete', 'uses'=>'SearchController@autocomplete'));


Route::post('autocomplete',array('as'=>'autocomplete','uses'=>'SearchController@autocomplete'));

Route::get('/home', 'HomeController@index')->name('home');


Route::post('autocomplete-search',array('as'=>'autocomplete.search','uses'=>'SearchController@index'));

Route::post('autocomplete-ajax',array('as'=>'searchajax','uses'=>'SearchController@autoComplete'));


Route::get('admin-question-loader',array('as'=>'admin-question-loader','uses'=>'AdminController@AdmQLoader'));

