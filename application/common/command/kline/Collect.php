<?php

namespace app\common\command\kline;

use think\console\Command;
use think\console\Input;
use think\console\Output;
use app\common\service\kline\Collect as Service;
use app\admin\model\kline\Btcusdt as BTCUSDT;
use app\admin\model\kline\Ethusdt as ETHUSDT;
use app\admin\model\kline\Ltcusdt as LTCUSDT;
use app\admin\model\kline\Eosusdt as EOSUSDT;
use app\admin\model\kline\Etcusdt as ETCUSDT;

/**
 * php think collect
 */
class Collect extends Command
{
    protected function configure()
    {
        $this->setName('collect')
        ->addArgument('Symbol')
        ->setDescription('callect binance kline data');
    }

    protected function execute(Input $input, Output $output)
    {
        //symbol
        $symbol=$input->getArgument('Symbol');
        $list=['BTCUSDT','ETHUSDT','LTCUSDT','EOSUSDT','ETCUSDT'];
        if (!in_array($symbol, $list)) {
            $output->writeln("symbol not exist");
            return;
        }
        //model
        $model=null;
        if ($symbol=='BTCUSDT') {
            $model=new BTCUSDT();
        } elseif ($symbol=='ETHUSDT') {
            $model=new ETHUSDT();
        } elseif ($symbol=='LTCUSDT') {
            $model=new LTCUSDT();
        } elseif ($symbol=='EOSUSDT') {
            $model=new EOSUSDT();
        } else {
            $model=new ETCUSDT();
        }
        //collect
        $res=(new Service())
            ->setModel($model)
            ->setSymbol($symbol)
            ->setInterval('1m')
            ->setStartTime(strtotime('2018-06-15'))
            ->collect();
        if ($res['code']!=0) {
            $output->writeln($res['msg']);
            return;
        }
        $output->writeln("success");
    }
}
