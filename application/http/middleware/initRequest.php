<?php
/**
 * Created by PhpStorm.
 * User: sss
 * Date: 2018/12/14
 * Time: 16:10
 */

namespace app\http\middleware;


class initRequest
{

    public function handle($request, \Closure $next){
        echo "init middleware<br/>";
        $request->agent=get_user_agent($request->header('user-agent'));

        return $next($request);
    }

}