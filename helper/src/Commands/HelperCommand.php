<?php

namespace Qwerty\HelperService\Commands;

use Illuminate\Console\Command;
use Qwerty\HelperService\QwertyHelperCommand;

class HelperCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'helper:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Helper Function List';

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
        $list = new QwertyHelperCommand();
        $this->info( $list->getList());
    }
}
