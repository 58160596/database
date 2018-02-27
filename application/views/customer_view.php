<html lang="en"><head>
 
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
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> <style>
  #myInput {
    border-radius: 5px;
   /* background-image: url('/css/searchicon.png'); /* Add a search icon to input */
    background-position: 50px 50px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 200px; /* Full-width */
    height: 38px;
    font-size: 16px; /* Increase font-size */
    padding: 5px 5px 5px 20px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 3px; /* Add some space below the input */
}

#myTable {

    border-collapse: collapse; /* Collapse borders */
    width: 100%; /* Full-width */
    border: 1px solid #ddd; /* Add a grey border */
    font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
    text-align: left; /* Left-align text */
    padding: 12px; /* Add padding */
}

#myTable tr {
    /* Add a bottom border to all table rows */
    border-bottom: 1px solid #ddd; 
}

#myTable tr.header, #myTable tr:hover {
    /* Add a grey background color to the table header and on hover */
    background-color: #f1f1f1;
}

</style>
<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>
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
          <a href="<?php echo base_url('index.php/customer_controller') ?>" style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
        <img style="width: 50px;height: 50px" src="http://angsila.cs.buu.ac.th/~58160585\_img\customer.png">ลูกค้า
          </a>
        </h5>
      </div>

      <div class="card" style="margin-bottom: 5px">
        <h5 class="mb-0">
          <a href="<?php echo base_url('index.php/personal_controller') ?>"style="text-decoration:none; font-family: 'Kanit', sans-serif; color: #8B4513">
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
<!--End NAV Sidebar-->  <!--ประวัติลูกค้าทั้งหมด-->
    <main class="col-sm-9 ml-sm-auto col-md-10 pt-3 template" role="main">
      <h1 style="font-family: 'Kanit', sans-serif; color: #8B4513 ">ลูกค้า</h1>
      <!--เมนูลูกค้า-->
        <!-- <nav class="nav nav-tabs" id="myTab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">
            <h5>ลูกค้า</h5></a>
        </nav> -->
      <!--จบเมนูลูกค้า-->

      <!--ข้อมูลลูกค้า-->
        <div class="tab-content" id="nav-tabContent">

          <!--หน้าต่างข้อมูลลูกค้า-->
            <div class="tab-pane fade show active in" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <hr>

              <div class="card " align="center" style=" background-color: #708090">
                <br>
           <h4 style="font-family: 'Kanit', sans-serif; color:#FFF5EE">ข้อมูลลูกค้า</h4>  
         
         
        </tr>

          
        </table>
              <!--จบ ฟรอมตารางข้อมูลลูกค้า-->

            </div>
          <!--จบ หน้าต่างข้อมูลลูกค้า-->
        </div>
      <!--จบ ข้อมูลลูกค้า-->
      
    </main>
  <!--จบ ประวัติลูกค้าทั้งหมด-->

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  <!--End jQuery first, then Popper.js, then Bootstrap JS-->


</div></div></body></html>