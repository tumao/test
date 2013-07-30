<?php get_header(); ?>

<?php 
		global $wpdb ;
		$tt = $wpdb ->get_results("select `writing` from wp_writing");
		$pic = $wpdb ->get_results("select `picname` from wp_image");
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$arr = array(
				'username' => $_POST['uname'],
				'phone' => $_POST['phone'],
				'company' => $_POST['companyname'],
				'email' => $_POST['email'],
				);	
		
			$wpdb ->insert('wp_user',$arr);
		}
	 ?>	

	<div id="main">
		<div id="content">			
			<!-- <div>	
				<img src="<?php bloginfo('template_url'); ?>/images/sliderbar.png">
			</div> -->
	<div class="banner">
		<!-- <ul id="big_img" style="list-style-type:none; margin-top:-15px;"> -->
		<ul id="big_img" style="list-style-type:none;" >
	        <li><a href=""><img style="height:286px; width:950px; border:none;" src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[18]->picname; ?>"/></a></li>
	        <li><a href=""><img style="height:286px; width:950px; border:none;" src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[19]->picname; ?>"/></a></li>
	        <li><a href=""><img style="height:286px; width:950px; border:none;" src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[20]->picname; ?>"/></a></li>
	        
          
    	</ul>
              <div id="contr">
                  <!-- <ul id="contr_ul" style="margin-top:-72px; "> -->
                  <ul id="contr_ul">
                  </ul>
              </div>
         </div>
        
         <script>
         qh1('big_img','li','contr_ul','li');

         creat_interval(); 
         </script>


			<!-- <div class="col1" style="margin-top:-70px;"> -->
			<div class="col1" style="overflow:hidden;">
				<div class="col11">
					<div class="chartype"> 
						<span><?php echo $tt[0]->writing; ?></span><br/><?php echo $tt[1]->writing; ?> 
					</div>
					
				</div>
				<div class="pic"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[0]->picname; ?>"></div>
				<div class="blank"></div>
			</div>
			<div class="chat">
				<div class="chat_pic"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[1]->picname; ?>"></div>
				<div class="chat_char">
					<div class="chat_charstyle">
						<span><?php echo $tt[2]->writing; ?><br/><?php echo $tt[3]->writing; ?><br/><?php echo $tt[4]->writing; ?><br/><?php echo $tt[5]->writing; ?></span>
					</div>
				</div>				
			</div>
			<div class="advt">
				<div class="cols1"> 
					<div class="chartype">
						<span><?php echo $tt[6]->writing; ?></span><br/><?php echo $tt[7]->writing; ?>
					</div>
				</div>
				<div class="advtcols2">
					<div class="advtcols2sty">
						<span><?php echo $tt[8]->writing; ?><br/><?php echo $tt[9]->writing; ?><br/><?php echo $tt[10]->writing; ?>
						</span>
					</div>
				</div>
			</div>
			<div class="midpic">
				<div class="midpiccols1"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[2]->picname; ?>"></div>
			</div>
			<div class="lamp">
				<div class="lampcols1"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[3]->picname; ?>"></div>
				<div class="lampcols2">
					<div class="lampcols2sty1">
						<span><?php echo $tt[11]->writing; ?></span><br/>
						<span class="why"><?php echo $tt[12]->writing; ?></span><br/>
						<span><?php echo $tt[13]->writing; ?></span><br/>
						<span class="why"><?php echo $tt[14]->writing; ?></span><br/>
						<span><?php echo $tt[15]->writing; ?></span><br/>
						<span class="why"><?php echo $tt[16]->writing; ?></span><br/>
						<span><?php echo $tt[17]->writing; ?></span><br/>
						<span class="why"><?php echo $tt[18]->writing; ?></span><br/>
						<span><?php echo $tt[19]->writing; ?></span><br/>
						<span class="why"><?php echo $tt[20]->writing; ?></span><br/>
						<!-- <span><?php echo $tt[21]->writing; ?></span> -->
					</div>
					<div class="lampcols2sty2">
						<span><?php echo $tt[21]->writing; ?></span><br/>
						<span><?php echo $tt[22]->writing; ?></span>
					</div>
				</div>
			</div>
			<div class="service">
				<div>
					<div class="servicecols1">
						<span><?php echo $tt[23]->writing; ?></span><br/>SERVICES
					</div>
				</div>
				<div class="servicecols2">
					<div> 
						<span><?php echo $tt[25]->writing; ?></span><br/><?php echo $tt[26]->writing; ?>
					</div>
				</div>
			</div>
			<div class="serveflow" >
				<div class="servecols1"> 
					<div>
						<span><?php echo $tt[27]->writing; ?></span> <span>|</span> 
						<span><?php echo $tt[28]->writing; ?></span> <span>|</span> 
						<span><?php echo $tt[29]->writing; ?></span> <span>|</span> 
						<span><?php echo $tt[30]->writing; ?></span>
					</div>
				</div>
				<div class="servercols2">
					<div>
						<div class="flow"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[5]->picname; ?>" /><div>帮助传统品牌快速入驻天猫商城</div>
						</div>
						<div class="flow"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[6]->picname; ?>" /><div>专业级全店托管团队,正规tp服务</div>
						</div>
						<div class="flow"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[7]->picname; ?>" /><div>五年直通车经验，致力效果营销最大化</div>
						</div>
						<div class="flow"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[8]->picname; ?>" /><div>资深网店设计师指导,4A广告水平</div>
						</div>
						
					</div>
				</div>
				<div class="servecols1">
					<div>
						<span><?php echo $tt[31]->writing; ?></span> <span>|</span> 
						<span><?php echo $tt[32]->writing; ?></span> <span>|</span> 
						<span><?php echo $tt[33]->writing; ?></span> <span>|</span> 
						<span><?php echo $tt[34]->writing; ?></span>
					</div>
				</div>
				<div class="servercols2">
					<div>
						<div class="flow"><img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[9]->picname; ?>" />
								<div>帮助线下品牌,快速启动电子商务</div>
						</div>
						<div class="flow">
								<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[10]->picname; ?>" />
								<div>7*16小时客服在线解决网店客服问题</div>								
						</div>
						<div class="flow">
							<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[11]->picname; ?>" />
							<div>整合淘宝站内外资源,将推广覆盖全网</div>
						</div>
						<div class="flow">
							<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[12]->picname; ?>" />
							<div>专业市场分析及研究,快速打造爆款</div>
						</div>
					</div>	
				</div>
			</div>
			<div class= "case">
				<div> 
					<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[4]->picname; ?>"> 
				</div>
			</div>
			<div >
				<div class="yihaosushe">
					<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[13]->picname; ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[14]->picname; ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[15]->picname; ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[16]->picname; ?>">
					<img src="<?php bloginfo('template_url'); ?>/images/<?php echo $pic[17]->picname; ?>">
				</div>
			</div>
			<div>
				<div class="signup">
					<div class="signupcols1">
						<span>在线报名</span><br/>ONLINE REGISTRATION<br/>
						<span class="colsspan">不做与企业利润增长无关的事</span>
					</div>
					<div class="signupcols2">
						<span>Add.中国 郑州郑东新区商都世贸中心E座804</span><br/>
						<span>Tel.86-(0)371 6688 1345</span><br/>
						<span>E-mail.whjbit@126.com</span>
					</div>
				</div>
				<div style="float:left; background-color:#D7E3EF; width:410px; height:260px;"><form action="" method="post" style="padding-top:60px; padding-left:40px;">
						姓名 <input type="input" id="uname" name="uname"/><br/>
						手机 <input type="input" id="phone" name="phone" /><br/>
						公司 <input type="input" id="companyname" name="companyname" /><br/>
						邮箱 <input type="input" id="email" name="email" /><br/>
							<button style="float:right; margin-right:15px; margin-top:40px;">重置</button>
							<input type="submit" style="float:right; margin-top:40px;"" value="提交" id="submit">							
					</form></div>
			</div>
			<div style="clear=both;"></div>
		</div>
		
	</div>
	<?php get_footer(); ?>
	
	 