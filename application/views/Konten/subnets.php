<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Top Navigation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/font-awesome/css/font-awesome.min.css">
	 <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>plugins/iCheck/all.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>dist/css/AdminLTE.min.css">
	 <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/');?>dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">

  <header class="main-header">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="#">Dashboard</a>
		</div>
		<ul class="nav navbar-nav">
		  <li><a href="#">Subnets</a></li>
		  <li><a href="#">Coming Soon</a></li>
		</ul>
		   <ul class="nav navbar-nav navbar-right">
				  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
	  </div>
	</nav>
  </header>
	
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Top Navigation
          <small>Example 2.0</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Top Navigation</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
		  <div class="row">
			  <div class="col-lg-10">
				  <div class="box box-danger">
						<!-- /.box-header -->
						<div class="box-body">
						  <table id="dtIPAddress" class="table table-bordered table-striped" style="font-size:10px;">
							<thead>
							<tr>
							<th style="font-size: 9px;">No.
						</th>
						<th style="font-size: 9px;">Area
						</th>
						<th style="font-size: 9px;">Hostname
						</th>
						<th style="font-size: 9px;">Router Name
						</th>
						<th style="font-size: 9px;">Site ID
						</th>
						<th style="font-size: 9px;">Tower Index
						</th>
						<th style="font-size: 9px;">S-VID
						</th>
						<th style="font-size: 9px;">C-VID
						</th>
						<th style="font-size: 9px;">IP Address
						</th>
						<th style="font-size: 9px;">IP Gateway
						</th>
						<th style="font-size: 9px;">Subnet
						</th>
						<th style="font-size: 9px;">S-VID
						</th>
						<th style="font-size: 9px;">C-VID
						</th>
						<th style="font-size: 9px;">IP Address
						</th>
						<th style="font-size: 9px;">IP Gateway
						</th>
						<th style="font-size: 9px;">Subnet
						</th>
                            
							</tr>
							</thead>
						  <tbody id="data_table" name="data_table">
                       
                        
              </tbody>
							
						  </table>
						</div>
						<!-- /.box-body -->
					  </div>
					  <!-- /.box -->
			  </div>

			  <div class="col-lg-2">
			  	<div class="box box-danger">
				  <div class="box-header">
					<h5><b>Setting Searcing</b></h5>	
				  </div>
					<div class="box-body">
						<div class="row">
							<div class="col-lg-12">
								<div>
									 <input type="checkbox" class="check_site_id" name="check_site_id" id="check_site_id"/>
									 <label for="1" style="font-size: 12px; margin-right: 10px;">
										Site Id
									 </label>

									<input type="checkbox" class="check_tower_index" name="check_tower_index" id="check_tower_index"/>
									 <label for="1" style="font-size: 12px;">
										Tower Index
									 </label>
								 </div>
							</div>
						</div>
						<div class="row" style="margin-top: 25px;">
							<div class="col-lg-12">
								<div class="form-horizontal">
								 <div class="form-group">
								  <label for="key1" class="col-sm-2 control-label">key1</label>

								  <div class="col-sm-10">
									<input type="text" class="form-control" id="key1" placeholder="Keywords">
								  </div>
								</div>
									
									 <div class="form-group">
								  <label for="key2" class="col-sm-2 control-label">key2</label>

								  <div class="col-sm-10">
									<input type="text" class="form-control" id="key2" placeholder="Keywords">
								  </div>
								</div>
									
									 <div class="form-group">
								  <label for="key3" class="col-sm-2 control-label">key3</label>

								  <div class="col-sm-10">
									<input type="text" class="form-control" id="key3" placeholder="Keywords">
								  </div>
								</div>
									
									 <div class="form-group">
								  <label for="key4" class="col-sm-2 control-label">key4</label>

								  <div class="col-sm-10">
									<input type="text" class="form-control" id="key4" placeholder="Keywords">
								  </div>
								</div>
									
									
								</div>
							  
							</div>
						</div>
						 
					</div>
					
					 <div class="box-footer">
					<button type="" class="btn btn-default" id="reset" name="reset">Reset</button>
					<button type="submit" class="btn btn-danger pull-right" id="cari" name="cari" onclick="search()">Search</button>
				  </div>
				</div>
			  </div>
		  </div>
      
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.13
      </div>
      <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/');?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/');?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('assets/');?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/');?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/');?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/');?>dist/js/demo.js"></script>
	<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/');?>plugins/iCheck/icheck.min.js"></script>
	<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/');?>bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
	<!-- DataTables -->
