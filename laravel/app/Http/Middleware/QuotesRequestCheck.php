<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class QuotesRequestCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next){

        $urlAuthorName = $request->segment(3);
        $urlLimit = isset($_GET['limit']) ? $_GET['limit'] : null;

        if(!$this->isValidURLSegment($urlAuthorName)){
            // dd(['message' => 'Invalid author name.']);
            abort(response()->json('Invalid author name.', 400));
        }
        else if(!$this->isValidLimit($urlLimit)){
            // dd(['message' => 'Invalid limit, use a value between 1 and 10.']);
            abort(response()->json('Invalid limit, use a value between 1 and 10.', 400));
        }
        else{
            return $next($request);
        }
    }

    private function isValidURLSegment(string $urlSegment): bool {

        if(str_contains($urlSegment," ")){ 
            $urlSegment = str_replace(" ",'-',$urlSegment);
        }

        if (preg_match("/^[A-Za-z-]+$/", $urlSegment)) {
            return true;
        }
        else{
            return false;
        }
    }

    private function isValidLimit(int|null $limit): bool {
        if($limit <= 0 || $limit > 10 || $limit == null){
            return false;
        }
        else{
            return true;
        }
    }

}
