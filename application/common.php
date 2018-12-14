<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

function get_user_agent($http_user_agent){
    $agent_array=[
        'chrome'=>'chrome浏览器',
    ];

    foreach ($agent_array as $k=>$v){
        if(preg_match("/{$k}/i",$http_user_agent)){
            return $v;
        }
    }
    return 'unknown';

}