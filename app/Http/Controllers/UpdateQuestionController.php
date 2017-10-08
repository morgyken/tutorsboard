<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Storage;
use Response;
use Session;
use App\CreditCardDetails;
use App\Transaction;
use App\MakePaymentModel;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\Auth;

class UpdateQuestionController extends Controller
{
    public function UpdateQuestionStatus(Request $request, $question)
    {
        /**
         * Cancel Question here
         */

        if($request->update =='cancel'){
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 1,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 0,
                        'assigned' => 0,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * Add Cancel Question message here
             * Make price of cancelling be zero
             */
        }

        if($request->update =='revision'){
            /**
             * Post to assigned matrix
             */
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 1,
                        'answered' => 0,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * insert the history of the ratings
             */

            DB::table('question_histories')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'question_id' => $question,
                    'status' => 'Revision',
                    'moderator' => 'Jeremy',
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);
        }

        /**
         * Completed Questions
         */
        if($request->update =='completed'){

            /**
             * Post to assigned matrix
             */
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 1, //accepted
                        'rated' => 1,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 1,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * insert the history of the ratings
             */

            DB::table('question_histories')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'question_id' => $question,
                    'status' => 'Completed',
                    'moderator' => 'Jeremy',
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

        }

        /**
         * Completed Questions
         */
        if($request->update =='paid'){

            /**
             * Post to assigned matrix
             */
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 1, //accepted
                        'rated' => 1,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 1,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 1,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * insert the history of the ratings
             */

            DB::table('question_histories')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'question_id' => $question,
                    'status' => 'paid',
                    'moderator' => 'Jeremy',
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

        }

        if($request->update =='rated'){
            /**
             * Post to assigned matrix
             */
            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 1,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 1,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * inssert the ratings of the question
             */
            DB::table('question_ratings')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'ratings' => $request->rating,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

            /**
             * insert the history of the ratings
             */

            DB::table('question_histories')->insert(
                [

                    'user_id' => Auth::user()->email,
                    'question_id' => $question,
                    'status' => 'The Question has been rated',
                    'moderator' => 'Jeremy',
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

        }




        if($request->update =='postAnswer'){
            //file uploads

            $file = Input::file('file');

            if(is_array($file)){

                $dest = public_path().'/storage/uploads/'.$question.'/answer/';

                foreach ($file as $files){
                    /**
                     * loop through multiple files
                     */

                    $name =  $files->getClientOriginalName();
                    $files->move($dest, $name);
                }

            }
            /*
              * Update the question status
              */

            DB::table('post_answers')->insert(
                [
                    'answer_id'=>rand(9000,90000),
                    'overdue' => '0',
                    'question_id' =>$question,
                    'user_id' => Auth::user()->email,
                    'answered' => 1,
                    'answer_body' => $request['answer_body'],
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);


            /**
             * Update the matrix table
             *
             */

            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 0,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 1,
                        'assigned' => 1,
                        'current' => 0,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            $this->UpdateStatus($question, 'answered');

        }

        /**
         * Reassign Questions
         */

        if($request->update =='reassigned'){


            DB::table('post_comments')->insert(
                [
                    'comment_body' => "Question has been Reassigned ",
                    'comments_id' =>  rand(1000, 9999),
                    'question_id' => $question,
                    'message_type'=>'Ressigned',
                    'user_id' => Auth::user()->email,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled' => 0,
                        'reassigned' => 1,
                        'completed' => 0,
                        'rated' => 0,
                        'paid' => 0,
                        'revision' => 0,
                        'answered' => 0,
                        'assigned' => 1,
                        'current' => 1,
                        'paid' => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );



        }

        /*
         * Check if the request is commit
         */


        if($request->update =='commit'){


            DB::table('post_comments')->insert(
                [
                    'comment_body' => "Welcome! You have been assigned to this question,
                    please ensure that you provide quality answer",
                    'comments_id' =>  rand(1000, 9999),
                    'question_id' => $question,
                    'message_type'=>'Commit',
                    'user_id' => Auth::user()->email,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);

            DB::table('question_matrices')->where('question_id', $question)
                ->update(
                    [
                        'cancelled'         => 0,
                        'reassigned'        => 0,
                        'completed'         => 0,
                        'rated'             => 0,
                        'paid'              => 0,
                        'revision'          => 0,
                        'answered'          => 0,
                        'assigned'          => 1,
                        'current'           => 0,
                        'paid'              => 0,
                        'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
                    ]
                );

            /**
             * Keep Question history here
             */

        }

        /*
         * Check if the request is dispute
         */

        if($request->update =='dispute'){
            DB::table('dispute_questions')->insert(
                [
                    'status' => 'disputed',
                    'question_id' =>$question,
                    'reason' => $request->input('message'),
                    'user_id' => Auth::user()->email,
                    'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                    'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
                ]);


            $this->UpdateStatus($question, 'disputed');
        }

        /*
         * Check if the request is finished
         */

        if($request->update =='completed'){
            $this->QuestionStatusHistory('finished_questions', $question, 'finished');

            $this->QuestionHistory('completed', $question);

        }


        /*
        * Check if the request is unassined
        */

        if($request->update =='reassigned'){

            $this->QuestionStatusHistory('unassigned_questions', $question, 'available');

            $this->QuestionHistory('reassigned', $question);

        }


        /*
        * Check if the request is paid
        */

        if($request->update =='paid'){

            $this->QuestionStatusHistory('finished_questions', $question, 'paid');

            $this->QuestionHistory('paid', $question);

        }

        /*
         * Check if the request is reassigned
         */

        if($request->update =='reassign'){
            $this->QuestionStatusHistory('finished_questions', $question, 'reassigned');

            $this->QuestionHistory('reassigned', $question);
        }


        /*
         * Check if the request is Accept
         */

        if($request->update =='cancel'){
            $this->QuestionStatusHistory('finished_questions', $question, 'cancelled');

            $this->QuestionHistory('cancelled', $question);
        }

        /*
         * Check if the request is Accept Answer
         */

        if($request->update =='accept'){

            $this->UpdateStatus($question, 'accepted');

            $this->QuestionHistory('accepted', $question);

        }

        /*
         * Add status to the questuon
         */

        return redirect()->route('view-question', ['question_id'=> $question]);

    }

    public function QuestionHistory($status, $question){

        DB::table('question_histories')->insert(
            [
                'status' => $status,
                'question_id' =>$question,
                'user_id' => Auth::user()->email,
                'created_at' =>\Carbon\Carbon::now()->toDateTimeString(),
                'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
            ]);


    }
}
