<?php

namespace App\Http\Middleware;

use Closure;

use App\Http\Controllers\DateTimeController;

class QuestionOverdue
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        ///$app = new DateTimeController();

        //$app->UpdateDeadline();

        return $next($request);
    }
}
