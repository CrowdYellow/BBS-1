<?php

/**
 * route
 *
 * @return mixed
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

/**
 * 如果 $condition 不为 True 即会返回字符串 `active`
 *
 * @param        $condition
 * @param string $activeClass
 * @param string $inactiveClass
 *
 * @return string
 */
function category_nav_active($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));

    return \Illuminate\Support\Str::limit($excerpt, $length);
}