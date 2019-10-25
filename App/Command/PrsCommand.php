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
        while (true) {
            $target = rand(0, 2);
            $mine = (int) $this->ask('请输入 0石头 1剪刀 2布:');
            if (in_array($mine, [0, 1, 2])) {
                $result = $this->isWin($mine, $target);
                if ($result === true) {
                    $this->info('恭喜你，你赢了');
                } elseif ($result === false) {
                    $this->info('真不幸，你输了');
                } else {
                    $this->info('平局');
                }
            }
        }
    }

    protected function isWin($mine, $target)
    {
        $result = $mine - $target;
        if ($result == 0) {
            return 0;
        }

        if ($result == -1 || $result == 2) {
            return true;
        }

        return false;
    }
}
