<?php
if (! function_exists('p')) {
    /**
     * 打印数组
     *
     * @param  array $data
     */
    function p(array $data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die;
    }
}