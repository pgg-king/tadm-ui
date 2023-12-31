<?php
/**
 * Created by PhpStorm.
 * User: rocky
 * Date: 2022-05-24
 * Time: 20:28
 */

namespace Tadm\ui\component\echart;

/**
 * 饼图
 * Class PieChart
 * @package Tadm\ui\component\echart
 * @method static $this create(string $name = '') 创建
 */
class PieChart extends Echart
{
   
    protected $seriesName;
    protected $ring = false;

    public function __construct($name='')
    {
        parent::__construct();
        $this->echart->tooltip->trigger = 'item';
        $this->echart->legend = [
            'top' => '5%',
            'left' => 'center'
        ];
        $this->seriesName = $name;
    }

    /**
     * 添加数据
     * @param $name
     * @param int|\Closure $value
     * @return $this
     */
    public function data($name, $value)
    {
        if ($value instanceof \Closure) {
            $value =  call_user_func($value);
        }
        $this->data[] = ['value' => $value, 'name' => $name];
        return $this;
    }

    /**
     * 环型
     * @return $this
     */
    public function ring()
    {
        $this->ring = ['40%', '70%'];
        return $this;
    }

    public function jsonSerialize()
    {
        if (count($this->data) > 0) {
            $series = [
                'name' => $this->seriesName,
                'type' => 'pie',
                'radius' => '50%',
                'emphasis' => [
                    'itemStyle' => [
                        'shadowBlur' => 10,
                        'shadowOffsetX' => 0,
                        'shadowColor' => 'rgba(0, 0, 0, 0.5)',
                    ]
                ],
                'data' => $this->data
            ];
            if ($this->ring) {
                $series['avoidLabelOverlap'] = false;
                $series['radius'] = ['40%', '70%'];
                $series['label'] = [
                    'show' => false,
                    'position' => 'center',
                ];
                $series['labelLine'] = [
                    'show' => false,
                ];
                $height = $this->attr('height') ?: 350;
                $height = (int)$height;
                $series['emphasis'] = [
                    'label' => [
                        'show' => true,
                        'fontSize' => (int)($height / 20),
                        'fontWeight' => 'bold',
                    ],
                ];
                $series['itemStyle'] = [
                    'borderRadius' => 5,
                    'borderColor' => '#fff',
                    'borderWidth' => 1,
                ];
            }
            $this->echart->series[] = $series;
        }
        return parent::jsonSerialize(); // TODO: Change the autogenerated stub
    }
}
