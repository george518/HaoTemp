<?php
/******************************************************************
** 文件名称: TemplateController.class.php
** 功能描述: 示例模板控制器（非业务）
** 创建人员: george Hao
** 创建日期: 2016-03-01
******************************************************************/
namespace System\Controller;
use Think\Controller;

class TemplateController extends Controller {

	public function index()
	{
		$this->display();
	}
}