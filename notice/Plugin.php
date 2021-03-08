<?php
/**
 * 一款消息通知插件，判断来路地址输出欢迎消息。
 * 
 * @package notice
 * @author jrotty
 * @version 0.3
 * @link http://zezeshe.com
 */

class notice_Plugin implements Typecho_Plugin_Interface
{
	public static function activate()
	{
        Typecho_Plugin::factory('Widget_Archive')->header = array('notice_Plugin', 'header');
        Typecho_Plugin::factory('Widget_Archive')->footer = array('notice_Plugin', 'footer');
    }
	/* 禁用插件方法 */
	public static function deactivate(){}
	
	/* 插件配置方法 */

  public static function config(Typecho_Widget_Helper_Form $form){}
	/* 个人用户的配置方法 */
	public static function personalConfig(Typecho_Widget_Helper_Form $form){}
	
	/* 插件实现方法 */

public static function header(){
$ppd = Helper::options()->pluginUrl ;
 echo '<script type="text/javascript" src="'.$ppd.'/notice/notice.js"></script>' . "\n";
}

public static function footer(){
include('welcome.php');


}

}
