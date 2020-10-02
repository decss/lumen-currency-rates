<?php


namespace App\Console\Commands;


use App\Models\Currency;
use App\Services\CurrencyService;
use Illuminate\Console\Command;

class CurrencyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'currency:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update database with actual currency rates';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $service = new CurrencyService();
        $isLoad = $service->load();
        if ($isLoad) {
            $data = $service->getAllCurrencies();
            (new Currency())->updateCurrencies($data);
        }

    }
}
