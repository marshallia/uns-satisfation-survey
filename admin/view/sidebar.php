	<!--======================== Fixed Navbar ========================== -->
	<div id="head-nav" class="wrapper">
		<div class="main-header">
			<div class="main-header">
    <a href="#" class="logo">
      <span class="logo-lg"><b>KEMENDIKBUD</b></span>
    </a>
			</div>
			<div class="navbar navbar-static-top">
				<ul class="nav navbar-nav">
			<!--		<li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sign Out</a></li>-->
				</ul>     
			</div><!--/.nav-collapse -->
		</div>
	</div>
  

	<div id="cl-wrapper">
		 <aside class="main-sidebar" style="position: fixed;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
         <!-- <img src="logo.png" class="img-circle" alt="User Image" width="100px">-->
<br>
<br>
          
        </div>
        <div class="pull-left info">
          <h6 class="user-name" style="color: #ffffff;">asu                      
                                        <h4> asdasdasd<?php echo $row['nama_organisasi']; ?></h4>

                                        </h6>
          
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <?php include 'view/menu.php' ;?>
    <!-- /.sidebar -->
  </aside>