<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //指定页面移除CSRF保护:
//		'/Home/testcsrf/csrfsave',
        //所有页面移除CSRF包含
//        '*'
    ];
}
