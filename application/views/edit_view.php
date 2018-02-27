<html lang="en"><head>
 
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Font-->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head> 
<body>
  
<!--NAV -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #336666;">
<a class="navbar-brand" href="#"><img src="http://angsila.cs.buu.ac.th/~58160585\_img\Logo.png" width="30" height="30" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail"> </a>
<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
 <div class="collapse navbar-collapse" id="navbarsExampleDefault">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url('index.php/home_controller') ?>">หน้าแรก<span class="sr-only">(current)</span></a>
    </li>
   
  </ul>
  
    <button class="btn btn-outline-success my-2 my-sm-0"><a href="<?php echo base_url('index.php/login_controller') ?>">ลงชื่อออก</a></button>
</div>
</nav>
<!--END NAV -->   
<!--Css-->
<!--Font-->
<style>
.css-selector {
  font-family: 'Kanit', sans-serif;
  font-family: 'Source Sans Pro', sans-serif;
}
/*<!--End Font-->*/

/*<!--ใช้จัดหน้า--> */ 
  .template{
  margin-top: 60px;
}

.templateMake{
  margin-top: 0px;
  margin-bottom:60px;
}
/*<!--จบ ใช้จัดหน้า--> */

/*<!--ใช้จัดหน้า sidebar--> */  
 .template-fix{
  height: 100%;
    position: fixed;
    z-index: 1;
    margin-top: 52px;
    top: 0;
    left: 0;
    background-color:#336666;  
}
/*<!--จบ ใช้จัดหน้า sidebar--> */
.scroll {
    width: auto;
    height: 90%;
    overflow: scroll;
}

  </style>
<!--End Css-->

<!--STRAT PROJECT-->
<div class="container-fluid">
  <div class="row">  <!--Menu NAV Sidebar-->
  <nav class="col-2 sidebar template-fix">

    <div id="accordion" role="tablist">
      <div class="card" style="margin-bottom: 5px; padding-top: 10px">
          <h5 class="mb-0">
              <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_Buy_Product" style=" text-decoration:none;  font-family: 'Kanit', sans-serif; color: #8B4513">
                <img src="http://angsila.cs.buu.ac.th/~58160585\_img\Shop.png" style="width: 50px;height:50px ">ซื้อ
              </a>
          </h5>
      </div>
      <div class="card " style="margin-bottom: 5px">
          <h5 class="mb-0">
            <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/SellProduct" style="text-decoration:none;  font-family: 'Kanit', sans-serif; color: #8B4513">
            <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Sell.png"> ขาย
            </a>
          </h5>
      </div>

      <div class="card" style="margin-bottom: 5px">
          <h5 class="mb-0">
            <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_New_Suplier" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
              <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\supplier.png">ผู้ประกอบการ
            </a>
          </h5>
      </div>

      <div class="card" style="margin-bottom: 5px">
        <h5 class="mb-0">
          <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/ShowV_customer" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
        <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\customer.png">ลูกค้า
          </a>
        </h5>
      </div>

      <div class="card" style="margin-bottom: 5px">
        <h5 class="mb-0">
          <a href="personaltest.html" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
            <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Employeedata.png">พนักงาน
          </a>
        </h5>
      </div>

      <div class="card" style="margin-bottom: 5px">
        <h5 class="mb-0">
          <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_RE_Mat" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
            <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Materials.png">เบิกวัสดุ
          </a>
        </h5>
      </div>

      <div class="card" style="margin-bottom: 5px">
        <h5 class="mb-0">
          <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_Product" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
              <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Stock.png">คลัง
          </a>
        </h5>
      </div>
      <!--
      <div class="card" style="margin-bottom: 5px">
          <h5 class="mb-0">
            <a  href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/main_period_Sent_recive" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
            <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Period_Material.png">ค่างวดสินค้า
            </a>
          </h5>
      </div>

       <div class="card" style="margin-bottom: 5px">
          <h5 class="mb-0">
            <a  href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/main_period" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
            <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Period.png">ค่างวดเงิน
            </a>
          </h5>
      </div>
    -->

      <div class="card" style="margin-bottom: 100%">
        <h5 class="mb-0">
          <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/ShowV_His" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
            <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\History.png">ประวัติ
          </a>
        </h5>
      </div>

    </div>
  </nav>
