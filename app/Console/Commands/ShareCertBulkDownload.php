<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\site\ShareHolderController;

class ShareCertBulkDownload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'certificate:download';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will create share certificate zip file to download.';

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
     * @return int
     */
    public function handle()
    {
        $ShareHolderController = new ShareHolderController;
        $ShareHolderController->process_bulk_cert_downloads();

        $this->info('Certificate zip file created successfully.');
    }
}
