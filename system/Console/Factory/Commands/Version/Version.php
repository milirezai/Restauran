<?php
namespace System\Console\Factory\Commands\Version;
use System\Console\Factory\Commands\Command;
use System\Config\Env;

class Version extends Command
{
    private $name = "-v";
    private $description = 'Version framework';

    public function name()
    {
        return $this->name;
    }
    public function description()
    {
        return $this->description;
    }
    public function handle(array $argv)
    {
        return $this->_v();
    }
}