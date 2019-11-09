<?php
// timkiem


?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    
    <title>Danh bạ</title>
</head>
<body >
<nav class="navbar navbar-expand-md navbar-light">
    
    <div class="collapse navbar-collapse" id="myNavbar">
      <div class="container-fluid">
        <div class="row">
          <!-- sidebar -->
          <div class="col-xl-2 sidebar fixed-top mt-2">
              <button class="btn btn-link btn-xl text-dark order-1 order-sm-0 " id="sidebarToggle" href="#">
                  <i class="fas fa-bars"></i>
              </button>
              <img src="./contact.png" alt="">
              <a class="navbar-brand mr-1"  style="font-size:22px">Danh bạ</a>

            <div class="mt-4 btn "data-toggle="modal" data-target="#myModal">
              <a href="#" class="btn btn-light search-button "data-toggle="modal" data-target="#addContact">
                <span  aria-hidden="true"><svg width="36" height="36" viewBox="0 0 36 36"><path fill="#34A853" d="M16 16v14h4V20z"></path><path fill="#4285F4" d="M30 16H20l-4 4h14z"></path><path fill="#FBBC05" d="M6 16v4h10l4-4z"></path><path fill="#EA4335" d="M20 16V6h-4v14z"></path><path fill="none" d="M0 0h36v36H0z"></path></svg></span>
                <span >Tạo liên hệ</span>
              </a>
              <!-- <button class="btn btn-light"> <i class="fas fa-plus-circle"></i>Tạo liên hệ</button> -->
            </div>
           
            <ul class="navbar-nav flex-column mt-3 " style="font-size:14px">
              <li class="nav-item mb-1"> <a href="#" class="nav-link current"> <i class="far fa-user mr-3"></i></i>Danh bạ</a></li>
              
              <li class="nav-item mb-1  "> <a href="#" class="nav-link  sidebar-link"> <i class="fas fa-history mr-3"></i>Thường xuyên liên hệ</a></li>
              <li class="nav-item mb-1 bottom-border "> <a href="#" class="nav-link sidebar-link mb-2"> <i class="fas fa-copy mr-3"></i>Liên hệ trùng lặp</a></li>
              
              <li class="nav-item mb-1  mt-2"> <a href="#" class="nav-link sidebar-link"> <i class="fas fa-chevron-up mr-3"></i></i>Nhãn</a></li>
              <li class="nav-item "> <a href="#" class="nav-link sidebar-link"data-toggle="modal" data-target="#addNhan"> <i class="fas fa-plus-circle mr-3"></i>Tạo nhãn</a></li>
  
          </ul>
        </div>
        <!-- end of xl-2 -->
        <!-- end of sidebar -->
        <!-- top nav  search-->
        <div class=" col-lg-9 ml-auto fixed-top py-2 top-navbar">
          <div class="row align-items-center">
            <div class="col-md-8  bg-light">
              <form method="get">
                <div class="input-group">
                <button type="button"name="ok" value="search"class="btn btn-light search-button "><i class="fas fa-search "></i></button>
                  <input type="text"name="search"class="form-control search-input" placeholder="Search..."> 
                </div>
              </form>
              
            </div>
            
          </div>
        </div>
       
        <!-- end top-nav -->
       
    </div>
 </nav>
  <!-- table -->
  
<!-- xử lý dữ liệu -->
<?php 
include_once("model/danhsach.php");
$lsDs=Danhsach::getListFromDB();

?>
<section>
    <div class="container-fluid ">
      <div class="row mt-5" >
        <div class="col-xl-9 ml-auto">
              <table class="table" >
                <thead>
                  <tr >
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                  </tr>
                </thead>
                <tbody>
                <?php
			        for ($i = 0; $i < count($lsDs); $i++) { ?>
				<tr class="sidebar-link">
					<td><?php echo $lsDs[$i]->ten ?></td>
					<td><?php echo $lsDs[$i]->email ?></td>
					<td><?php echo $lsDs[$i]->sdt ?></td>
				</tr>
                    <?php } ?>
                </tbody>
              </table>
        </div>
        </div>
    </div>
  </section>
  <!-- end of table -->
  
  <!-- Tao liên hệ -->
  
  <div class="modal fade" id="addContact" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Tạo địa chỉ liên hệ mới</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">
					<div class="form-group ">
						<label for="from">Tên</label>
						<input type="text" class="form-control" name="title" placeholder="Tên">
					</div>
					
					<div class="form-group">
						<label for="class">Email</label>
						<input type="text" class="form-control" name="author" placeholder="email">
					</div>
					<div class="form-group">
						<label for="class">Số điện thoại</label>
						<input type="text" class="form-control" name="author" placeholder="Số điện thoại">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light text-primary" data-dismiss="modal">Hủy</button>
						<button type="submit" class="btn btn-light" name="add">Lưu</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
  <!-- end of tao lien he -->
  <!-- tạo nhãn -->
  <!-- end of tao nhan -->
  </body>
</html>
    


