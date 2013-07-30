<?php 
	global $wpdb;

	// function wpdisplay(){
	// 	$myrows = $wpdb->get_results( "SELECT * FROM wp_table" );
	// var_dump($myrows);
	// echo "1111";
	// add_menu_page('wpdisplay','展示');
	// }

// my_add_pages() 为 'admin_menu' 钩子的回调函数
function my_add_pages() {
    // 第一个参数'Help page'为菜单名称，第二个参数'使用帮助'为菜单标题
    // 'manage_options' 参数为用户权限
    // 'my_toplevel_page' 参数用于调用my_toplevel_page()函数，来显示菜单内容
    add_menu_page('Help page', '使用帮助', 'manage_options', __FILE__, 'my_toplevel_page');
}

// my_toplevel_page() 用于显示菜单的内容，填写菜单页面的HTML代码即可
function my_toplevel_page() {
	global $wpdb;
   $myrows = $wpdb->get_results( "SELECT * FROM wp_table" );
   var_dump($myrows);
	echo "111";

    // 如以下示例代码。 wrap 类是WordPress构建好的css类，可以在你的HTML代码中使用
    /*
    echo '
    <div class="wrap">
    <h2>使用帮助</h2>
    <p>这里是使用帮助，通过阅读本文你将了解本程序的使用！有事请<a href="#">与我联系</a></p>
    </div>
    ';
    */
}

// 通过add_action来自动调用my_add_pages函数
add_action('admin_menu', 'my_add_pages');
	

 ?>