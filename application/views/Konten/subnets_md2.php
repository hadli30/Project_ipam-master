<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IP Manager</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/style.css" rel="stylesheet">
    <!-- MDBootstrap Datatables  -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/addons/datatables.min.css" rel="stylesheet">
	
</head>

<body>

<!-- Main navigation -->
<header>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color">
        <a class="navbar-brand" href="#">IPAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url();?>Dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>Subnets">IP Manager
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">IP Calculator</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <!-- Search form -->
                <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fas fa-search"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                         aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>auth/logout">Log Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->
</header>
<!-- Main navigation -->

	
<!-- Main layout -->
<main>
    <div class="container-fluid">
		<div class="row">
			<div class="col-lg-10">
				<table id="dtIPAddress" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
					<tbody id="data_table">
					
          </tbody>

			   </table>
		   </div>
			
			<div class="col-lg-2">
            
				  <div class="card-body">

						<!-- Offer -->
						<h5 class="mb-4" style="font-size: 14px;"><i class="fas fa-search light-blue-text"></i> Setting Searching</h5>

						
							<div class="row">
					  			<div class="col-lg-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="check_site_id" name="check_site_id">
										<label class="custom-control-label" for="check_site_id" style="font-size: 10px; font-weight: bold;}">Site Id</label>
										</div>
									</div>
								<div class="col-lg-6">
								<div class="custom-control custom-checkbox">
									   <input type="checkbox" class="custom-control-input" id="check_tower_index" name="check_tower_index">
									   <label class="custom-control-label" for="check_tower_index" style="font-size: 10px; font-weight: bold;}">Tower Index</label>
									</div>
								</div>
					 	  </div>
					  <div class="row mt-4 ml-1">
						  
					  	<div class="active-pink-4 mb-4">
						  <input class="form-control" type="text" placeholder="key1" aria-label="key1" style="font-size: 10px;" id="key1" name="key1">
						</div>
						<div class="active-pink-4 mb-4">
						  <input class="form-control" type="text" placeholder="key2" aria-label="key2" style="font-size: 10px;" id="key2" name="key2">
						</div>
						<div class="active-pink-4 mb-4">
						  <input class="form-control" type="text" placeholder="key3" aria-label="key3" style="font-size: 10px;" id="key3" name="key3">
						</div>
						<div class="active-pink-4 mb-4">
						  <input class="form-control" type="text" placeholder="key4" aria-label="key4" style="font-size: 10px;" id="key4" name="key4">
						</div>
					  	
					  </div>
					  
					  <div class="row">
					  <div class="col-lg-6">
						  <button type="button" class="btn btn-info btn-rounded btn-sm" id="reset" name="reset" onclick="reset()">reset</button>
					  </div>
						  
					  <div class="col-lg-6">
						  <button type="button" class="btn btn-info btn-rounded btn-sm" id="reset" name="reset" onclick="search()">Search</button>
					  </div>
					  
					  </div>
					  

				 </div>
        
			
			</div>
		</div>
      
    </div>
</main>
<!-- Main layout -->

<!-- Footer -->
<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/mdb.min.js"></script>
<!-- MDBootstrap Datatables  -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/addons/datatables.min.js"></script>

<!-- MDBootstrap tables  -->
<script>
    // Material Design example
    var site = '<?php echo base_url()?>';
   $(function(){
     ajax();
   });

    function reset(){
            $("#check_site_id").prop("checked", false);
            $("#check_tower_index").prop("checked", false);
            $('#key1').val(null);
            $('#key2').val(null);
            $('#key3').val(null);
            $('#key4').val(null);
            ajax();
    }

function ajax(){
  $.ajax({
      type:'POST',
      url:site+'Subnets/getData',
      dataType:'json',
      success: function(respon){
        if(respon.status == 'sukses'){
          $('#dtIPAddress').DataTable().clear().destroy();
          $('#data_table').empty();
          $('#data_table').html(respon.Data);
          $('#dtIPAddress').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : false,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : true,
            'scrollX'     : true
          });
        }else{
          $('#dtIPAddress').DataTable().clear().destroy();
          $('#data_table').empty();
          $('#data_table').html(respon.Data);
          $('#dtIPAddress').DataTable({
            'paging'      : true,
            'lengthChange': true,
            'searching'   : false,
            'ordering'    : false,
            'info'        : true,
            'autoWidth'   : true,
            'scrollX': true
          });
        }
      }
});
}


function search(){
  var status_chechbox = "0";

    if(($('#check_site_id').is(':checked') == true) && ($('#check_tower_index').is(':checked') == true)){
      status_checkbox = "3";
    }else if($('#check_site_id').is(':checked') == true){
      status_checkbox = "2";
    }else if($('#check_tower_index').is(':checked') == true){
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

    // alert(data);

    $.ajax({
    type:'POST',
    url:site+'Subnets/searchData',
    dataType:'json',
    data:data,
    success: function(respon){
      if(respon.status == 'sukses'){
        $('#dtIPAddress').DataTable().clear().destroy();
        $('#data_table').empty();
        $('#data_table').html(respon.Data);
        $('#dtIPAddress').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : false,
          'ordering'    : false,
          'info'        : true,
          'autoWidth'   : true,
          'scrollX': true
        });
      }else{
        $('#dtIPAddress').DataTable().clear().destroy();
        $('#data_table').empty();
        $('#data_table').html(respon.Data);
        $('#dtIPAddress').DataTable({
          'paging'      : true,
          'lengthChange': true,
          'searching'   : false,
          'ordering'    : false,
          'info'        : true,
          'autoWidth'   : true,
          'scrollX': true
        });
      }
    }
    });
}
</script>
</body>

</html>
