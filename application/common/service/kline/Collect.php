<?php

namespace app\common\service\kline;

use think\Exception;
use Lin\Binance\Binance;
use think\Db;
use app\common\service\BaseService;

class Collect extends BaseService
{
    protected $binance;
    protected $model;

    protected $symbol;
    protected $interval;
    protected $startTime;
    protected $endTime;
    public function __construct()
    {
        $this->binance=new Binance();
        $this->endTime=strtotime(date('Y-m-d'));
    }
    public function setModel($val){
        $this->model=$val;
        return $this;
    }
    public function setSymbol($val){
        $this->symbol=$val;
        return $this;
    }
    public function setInterval($val){
        $this->interval=$val;
        return $this;
    }
    public function setStartTime($val){
        $this->startTime=$val;
        return $this;
    }

    public function collect()
    {
        while ($this->startTime <= $this->endTime) {
            $list=$this->binance->system()->getKlines([
                'symbol'=>$this->symbol,
                'interval'=>$this->interval,
                'startTime'=>$this->startTime.'000',
                'limit'=>500,
            ]);
            Db::startTrans();
            try{
                foreach ($list as $row) {
                    $map=[
                        'opentime'=>substr($row[0],0,10),
                        'open'=>$row[1],
                        'high'=>$row[2],
                        'low'=>$row[3],
                        'close'=>$row[4],
                        'volume'=>$row[5],
                        'closetime'=>substr($row[6],0,10),
                        'amount'=>$row[7],
                        'num'=>$row[8],
                        'volume_active'=>$row[9],
                        'amount_active'=>$row[10],
                    ];
                    if ($this->model->exists($map)) {
                        continue;
                    }
                    $res=$this->model->addOne($map);
                    if (!$res) {
                        throw new Exception('save error');
                    }
                }
                Db::commit();
                echo('保存数据行数'.count($list)."\n");
            } catch (\Exception $e) {
                Db::rollback();
                return alert_info(1, $e->getMessage());
            }
            $row=end($list);
            $this->startTime=substr($row[0],0,10)+60;
            echo('下次开始时间'.date('Y-m-d H-i:s',$this->startTime)."\n");
            sleep(1);
        }
        return alert_info(0, 'success');
    }


}
