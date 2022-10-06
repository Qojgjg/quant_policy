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
        ->addArgument('money', Argument::REQUIRED, 'how many money ?')
        ->addOption(
            'symbol',
            null,
            Option::VALUE_REQUIRED,
            'Which symbol do you like?',
            ['btcusdt','ethusdt','ltcusdt','eosusdt','etcusdt']
        )
        ->setDescription('');
    }

    protected function execute(Input $input, Output $output)
    {
        $money=trim($input->getArgument('money'));
        $output->writeln("money".$money);
        $symbol=trim($input->getOption('symbol'));
        $output->writeln("symbol".$symbol);

        $res=(new Service())
            ->setParams([])
            ->run();
        if ($res['code']!=0) {
            $output->writeln($res['msg']);
            return;
        }
        $output->writeln("success");
    }
}
