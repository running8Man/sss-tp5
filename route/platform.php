<?php
//管理平台路由分组
Route::group('platform',
//    function (){
//
//    /**
//     * 需要鉴权的路由
//     */
//    Route::group('auth_check',[
//        '/'=>'Index/index',
//    ])->middleware(app\http\middleware\check::class);
//
//
//
//    /**
//     * 普通路由，不需要鉴权
//     */
//    Route::group('normal',[
//        '/test'=>'Test/index',
//    ]);
//
//}
    function (){
        Route::group(['method'=>'post'],function (){
            Route::rule('/', 'blog/read');
        });
    }

)->prefix('platform');