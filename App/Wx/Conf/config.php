<?php
return array(
	//'配置项'=>'配置值'
	'URL_MODEL'=>1,
	'TMPL_PARSE_STRING'=>array(
		"__JS__"=>"/static/js/hui/",
		"__CSS__"=>"/static/css/hui/",
		"__IMG__"=>"/static/img/",
		"__UPLOAD__"=>"/static/upload/",
		'TMPL_ACTION_ERROR' => THINK_PATH . 'Tpl/disjumpwx.html',//修改成功跳转对应的模板文件
		'TMPL_ACTION_SUCCESS' => THINK_PATH . 'Tpl/disjumpwx.html',//修改成功的wx
	),
);