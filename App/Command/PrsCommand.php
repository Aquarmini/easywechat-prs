<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Command;

use Hyperf\Command\Command;

class PrsCommand extends Command
{
    public function __construct()
    {
        parent::__construct('game:prs');
    }

    public function handle()
    {
    }
}
