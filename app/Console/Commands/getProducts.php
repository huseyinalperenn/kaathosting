<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Interfaces\ClientInterface;

class getProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whmcsApi:getProducts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get Products from using WHMCS API';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $client = app()->make(ClientInterface::class);

        $request = $client->post("https://kaat.tech/includes/api.php",
            [
                'form_params' => [
                    'identifier' => env("WHMCS_API_IDENTIFIER"),
                    'secret' => env("WHMCS_API_SECRET"),
                    'action' => 'GetProducts',
                    'responsetype'  =>  'json',
                ]
            ]
        );

        cache(["getProducts" => json_decode($request->getBody(), true)], 86400);
    }
}
