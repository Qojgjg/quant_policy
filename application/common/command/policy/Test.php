<?php

namespace app\common\command\policy;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use think\console\input\Argument;
use think\console\input\Option;
use app\common\service\policy\Test as Service;

/**
 * php think policy_test
 */
class Test extends Command
{
    protected $params=[
        'symbol'=>'btcusdt',//'ethusdt','ltcusdt','eosusdt','etcusdt'
    ];
    protected function configure()
    {
        $this->setName('policy_test')
        ->setDescription('');
    }

    protected function execute(Input $input, Output $output)
    {
        $res=(new Service())
            ->setParams($this->params)
            ->run();
        if ($res['code']!=0) {
            $output->writeln($res['msg']);
            return;
        }
        $output->writeln($res['msg']);
        $output->writeln("end.");
    }
}
