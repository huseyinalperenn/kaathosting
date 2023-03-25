<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use App\Interfaces\ClientInterface;

class ValidateLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        /*$client = app()->make(ClientInterface::class);

        $request = $client->post("https://kaat.tech/includes/api.php",
            [
                'form_params' => [
                    'identifier' => env("WHMCS_API_IDENTIFIER"),
                    'secret' => env("WHMCS_API_SECRET"),
                    'action' => 'ListOAuthCredentials',
                    'responsetype'  =>  'json',
                ]
            ]
        );

        dd(json_decode($request->getBody(), true));*/

        //$clients = DB::table('tblclients')->where("ip")->first();


        return $next($request);
    }
}
