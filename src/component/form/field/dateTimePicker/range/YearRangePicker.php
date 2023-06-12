<?php

namespace Tadm\ui\component\form\field\dateTimePicker\range;

use Tadm\ui\component\Component;
use Tadm\ui\component\form\Field;
use Tadm\ui\component\form\field\dateTimePicker\RangePicker;

/**
 * 年份范围选择框
 * Class YearRangePicker
 * @link   https://next.antdv.com/components/date-picker-cn 日期选择框组件
 * @link   https://day.js.org/docs/zh-CN/display/format 时间格式
 * @link   https://github.com/vueComponent/ant-design-vue/blob/next/components/date-picker/locale/example.json 国际化配置
 * @link   https://next.antdv.com/components/time-picker-cn/#API TimePicker Options
 * @package Tadm\ui\component\form\field
 */
class YearRangePicker extends RangePicker
{
    public function __construct($startField, $endField, $value = [])
    {
        parent::__construct($startField, $endField, $value);
        $this->picker('year');
        $this->valueFormat('YYYY');
    }
    public function modelValue()
    {
        parent::modelValue(); // TODO: Change the autogenerated stub
        $bindFields = [
            'startField',
            'endField',
        ];
        foreach ($bindFields as $field) {

            $value = $this->formItem->form()->input($this->field);
            if(!empty($value)){
                $this->formItem->form()->input($this->field,$this->dateFormat($value));
            }

        }
    }
    protected function dateFormat($value){
        list($startValue,$endValue)  = $value;
        $startValue = date("$startValue-m-d");
        $endValue = date("$endValue-m-d");
        return [$startValue,$endValue];
    }
    public function default($value)
    {
        return parent::default($this->dateFormat($value)); // TODO: Change the autogenerated stub
    }
    public function value($value)
    {
        return parent::value($this->dateFormat($value)); // TODO: Change the autogenerated stub
    }
}
