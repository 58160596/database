
<!DOCTYPE html>
<html lang="en">
<head>
 
      <!-- Required meta tags -->
      <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Font-->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
</head> 
<body>
  
<!--NAV -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #000000;">
      <a class="navbar-brand"  href="show_admin.php"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        
          <button class="btn "><a href="<?php echo base_url('index.php/login_controller') ?>" >ลงชื่อออก</a></button>
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
  <div class="row">  


<main class="col-md-12" style="margin-top: 55px; background-color: #000000;padding-bottom: 300px; width: 100%; height: 100%;">
          <h1 style="text-align: center;color: #fff">HOME</h1>
           <hr>
        <div style="margin-left: 50px;">
          <section class="row text-center">
            <div class="col-md-11">

                <div class="row" style="margin-left: 200px">
                <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_Buy_Product" style="text-decoration:none;margin-right: 30px">
                  <img src="http://angsila.cs.buu.ac.th/~58160585\_img\Shop.png" style="width: 80px;height: 80px;"> <h3 style="color: #fff">ซื้อ</h3>
                </a>

                <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/SellProduct" style="text-decoration:none;">
                  <img style="width: 80px;height: 80px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Sell.png"> <h3 style="color: #fff">ขาย</h3>
                </a>
    
                <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_New_Suplier" style="text-decoration:none; margin-left: 30px">
                  <img style="width: 80px;height: 80px" src="http://angsila.cs.buu.ac.th/~58160585\_img\supplier.png"><h3 style="color: #fff">ผู้ประกอบการ</h3>
                </a>
  
                <a href="<?php echo base_url('index.php/customer_controller') ?>" style="text-decoration:none;margin-left: 30px">
                  <img style="width: 80px;height: 80px" src="http://angsila.cs.buu.ac.th/~58160585\_img\customer.png"><h3 style="color: #fff">ลูกค้า</h3>
                </a>
                
                <a href="<?php echo base_url('index.php/personal_controller') ?>" style="text-decoration:none; margin-left: 30px">
                  <img style="width: 80px;height: 80px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Employeedata.png"><h3 style="color: #fff">พนักงาน</h3>
                </a>

                <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_Product" style="text-decoration:none; margin-left: 30px">
                  <img style="width: 110px;height: 80px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Stock.png"><h3 style="color: #fff">คลังสินค้า</h3>
                </a>
             <!--   
                <a  href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_Period_Recive" style="text-decoration:none;margin-left: 20px">
                  <img style="width: 80px;height: 80px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Period.png"><h3 style="color: #fff">ค่างวดสินค้า</h3>
                </a>
    
                <a  href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/showV_Period_Shop_Product" style="text-decoration:none; margin-left: 20px">
                  <img style="width: 80px;height: 80px" src="http://angsila.cs.buu.ac.th/~58160585\_img\Period.png"><h3 style="color: #fff"> ค่างวดเงิน</h3>
                </a>
                   -->     
                <a href="http://angsila.cs.buu.ac.th/~58160585/pro/index.php/C_home/ShowV_His" style="text-decoration:none;margin-left: 30px">
                  <img style="width: 80px;height: 80px" src="http://angsila.cs.buu.ac.th/~58160585\_img\History.png"><h3 style="color: #fff">ประวัติซื้อขาย</h3>
                </a>
                </div>
          </div>

            <div class=" col-md-11"  style="margin-left : 30px">

              <div class=" row" >
                <br>            
              
               <div class="col-md-3"  style=" margin-left : 450px">
                  <br>
     <div style="color: #fff">          
  
                </div>
              </div>
            </div>

            <div class="col-md-11" style="margin-left : 30px;margin-bottom: 65.5px">
                ------------------------------------------------------------------------------------------------------
            </div>


            </div>

          </section>
        </div>
        </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!--END PROJECT-->


