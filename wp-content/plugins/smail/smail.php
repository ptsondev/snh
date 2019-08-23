<?php
/**
 * @package Sher
 */
/*
Plugin Name: Smail
Plugin URI: http://snh.vn/
Description: Send email marketing
Version: 3.2
Author: Automattic
License: GPLv2 or later
*/


/** Step 2 (from text above). */
add_action( 'admin_menu', 'smail_menu' );

/** Step 1. */
function smail_menu() {
    add_menu_page( 'Smail theme Options', 'Smail', 'manage_options', 'smail/home.php', 'smail_options' );
}

/** Step 3. */
function smail_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    
    if(isset($_POST) && isset($_REQUEST['btnSendSmail'])){
        $mail = $_REQUEST['arrEmail'];
        $name = $_REQUEST['txtName'];
        $title = $_REQUEST['txtTitle'];
        $body = $_REQUEST['smailContent'];
       // var_dump($body);die;
      /*  $body='<h3>Xin chào {name}</h3>
Như chúng ta đều biết, sự chuyên nghiệp của 1 công ty không chỉ thể hiện qua chất lượng sản phẩm hay dịch vụ mà công ty đó mang lại, mà nó còn được thể hiện ở hình ảnh của bộ nhận diện thương hiệu trong mắt mọi người.

Nói cách khác, những cuốn catalogue chính là lớp áo bên ngoài của doanh nghiệp, giúp doanh nghiệp giao tiếp và tương tác với các khách hàng tiềm năng. Để có cuốn catalogue hoàn hảo, sau bản thiết kế đầy sáng tạo và phong cách, thì bạn cũng cần đến dịch vụ in catalogue chuyên nghiệp.

<img class="alignnone size-medium wp-image-94" src="http://inoffsethcm.com/wp-content/uploads/2016/11/in-profile-cong-ty-tai-hcm-300x148.jpg" alt="in profile cong ty tai HCM" width="300" height="148" />

Dịch vụ in catalogue giá rẻ của chúng tôi sẽ giúp bạn có được những cuốn catalogue thành phẩm như mong đợi. Chúng tôi luôn hiểu rõ tính thiết yếu cũng như tầm quan trọng của catalogue trong việc thu hút khách hàng, gặp gỡ đối tác cũng như marketing sản phẩm đến người dùng.';*/
        
         update_option( 'xsmail_string', ($body));
        update_option( 'xsmail_title', $title);
        
        
         $body = str_replace('{name}', $name, stripcslashes($body));
        
         $headers = "From: $sender\n";
            $headers .= "Content-Type: text/html\n";
            $headers .= $additional_headers . "\n";

          
        $sent = wp_mail( $mail, 'Inoffset - '.$title, $body, $headers, $attachments=null );
        echo 'Kết quả mail cho '.$mail; 
        var_dump($sent); 
        
    }
    ?>
    <form  method="post" action="" enctype="multipart/form-data" class="sher-form">
        Email: <input type="text" name="arrEmail" /><br/>
        Name: <input type="text" name="txtName" /><br/><br/>
        Title: <input type="text" name="txtTitle" value="<?php echo get_option('xsmail_title');?>" /><br/>
        
        <?php 
    $content = get_option('xsmail_string','');
    $content = (html_entity_decode(stripcslashes($content)));
    //$content = str_replace('&quot;', '', $content);
    wp_editor($content, 'smailContent', $settings = array() ); ?> <br/>
        <input type="submit" name="btnSendSmail" />
    </form>
<?php
}

