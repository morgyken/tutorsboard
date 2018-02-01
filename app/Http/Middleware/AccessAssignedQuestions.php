<?php

namespace App\Http\Middleware;

use Closure;

use DB;

use Auth;

class AccessAssignedQuestions
{
    /**
    *
        0716 512453
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $question_id =$request->route('question_id');

        $user = Auth::user()->email;

        //Check if the question and the user share anything

        $data = DB::table('question_matrices')
        ->where('question_id', $question_id) 
        ->where('assigned', 1)
        ->pluck('tutor_id');

        $result = $data->toArray();

        //check if the user is not admin
        if(Auth::user()->user_role =='tutor')
            {
                //if the tutor has not been assigned any question, return to all questions

                if(in_array($user, $result))
                    {
                        return redirect()->back();

                    }

            }
            else{

                return $next($request);

            }  
    }
}


