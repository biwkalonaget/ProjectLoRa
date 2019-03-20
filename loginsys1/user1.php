<?php
	session_start();
	if($_SESSION['u_id'] == "")
	{
    echo "<script>alert('ชื่อผู้ใช้หรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง');window.location = './login.php';</script>";
		exit();
	}



?>

<?php
include('connect_db.php');
include('./inc/head.php');	
?>

<!DOCTYPE html>

<html>
<head>
<title>OTOP Thailand</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<style>
    .font{
  font-family: 'Kanit', sans-serif;
}
</style>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul>
        <li><i class="fa fa-phone"></i>0945350214</li>
        <li><i class="fa fa-envelope-o"></i> threerawat.pa.58@ubu.ac.th</li>	
      </ul>
    </div>
    <div class="fl_right">
				
      <ul>
        <li></li>
        	 

        	   <li><a href="#" onClick="javascript:window.open('./inc/addPro.php' , 'AddPro','menuber=no,toolbar=no,location=no,scrollbars=no, status=no,resizable=no,width=600,height=650,left=650,top=150')">Add Product</a></li>
        	   
        	   <li><a href="./home.php">Logout</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('http://2.bp.blogspot.com/-7c3iwBQfpOQ/UxXovA8vbGI/AAAAAAAAAE4/urQJhqPzP04/s1600/%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%AD%E0%B8%81.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="">Otop Thailand</a></h1>
      </div>

      
      <nav id="mainav" class="fl_right">
       
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="flexslider basicslider">
      <ul class="slides">
      <li>
          <article>
          
            <h3 class="heading">ภาคเหนือ</h3>
            <h3>สินค้ายอดนิยมของภาคเหนือ</h3>
            <footer><a class="btn inverse" href="#" onClick="javascript:window.open('./viewpro.php' , 'viewPro','menuber=no,toolbar=no,location=no,scrollbars=no, status=no,resizable=no,width=1500,height=500,left=210,top=150')">ดูสินค้า</a></footer>

          </article>
        </li>
        <li>
          <article>


            
            <h3 class="heading">ภาคกลาง</h3>
            <h3>สินค้ายอดนิยมของภาคกลาง</h3>
            <footer><a class="btn inverse" href="#" onClick="javascript:window.open('./viewpro2.php' , 'viewPro2','menuber=no,toolbar=no,location=no,scrollbars=no, status=no,resizable=no,width=1500,height=500,left=210,top=150')">ดูสินค้า</a></footer>
          </article>
        </li>
        <li>
          <article>
            
            <h3 class="heading">ภาคอีสาน</h3>
            <h3>สินค้ายอดนิยมของภาคอีสาน</h3>
            <footer><a class="btn inverse" href="#" onClick="javascript:window.open('./viewpro3.php' , 'viewPro3','menuber=no,toolbar=no,location=no,scrollbars=no, status=no,resizable=no,width=1500,height=500,left=210,top=150')">ดูสินค้า</a></footer>
          </article>
        </li>

        <li>
          <article>
            
            <h3 class="heading">ภาคใต้</h3>
            <h3>สินค้ายอดนิยมของภาคใต้</h3>
            <footer><a class="btn inverse" href="#" onClick="javascript:window.open('./viewpro4.php' , 'viewPro4','menuber=no,toolbar=no,location=no,scrollbars=no, status=no,resizable=no,width=1500,height=500,left=210,top=150')">ดูสินค้า</a></footer>
          </article>
        </li>


      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3 coloured">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div id="introblocks">
      <ul class="nospace group">
      <li class="one_third first">
          <article>
            <div>
              <h7 class="heading">ตัวอย่างสินค้าจากภาคเหนือ</h7>
              <h6 class="heading">ข้าวแคบ</h6>
              <p>ภาคเหนือ ก็ไม่เบา ช่วงนี้เทรนด์เมนูสะท้อนวัฒนธรรมกำลังมาแรง นายปัณณวัฒน์ นาคมูล ผู้ประสานงานเครือข่ายวัฒนธรรมและภูมิปัญญาท้องถิ่น จ.อุตรดิตถ์ จึงนำพา [&hellip;]</p>
            </div>
            <img src="https://www.thairath.co.th/media/4DQpjUtzLUwmJZZPDev1IbHpeUspQ5DvJcdAhayOXScK.jpg" alt="">
            <footer><a href="https://www.thairath.co.th/content/1049652">รายละเอียดสินค้า</a></footer>
          </article>
        </li>

        <li class="one_third">
          <article>
            <div>
              <h7 class="heading">ตัวอย่างสินค้าจากภาคกลาง</h7>
              <h6 class="heading">ทุเรียนทอด</h6>
              <p>จังหวัดจันทบุรีเป็นจังหวัดที่มีผลผลิตทางด้านผลไม้หลากหลายชนิด และที่ขึ้นชื่อก็คือทุเรียน ซึ่งเรียกได้ว่าเป็นราชาแห่งผลไม้ เพราะมีรสหวานมันกลมกล่อม แต่ถึงแม้จะสามารถผลิตทุเรียนสดได้คุณภาพดี แต่เมื่อถึงฤดูเก็บเกี่ยวปรากฏว่ามีผลผลิตออกมากพร้อมๆกันในจำนวนที่มากเกินไปทำให้ราคาสินค้าตกต่ำ ประกอบกับผลผลิตเมื่อถึงเวลาเก็บเกี่ยวแม้ราคาจะตกต่ำแต่ชาวสวนก็ไม่สามารถทิ้งไว้เพื่อรอราคาที่ดีขึ้นได้ เนื่องจากผลไม้จะสุกขึ้นเรื่อยทำให้ยิ่งเก็บไว้ยิ่งมีแต่จะเสียหายจึงจำเป็นต้องขาย ถึงแม้จะลงทุนลงแรงไปอย่างมากเพื่อรอผลผลิตทั้งปีก็ตาม [&hellip;]</p>
            </div>
            <img src="https://food.mthai.com/app/uploads/2017/05/Fried-Durian.jpg" alt="">
            <footer><a href="https://www.thairath.co.th/content/1049652">รายละเอียดสินค้า</a></footer>
          </article>
        </li>

        <li class="one_third">
          <article>
            <div>
              <h7 class="heading">ตัวอย่างสินค้าจากภาคอีสาน</h7>
              <h6 class="heading">ผ้าไหม</h6>
              <p>หากกล่าวถึงผลิตภัณฑ์ด้านนี้ ขอเริ่มที่ ภาคอีสาน ที่ขึ้นชื่อลือชาคงหนีไม่พ้น “ผ้าไหม” มีทั้งผลิตใช้เองและขายสร้างรายได้แห่งหนึ่ง ที่โดดเด่นมายาวนาน หนี [&hellip;]</p>
            </div>
            <img src="https://www.thairath.co.th/media/4DQpjUtzLUwmJZZPDev1IbHpeUspQ5EAtRkaYzqtqs7Q.jpg" alt="">
            <footer><a href="https://www.thairath.co.th/content/1049652">รายละเอียดสินค้า</a></footer>
          </article>
        </li>
        
        <li class="one_third">
          <article>
            <div>
              <h7 class="heading">ตัวอย่างสินค้าจากภาคใต้</h7>
              <h6 class="heading">หัตถกรรมกะลามะพร้าว</h6>
              <p>คราวนี้ ลงใต้ ไปที่ ศูนย์หัตถกรรมกะลามะพร้าว ชุมชนบ้านหน้าถ้ำ หมู่ 6 ต.ปาดังเบซาร์ อ.สะเดา จ.สงขลา แม้ยุคนี้กระแสแผ่วลงไปจากเมื่อก่อน แต่ยังคงคุณค่าน่[&hellip;]</p>
            </div>
            <img src="https://www.thairath.co.th/media/4DQpjUtzLUwmJZZPDev1IbHpeUspQ5EEdy96viT48hDF.jpg" alt="">
            <footer><a href="https://www.thairath.co.th/content/1049652">รายละเอียดสินค้า</a></footer>
          </article>
        </li>
      </ul>
    </div>
    <p class="center"><a class="btn inverse" href="https://www.thairath.co.th/content/1049652">ดูข้อมูลสินค้าเพิ่มเติม</a></p>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="group">
      <section class="one_half first">
        <h6 class="heading btmspace-50">เว็บไซต์ที่เกี่ยวกับสินค้า OTOP</h6>
        <ul class="nospace">
          <li class="btmspace-30">
            <article>
              <h4 class="nospace"><a href="http://www.thaitambon.com/advsearch?q=%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B9%82%E0%B8%AD%E0%B8%97%E0%B8%AD%E0%B8%9B+5+%E0%B8%94%E0%B8%B2%E0%B8%A7&cat=&prov=&yr=&st=5&ad=DESC&fl=&ps=60&ob=nprice">Thaitambon</a></h4>
              <time class="font-xs" datetime="2018-07-06">Friday, 6<sup>th</sup> April 2018</time>
            </article>
          </li>
          <li class="btmspace-30">
            <article>
              <h4 class="nospace"><a href="http://www.otoptoday.com/wisdom/">Otoptoday</a></h4>
              <time class="font-xs" datetime="2018-07-05">Thursday, 5<sup>th</sup> April 2018</time>
            </article>
          </li>
          <li>
            <article>
              <h4 class="nospace"><a href="https://www.thairath.co.th/tags/%E0%B8%AA%E0%B8%B4%E0%B8%99%E0%B8%84%E0%B9%89%E0%B8%B2%E0%B9%82%E0%B8%AD%E0%B8%97%E0%B8%AD%E0%B8%9B">สินค้าโอทอป</a></h4>
              <time class="font-xs" datetime="2018-07-04">Wednesday, 4<sup>th</sup> April 2018</time>
            </article>
          </li>
        </ul>
      </section>
      <section class="one_half">
        <h6 class="heading btmspace-50">ข่าวสาร</h6>
        <p>จ.อุตรดิตถ์ โชว์ผ้าทอมือ สืบสานภูมิปัญญา เสน่ห์ผืนผ้าไทย!</p>
        <p class="btmspace-30">จังหวัดอุตรดิตถ์ นำผ้าทอมือนับร้อยผืน มูลค่านับล้านบาท จัดนิทรรศการโชว์ความสวยงาม ในงาน "เสน่ห์สตรี เสน่ห์ผืนผ้า ภูมิปัญญาอุตรดิตถ์" พร้อมเสวนาแลกเปลี่ยนความคิดเห็น เพื่อจัดทำยุทธศาสตร์การพัฒนา ผ้าทอจังหวัด</p>
        
      </section>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4 bgded overlay" style="background-image:url('http://2.bp.blogspot.com/-7c3iwBQfpOQ/UxXovA8vbGI/AAAAAAAAAE4/urQJhqPzP04/s1600/%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%88%E0%B8%AD%E0%B8%81.jpg');">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <h3 class="heading">OTOP Thailand</h3>
   
    <ul class="faico clear">
      <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
      <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
      <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
      <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
      <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
      <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>
    </ul>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left"> &copy; 2018 - 5811403613 - Threerawat Panyapo <a href="#"></a></p>
    <p class="fl_right"> <a target="_blank" href="http://www.os-templates.com/" >วิชา Web Programming</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
</body>
</html>