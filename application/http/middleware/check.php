<?php
/**
 * Created by PhpStorm.
 * User: sss
 * Date: 2018/12/14
 * Time: 14:53
 */

namespace app\http\middleware;


class check
{
    public function handle($request, \Closure $next)
    {
        echo "check middleware<br/>";

        if ($request->param('name') == 'think') {
            return redirect('index/think');
        }

        return $next($request);
    }

}