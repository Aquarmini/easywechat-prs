<?php

use Hyperf\CommandEasyswoole\Application;
use App\Command;

Application::getInstance()->add(new Command\PrsCommand());