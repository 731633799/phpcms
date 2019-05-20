<?php
/**
 *  index.php PHPCMS 入口
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-6-1
 */
 //PHPCMS根目录

define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('AUTO_MOBILE', true);   //开启手机自动跳转
include PHPCMS_PATH.'/phpcms/base.php';

pc_base::creat_app();

?>