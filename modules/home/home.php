<?php
namespace app\modules\home;

class Home extends \yii\base\Module {
	public function init() {
		parent::init();

		$this->params['foo'] = 'bar';
		// ...  其他初始化代码 ...
	}
}