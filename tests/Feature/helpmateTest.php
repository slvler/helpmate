<?php

namespace slvler\helpmate\Tests\Feature;

use Illuminate\Support\Facades\Config;
use slvler\helpmate\Tests\Unit\TestCase;

class helpmate{

    public function test_console_command()
    {
        $this->artisan('helper:list')->assertExitCode(0);
    }

}



?>