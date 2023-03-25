<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Interfaces\ClientInterface;


class getTLDPricing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'whmcsApi:getTLDPricing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get TLD Pricing from using WHMCS API';

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
                    'action' => 'GetTLDPricing',
                    'responsetype'  =>  'json',
                ]
            ]
        );

        cache(["getTLDPricing" => json_decode($request->getBody(), true)], 86400);
    }
}
