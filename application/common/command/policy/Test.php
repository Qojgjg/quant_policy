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
    protected function configure()
    {
        $this->setName('policy_test')
        ->addOption(
            'symbol',
            null,
            Option::VALUE_REQUIRED,
            'Which symbol do you like?'
        )
        ->setDescription('');
    }

    protected function execute(Input $input, Output $output)
    {
        $symbol=trim($input->getOption('symbol'));
        $list=['btcusdt','ethusdt','ltcusdt','eosusdt','etcusdt'];
        if (!in_array($symbol, $list)) {
            $output->writeln("symbol not exist");
            return;
        }
        $output->writeln("symbol:".$symbol);
        $res=(new Service())
            ->setParams([])
            ->run();
        if ($res['code']!=0) {
            $output->writeln($res['msg']);
            return;
        }
        $output->writeln($res['msg']);
        $output->writeln("end.");
    }
}
