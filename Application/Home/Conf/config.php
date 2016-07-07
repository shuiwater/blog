<?php
/**
*前台配置
*@author water
*
*
*/
return array(
	//'配置项'=>'配置值'
	/*常用配置*/

	'TMPL_PARSE_STRING' =>  array(
        '__JS__'    =>  __ROOT__.'/Public/Js',
        '__CSS__'   =>  __ROOT__.'/Public/Css',
        '__IMG__'   =>  __ROOT__.'./Public/Img',   
    ),/*模板替换*/
    'URL_MODEL' =>2,    /*路由模式*/
);