<!--End NAV Sidebar-->  <!--แก้ไขข้อมูลพนักงาน ทั้งหมด-->
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3 template" role="main">
     

      <!--เมนูพนักงาน-->
        <div class="card " align="center" style="margin-bottom: 5px;font-family: 'Kanit', sans-serif; background-color: #708090">
               <br>
           <h3 style="color:#FFF5EE" align="center">แก้ไขข้อมูลพนักงาน</h3>
                </div>
      <!--จบ  เมนูพนักงาน-->
      
      <!--เลือกเมนู-->
        <div class="tab-content" id="nav-tabContent">
        
          <!--เลือกพนักงาน-->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <hr>
             
              <!--ฟรอมแก้ไขข้อมูลพนักงาน--> 
                    <div class="card card-body" style="background: #808080">
                      <hr>
                           <form action="index.php/edit_controller" method="POST">
                           <?php if($data_personal != null) :?>
                            <div class="form-row">
                        <div class="col-md-5">
                            <label for="validationServer01">ชื่อ</label>
                            <input type="text" class="form-control is-invalid" id="validationServer01" name="PER_FNAME" placeholder="First name" required="" value="<?php echo $data_personal[0]['PER_FNAME']?>">

                            <div class="invalid-feedback">
                              Please provide a valid First name.</div>
                          </div>
                        
                            <div class="col-md-5">
                            <label for="validationServer02">นามสกุล</label>
                            <input type="text" class="form-control is-invalid" id="validationServer02" name="PER_LNAME" placeholder="Last name" required="">
                            <div class="invalid-feedback">
                             Please provide a valid Last name.</div>
                            </div>
                            
                            <div class="col-md-3">
                            <label for="validationServer03 ">รหัสบัตรประชาชน</label>
                            <input type="text" class="form-control is-invalid" id="validationServer03" name="PER_ID" placeholder="ID card number" required="">
                            <div class="invalid-feedback">
                             Please provide a valid ID card number.</div>
                            </div>

                           <div class="col-md-2">
                            <label for="validationServer05">เพศ</label>
                            <input type="text"  class="form-control is-invalid" id="validationServer05" name="PER_SEX" placeholder="" required="">
                            <div class="invalid-feedback">
                            Please provide a valid Sex.</div>
                            </div>

                             <div class="col-md-2">
                            <label for="validationServer06">อายุ</label>
                            <input type="text" class="form-control is-invalid" id="validationServer06" name="PER_AGE" placeholder="Age" required="">
                            <div class="invalid-feedback">
                              Please provide a valid Age.</div>
                            </div>

                            <div class="col-md-3">
                            <label for="validationServer04">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control is-invalid" id="validationServer04" name="PER_TEL" placeholder="Number" required="">
                            <div class="invalid-feedback"></div>
                          </div>

                          <div class="col-md-5">
                            <label for="validationServer07">ที่อยู่</label>
                            <input type="text" class="form-control is-invalid" id="validationServer07" name="PER_ADDRESS" placeholder="Address" required="">
                            <div class="invalid-feedback">
                              Please provide a valid add.</div>
                            </div>
                          

                          <div class="col-md-3">
                            <label for="validationServer06">วันเกิด</label>
                            <input type="date" class="form-control is-invalid" id="validationServer06" name="PER_BIRTH" placeholder="date" required="">
                            <div class="invalid-feedback">
                              Please provide a valid Birthday.</div>
                            </div>


                           <div class="col-md-4">
                            <label for="validationServer06">E-MAIL</label>
                            <input type="text" class="form-control is-invalid" id="validationServer06" name="PER_EMAIL" placeholder="E-Mail" required="">
                            <div class="invalid-feedback"></div>
                            </div>

                          <div class="col-md-2">
                            <label for="validationServer06">สัญชาติ</label>
                            <input type="text" class="form-control is-invalid" id="validationServer06" name="PER_NATIONALITY" placeholder="" required="">
                            <div class="invalid-feedback"></div>
                            </div>
                        
                          <div class="col-md-2">
                            <label for="validationServer06">เชื้อชาติ</label>
                            <input type="text" class="form-control is-invalid" id="validationServer06" name="PER_RELIGION"  required="">
                            <div class="invalid-feedback"></div>
                            </div>

                          <div class="col-md-5">
                            <label for="validationServer06">สถานศึกษา</label>
                            <input type="text" class="form-control is-invalid" id="validationServer06" name="PER_SCHOOL"  required="">
                            <div class="invalid-feedback"></div>
                            </div>

                        <div class="col-md-5">
                            <label for="validationServer06">สาขาวิชา</label>
                            <input type="text" class="form-control is-invalid" id="validationServer06" name="PER_MAJOR" required="">
                            <div class="invalid-feedback"></div>
                            </div>

                          <div class="col-md-2">
                            <label for="validationServer06">เกรดเฉลี่ย</label>
                            <input type="text" class="form-control is-invalid" id="validationServer06" name="PER_GPA"  required="">
                            <div class="invalid-feedback"></div>
                            </div>

                          <div class="col-md-3">
                            <label for="validationServer06">เงินเดือน</label>
                            <input type="Number" class="form-control is-invalid" id="validationServer06" name="PER_SALARY" required="">
                            <div class="invalid-feedback"></div>
                            </div>

                          <div class="col-md-3">
                            <label for="validationServer06">เลขที่บัญชี</label>
                            <input type="text" class="form-control is-invalid" id="validationServer06" name="PER_MAJOR" required="">
                            <div class="invalid-feedback"></div>
                            </div>
                           
                           </div>
                           <input type="hidden" name="id" id="id" value="">
                           <br>
                           </br>
                        <button class="btn btn-primary btn-lg" type="submit">บันทึกการแก้ไขข้อมูล</button>
                        <?php endif ?>
                      </form>                      
                     </div>
                 
              <!--จบฟรอมแก้ไขข้อมูลพนักงาน-->
            </div>
          <!--จบ เลือกพนักงาน-->
        </div>
      <!--จบเลือกเมนู-->

    </main>
    
  <!--จบ ข้อมูลพนักงาน ทั้งหมด-->
      
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <!--End jQuery first, then Popper.js, then Bootstrap JS -->


</div></div></body></html>