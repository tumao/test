<?php 
/**
 * 名称：WordPress后台添加侧边栏子菜单 
 * 最后修改：2013年07月
 */


add_action('admin_menu', 'register_my_custom_submenu_page');

 

function register_my_custom_submenu_page() {

    add_menu_page(  '子菜单', '更换图片', 'manage_options', 'my-custom-submenu-page', 'change_writing' );

}

 

function change_writing() {
    global $wpdb;

    $path = "../wp-content/themes/taobao/images/";

    $pic = $wpdb ->get_results("select `picname` from wp_image");

$phtypes = array(
                   'img/gif',
                   'img/jpg',
                   'img/jpeg',
                   'img/bmp',
                   'img/pjpeg',
                   'img/x-png'
                );

echo <<<EOT
    <form method="post" name='form1' enctype="multipart/form-data">
        <input type="submit" value="更换图片"><br/>
        选择1号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择2号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择3号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择4号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择5号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择6号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择7号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择8号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择9号图片： <input type="file" name="photo[]" id="photo" size="20"><br />
        选择10号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择11号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择12号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择13号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择14号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择15号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择16号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择17号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择18号图片：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择滚动图片1：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择滚动图片2：<input type="file" name="photo[]" id="photo" size="20"><br />
        选择滚动图片3：<input type="file" name="photo[]" id="photo" size="20"><br />
    </form>
EOT;
echo "1号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[0]->picname."\" />";
echo "2号图片（545*260）：<img style='display:inline' src=\"".$path.$pic[1]->picname."\" /><br/>";
echo "3号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[2]->picname."\" /><br/>";
echo "4号图片（360*160）：<img style='display:inline' src=\"".$path.$pic[3]->picname."\" /><br/>";
echo "5号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[4]->picname."\" /><br/>";
echo "6号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[5]->picname."\" />";
echo "7号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[6]->picname."\" />";
echo "8号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[7]->picname."\" />";
echo "9号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[8]->picname."\" /><br/>";
echo "10号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[9]->picname."\" />";
echo "11号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[10]->picname."\" />";
echo "12号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[11]->picname."\" />";
echo "13号图片（270*260）：<img style='display:inline' src=\"".$path.$pic[12]->picname."\" /><br/>";
echo "14号图片（158*166）：<img style='display:inline' src=\"".$path.$pic[13]->picname."\" />";
echo "15号图片（158*166）：<img style='display:inline' src=\"".$path.$pic[14]->picname."\" />";
echo "16号图片（158*166）：<img style='display:inline' src=\"".$path.$pic[15]->picname."\" />";
echo "17号图片（158*166）：<img style='display:inline' src=\"".$path.$pic[16]->picname."\" />";
echo "18号图片（158*166）：<img style='display:inline' src=\"".$path.$pic[17]->picname."\" />";
echo "滚动图片1（950*286）：<img style='display:inline' src=\"".$path.$pic[18]->picname."\" />";
echo "滚动图片2（950*286）：<img style='display:inline' src=\"".$path.$pic[19]->picname."\" />";
echo "滚动图片3（950*286）：<img style='display:inline' src=\"".$path.$pic[20]->picname."\" />";
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // if($_POST['photo']){
    

  

    $upfile=$_FILES["photo"]; 
   
    for( $i=0 ; $i <=20; $i++){
      if($upfile['name'][$i]!=''){
        if (!is_uploaded_file($_FILES["photo"]["tmp_name"][$i])){
          echo "图片不存在";
          // exit();
        }
            $pinfo=pathinfo($upfile["name"][$i]);
        $name=$pinfo['basename'];//文件名
        $tmp_name=$upfile["tmp_name"][$i];
        $file_type=$pinfo['extension'];//获得文件类型
         $showphpath=$path.$name;
        if(in_array($upfile["type"],$phtypes)){
          echo "文件类型不符！";
          exit();
         }
        if(move_uploaded_file($tmp_name,$path.$name)){
          echo "成功！";
        }
        $pic = array(
                      'picname' => $name 
        );
        $where = array(
                      'id'  => intval($i)+1,

            );
        $wpdb ->update('wp_image', $pic , $where );  
      }
    }
   
    
}

}


?>