<script src="<?php echo base_url('assets/');?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/');?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	
<script>
var site = '<?php echo base_url()?>';
$(function(){
          $('input[type="checkbox"]#check_site_id').iCheck({
            checkboxClass: 'icheckbox_flat-red'
          })
          //Flat red color scheme for iCheck
          $('input[type="checkbox"]#check_tower_index').iCheck({
            checkboxClass: 'icheckbox_flat-red'
          })
          $("#check_site_id").val("off");
          $('input[type="checkbox"]#check_site_id').on('ifChecked', function(event){
            $("#check_site_id").val("on");
          });
          $('input[type="checkbox"]#check_site_id').on('ifUnchecked', function(event){
            $("#check_site_id").val("off");
          });  

          
          $("#check_tower_index").val("off");
          $('input[type="checkbox"]#check_tower_index').on('ifChecked', function(event){
            $("#check_tower_index").val("on");
          });
          $('input[type="checkbox"]#check_tower_index').on('ifUnchecked', function(event){
            $("#check_tower_index").val("off");
          }); 

          $("#reset").click(function(){
            $('#check_site_id').iCheck('uncheck');
            $('#check_tower_index').iCheck('uncheck');
            $('#key1').val(null);
            $('#key2').val(null);
            $('#key3').val(null);
            $('#key4').val(null);
            ajax();
          }); 

});

ajax();

function ajax(){
  $.ajax({
      type:'POST',
      url:site+'Subnets/data2',
      dataType:'json',
      success: function(respon){
        if(respon.status == 'sukses'){
          $('#dtIPAddress').DataTable().clear().destroy();
          $('#data_table').html(respon.Data);
          $('#dtIPAddress').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : false,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : true
          });
        }else{
          $('#dtIPAddress').DataTable().clear().destroy();
          $('#data_table').html(respon.Data);
          $('#dtIPAddress').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : false,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : true
          });
        }
      }
});
}

function search(){
  var status_chechbox = "0";

    if(($("#check_site_id").val() == "on") && ($("#check_tower_index").val() == "on")){
      status_checkbox = "3";
    }else if($("#check_site_id").val() == "on"){
      status_checkbox = "2";
    }else if($("#check_tower_index").val() == "on"){
      status_checkbox = "1";
    }else{
      alert("Centang Salah satu Check Box");
      return;
    }

    var key1 = $("#key1").val();
    var key2 = $("#key2").val();
    var key3 = $("#key3").val();
    var key4 = $("#key4").val();


    var data = 'status_checkbox='+status_checkbox+'&key1='+key1+'&key2='+key2+'&key3='+key3+'&key4='+key4;

    $.ajax({
    type:'POST',
    url:site+'Subnets/searchData',
    dataType:'json',
    data:data,
    success: function(respon){
      if(respon.status == 'sukses'){
        $('#dtIPAddress').DataTable().clear().destroy();
        $('#data_table').html(respon.Data);
        $('#dtIPAddress').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : false,
          'ordering'    : false,
          'info'        : true,
          'autoWidth'   : true
        });
      }else{
        $('#dtIPAddress').DataTable().clear().destroy();
        $('#data_table').html(respon.Data);
        $('#dtIPAddress').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : false,
          'ordering'    : false,
          'info'        : true,
          'autoWidth'   : true
        });
      }
    }
    });
}





  // $(function () {
  //   var site = '<?php echo base_url()?>';
  //   $('#example1').DataTable({
  //     'paging'      : true,
  //     'lengthChange': true,
  //     'searching'   : false,
  //     'ordering'    : false,
  //     'info'        : true,
  //     'autoWidth'   : true
  //   })
	  
	//    //iCheck for checkbox and radio inputs
  //   //Flat red color scheme for iCheck
  //   $('input[type="checkbox"]#check_site_id').iCheck({
  //     checkboxClass: 'icheckbox_flat-red'
  //   })
  //    //Flat red color scheme for iCheck
  //    $('input[type="checkbox"]#check_tower_index').iCheck({
  //     checkboxClass: 'icheckbox_flat-red'
  //   })

	  
	//   $("#reset").click(function(){
  //      $('#check_site_id').iCheck('uncheck');
	// 	$('#check_tower_index').iCheck('uncheck');
	// 	  $('#key1').val(null);
	// 	  $('#key2').val(null);
	// 	  $('#key3').val(null);
	// 	  $('#key4').val(null);
  //   });

  //       $("#check_site_id").val("off");
  //       $('input[type="checkbox"]#check_site_id').on('ifChecked', function(event){
  //         $("#check_site_id").val("on");
  //       });
  //       $('input[type="checkbox"]#check_site_id').on('ifUnchecked', function(event){
  //         $("#check_site_id").val("off");
  //       });  

         
  //       $("#check_tower_index").val("off");
  //       $('input[type="checkbox"]#check_tower_index').on('ifChecked', function(event){
  //         $("#check_tower_index").val("on");
  //       });
  //       $('input[type="checkbox"]#check_tower_index').on('ifUnchecked', function(event){
  //         $("#check_tower_index").val("off");
  //       });  

  //   $("#cari").click(function(){
  //          if(($("#check_site_id").val() == "on") && ($("#check_tower_index").val() == "on")){
  //            alert("x dan y nyala");
  //          }else if($("#check_site_id").val() == "on"){
  //            alert("x nyala");
  //          }else if($("#check_tower_index").val() == "on"){
  //            alert("y nyala");
  //          }else{
  //            alert("Tidak nya kedua nya")
  //          }
  //   });
	  
  // })
</script>
	
<!--
<script type="text/javascript">
$(document).ready(function(){
    
});
</script>
-->
</body>
</html>
