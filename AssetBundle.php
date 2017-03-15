<?php

namespace helloworld;

class AssetBundle extends \yii\web\AssetBundle
{
    public $css = [
		'css/bootstrap.min.css',
		'css/normalize.css',
		'css/bootstrap-datetimepicker.min.css',
		'css/bootstrap-table.min.css',
		'css/bootstrap-select.css',
		'css/font-awesome.min.css',
		'css/sm-core-css.css',
		'css/jquery.smartmenus.bootstrap.css',
		'css/freestyle.css',
		'css/theme1.css',
		'fonts/open-sans/opensans.css',
	];
	
	public $js = [
		'js/jquery-1.11.3.min.js',
		'js/bootstrap.min.js',
		'js/moment.min.js',
		'js/bootstrap-datetimepicker.min.js',
		'js/bootstrap-table.min.js',
		'js/bootstrap-select.min.js',
		'js/bootstrap-maxlength.js',
		'js/jquery.number.min.js',
		'js/Chart.bundle.min.js',
		'js/jquery.smartmenus.min.js',
		'js/jquery.smartmenus.bootstrap.min.js',
		'js/freescript.js',
		'js/list_menu.js',
	];

    public function init()
    {
        parent::init();

        $this->publishOptions['beforeCopy'] = function ($from, $to) {
            return preg_match('%(/|\\\\)(fonts|css)%', $from);
        };
    }
}
