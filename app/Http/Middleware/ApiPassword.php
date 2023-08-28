<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Http\Traits\GeneralTrait;
use Throwable;

class ApiPassword
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\JsonResponse
     */
    public function handle(Request $request, Closure $next)
    {
        try {
            if ($request->header('api_password') != null && $request->header('api_password') == '&gig^$ll#6552fY3nXj'){
                return $next($request);
            }else {
                return response()->json([
                    'status' => false,
                    'msg' => __('messages.error'),
                    'error-code' => 6001
                ]);
            }
        }catch (Throwable $e){
            return response()->json([
                'status'=>false,
                'msg'=>__('messages.error'),
                'error-code'=>6000
            ]);
        }
    }
}
