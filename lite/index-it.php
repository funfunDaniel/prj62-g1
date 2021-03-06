<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="./css/stylesheet1.css">
    <link rel="stylesheet" href="./css/stylesheet2.css">
	
	<script src="showAll.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <?php  include('header.php') ?>
	

</head>

<body class="fix-header fix-sidebar card-no-border logo-center">


    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>


    <?php  include('navbar.php') ?>
	

    <div class="page-wrapper">
      <div class="card-block">


          <div class="row">
            <div class="col-lg-12">
              <div class="card ">
                <div class="card-block ">
                  <div class="card">

                    <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">

                      <ol class="carousel-indicators" id="carouselCount">

                      </ol>

                    <div id="imageHeaderSlide" class="carousel-inner card-img-top card-img-bottom text-center">
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-xlg-3 col-md-5">
            <div class="card">
              <img class="card-img-top" src="../images/cloud.jpg" alt="Card image cap">
                <div class="card-body little-logo text-center">                  
                    <div class="pro-img"><img src="../images/logo-header.gif" alt="user"></div>
                      <h3 class="m-b-0">สำนักวิชาเทคโนโลยีสังคม</h3> 
					  
			<!-- Left Menu Bar-->        
            <?php include 'index-left-bar.php';?>
			
                </div>
            </div>
          </div>
		  
		  <div class="col-lg-9 col-md-7">
            <div class="card">
              <div class="card-block">
		  
		  <?php
        if(isset($_REQUEST["view"])){
                if($_REQUEST["view"] == "gp"){
                    include 'view-grad-pro.php';
                }else if($_REQUEST["view"] == "cp"){
                    include 'view-cou-pro-form.php';
                }else if($_REQUEST["view"] == "raw"){
                    include 'view-rec-aw-wor-form.php';
                }else if($_REQUEST["view"] == "inw"){
                    include 'view-ino-wor-form.php';
                }else if($_REQUEST["view"] == "mj"){
                    include 'view-maj-wor-form.php';
                }else if($_REQUEST["view"] == "std"){
                    include 'view-std-form.php';
                }else if($_REQUEST["view"] == "tp"){
                    include 'view-the-pro-form.php';
                }else if($_REQUEST["view"] == "ste"){
                    include 'view-ste-form.php';
                }else if($_REQUEST["view"] == "the"){
                    include 'view-the-form.php';
                }else if($_REQUEST["view"] == "ra"){
                    include 'view-res-art-form.php';
                }else if($_REQUEST["view"] == "er"){
                    include 'view-ext-res-form.php';
                }else if($_REQUEST["view"] == "sc"){
                    include 'view-sco-form.php';
                }else if($_REQUEST["view"] == "act"){
                    include 'view-act-form.php';
                }else if($_REQUEST["view"] == "df"){
                    include 'view-doc-form.php';
				}else if($_REQUEST["view"] == "df2"){
                    include 'view-doc2-form.php';
				}else if($_REQUEST["view"] == "df3"){
                    include 'view-doc3-form.php';
				}else if($_REQUEST["view"] == "df4"){
                    include 'view-doc4-form.php';
				}else if($_REQUEST["view"] == "df5"){
                    include 'view-doc5-form.php';	
                }else if($_REQUEST["view"] == "min"){
                    include 'view-min-form.php';
				}else if($_REQUEST["view"] == "met"){
                    include 'view-met-form.php';
				}else if($_REQUEST["view"] == "oth"){
                    include 'view-other-form.php';
                }else if($_REQUEST["view"] == "pro"){
                    include 'view-pro-form.php';
                }else if($_REQUEST["view"] == "hofs"){
                    include 'view-hofs-form.php';
                }else if($_REQUEST["view"] == "hofp"){
                    include 'view-hofp-form.php';
				}else if($_REQUEST["view"] == "ww"){
					 include 'view-Request-form.php';
                }else if($_REQUEST["view"] == "wwww"){
                    include 'view-Check-request.php';
                }
            }else if(isset($_REQUEST["det"])){
                include 'det-form.php';
				;
            }else{
                echo '	
          

                <div class="card-body">
                  <h4 class="card-title text-center">เกี่ยวกับสาขาวิชา</h4>
                  <h6 class="card-subtitle text-center">ปรัชญาและวัตุประสงค์</h6>
               </div>

               <div class="comment-widgets">

                <div class="d-flex flex-row comment-row">

                  <div class="p-2">
                    <span class="round">
                      <img src="../images/philosophy.png" alt="user" width="50">
                    </span>
                  </div>

                  <div class="comment-text ">
                   <h5>ปรัชญา</h5>
                    <p id="philosophy"></p>
                  </div>

                </div>

                <div class="d-flex flex-row comment-row ">

                  <div class="p-2">
                    <span class="round">
                      <img src="../images/objective.png" alt="user" width="50">
                    </span>
                  </div>

                  <div class="comment-text">
                    <h5>วัตถุประสงค์</h5>
                      <p id="purpose"></p>
                  </div>
				  

                </div> ';
			}
			?>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-block">
          <div class="row el-element-overlay">

            <div class="col-md-12">
              <h2 class="card-title text-center"><i class="mdi mdi-school"></i> ระดับการศึกษา</h2>
              <h6 class="card-subtitle m-b-20 text-muted text-center">o o o</h6>
            </div>

            <div class="col-lg-4 col-xlg-4 col-md-12 col-sm-12">
              <div class="card">
                <div class="el-card-item">
                  <div class="el-card-avatar el-overlay-1">
                    <img id="imageBachelor"   alt="user">

                    <div class="el-overlay">
                      <ul class="el-info">
                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="https://it2.sut.ac.th/prj60_g7/it-website/lite/course-bachelor.php">รายละเอียด</a></li>
                      </ul>
                    </div>
                  </div>

                    <div class="el-card-content">
                      <h3 class="box-title">ปริญญาตรี</h3> <small>วิทยาการสารสนเทศบัณฑิต</small><br>
                    </div>

                </div>
              </div>
            </div>

            <div class="col-lg-4 col-xlg-4 col-md-12 col-sm-12">
              <div class="card">
                <div class="el-card-item">
                  <div class="el-card-avatar el-overlay-1">
                    <img id="imageMaster"  alt="user">

                    <div class="el-overlay">
                      <ul class="el-info">
                        <li><a class="btn default btn-outline image-popup-vertical-fit" href="https://it2.sut.ac.th/prj60_g7/it-website/lite/course-master.php">รายละเอียด</a></li>
                      </ul>
                    </div>
                  </div>

                  <div class="el-card-content">
                    <h3 class="box-title">ปริญญาโท</h3> <small>วิทยาการสารสนเทศมหาบัณฑิต</small><br>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-xlg-4 col-md-12 col-sm-12">
              <div class="card">
                <div class="el-card-item">

                  <div class="el-card-avatar el-overlay-1">
                    <img  id="imageDoctor"  alt="user">
                      <div class="el-overlay">
                        <ul class="el-info">
                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="https://it2.sut.ac.th/prj60_g7/it-website/lite/course-doctorate.php">รายละเอียด</a></li>

                        </ul>
                      </div>
                    </div>

                    <div class="el-card-content">
                      <h3 class="box-title">ปริญญาเอก</h3><small>วิทยาการสารสนเทศดุษฎีบัณฑิต</small><br>
                    </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card card-white">
            <div class="card-block">
              <div class="card-body">

                <div class="d-flex">
                  <div class="m-r-20 align-self-center">
                    <h1 class="text-black"><i class="ti-desktop"></i></h1>
                  </div>
                  <div>
                    <h3 class="card-title">Enterprise Software</h3>
                    <h6 class="card-subtitle">ซอฟต์แวร์วิสาหกิจ</h6>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12">
                    <p>กระบวนการในการวิเคราะห์ ออกแบบ และพัฒนาซอฟต์แวร์ ด้วยภาษาการโปรแกรมรูปแบบต่าง ๆ
                       ทั้งที่เป็นโปรแกรมประยุกต์บนเว็บ และบนอุปกรณ์เคลื่อนที่</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
                  <!-- Column -->
                  <!-- Column -->
                  <div class="card  card-white">
                      <div class="card-block">
                      <div class="card-body">
                          <div class="d-flex">
                              <div class="m-r-20 align-self-center">
                                  <h1 class="text-black"><i class="ti-video-camera"></i></h1></div>
                              <div>
                                  <h3 class="card-title">Digital Media</h3>
                                  <h6 class="card-subtitle">นิเทศศาสตร์ดิจิทัล</h6> </div>
                          </div>
                          <div class="row">
                              <div class="col-12">
                                  <p>การคิดสร้างสรรค์ผลงานทางนิเทศศาสตร์แขนงต่าง ๆ ได้แก่ งานโฆษณาการประชาสัมพันธ์ออนไลน์ สื่อกราฟิก สื่อสิ่งพิมพ์ดิจิทัล เว็บไซต์ มัลติมีเดีย และแอนิเมชัน</p>
                              </div>

                          </div>
                      </div>
                  </div>
                </div>


                  <!-- Column -->
              </div>

                          <div class="col-lg-6 col-md-12">
                              <!-- Column -->
                              <div class="card card-white">
                                <div class="card-block">
                                  <div class="card-body">
                                      <div class="d-flex">
                                          <div class="m-r-20 align-self-center">
                                              <h1 class="text-black"><i class="ti-book"></i></h1></div>
                                          <div>
                                              <h3 class="card-title">Information Studies</h3>
                                              <h6 class="card-subtitle">สารสนเทศศึกษา</h6> </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-12">
                                              <p>การจัดการทรัพยากรสารสนเทศ การกำหนด การสร้าง การคัดเลือก การจัดหา การวิเคราะห์  การจัดเก็บ  การบริการ การเผยแพร่และนำส่งสารสนเทศ  </p>
                                          </div>

                                      </div>
                                  </div>
                              </div>
                            </div>
                              <!-- Column -->
                              <!-- Column -->
                              <div class="card  card-white">
                                <div class="card-block">
                                  <div class="card-body">
                                      <div class="d-flex">
                                          <div class="m-r-20 align-self-center">
                                              <h1 class="text-black"><i class="ti-pie-chart"></i></h1></div>
                                          <div>
                                              <h3 class="card-title">Business Intelligence and Data Analytics</h3>
                                              <h6 class="card-subtitle">ธุรกิจอัจฉริยะและการวิเคราะห์ข้อมูล</h6> </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-12">
                                          <p>กระบวนการในการวิเคราะห์ข้อมูลทางธุรกิจด้วยเทคนิคและโปรแกรมคอมพิวเตอร์ เพื่อใช้ประกอบการดำเนินกิจการ และเพิ่มประสิทธิภาพให้องค์การี่</p>


                                        </div>

                                      </div>
                                  </div>
                              </div>
                            </div>
                              <!-- Column -->
                          </div>
                      </div>

      <div class="card">
        <div class="card-block ">

          <div class="row">
            <div class="col-md-12">
              <h2 class="card-title text-center">ข่าวสาร</h2>
              <h6 class="card-subtitle m-b-20 text-muted text-center">o o o</h6>
            </div>
            <div class="col-lg-6">
              <div class="card-block ">
                <h4 class="card-title text-center">ปริญญาตรี</h4>

                <div class="card">
                  <div class="card-block ">
                  <div id="carouselBachelor" class="carousel slide " data-ride="carousel">

                    <ol class="carousel-indicators" id="carouselInfoBachelor">

                    </ol>

                    <div id="imageInfoBachelorSlide" class="carousel-inner card-img-top card-img-bottom text-center">

                    </div>

                    <a class="carousel-control-prev" href="#carouselBachelor" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" href="#carouselBachelor" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>

                  </div>
                </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="card-block ">
                <h4 class="card-title text-center">บัณฑิตศึกษา</h4>

                <div class="card">
                  <div class="card-block ">
                  <div id="carouselGraduation" class="carousel slide " data-ride="carousel">
                    <ol class="carousel-indicators" id="carouselInfoGraduate">

                    </ol>

                  <div id="imageInfoGraduationSlide" class="carousel-inner card-img-top card-img-bottom text-center">

                  </div>

                  <a class="carousel-control-prev" href="#carouselGraduation" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>

                  <a class="carousel-control-next" href="#carouselGraduation" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
    <?php include('footer.php')?>
    <?php include('import-javascript.php')?>
    <script src="js/index.js"></script>
</body>

</html>

