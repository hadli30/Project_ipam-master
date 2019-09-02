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
    <nav class="mb-1 navbar navbar-expand-sm navbar-dark primary-color">
        <a class="navbar-brand" href="index.html">IPAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>Dashboard">Dashboard</a>
                </li>
                <li class="nav-item active">
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
                        <a class="dropdown-item" href="profile.html">Profile</a>
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
    <div class="container-fluid mt-2">
        <div class="clearfix">
            <a class="btn btn-primary btn-sm float-left" role="button" href="#"><i class="fas fa-plus pr-1" aria-hidden="true"></i>Add IP</a>
            <a class="btn btn-primary btn-sm float-left" role="button" href="#"><i class="fas fa-download pr-1" aria-hidden="true"></i>Import</a>
            <a class="btn btn-primary btn-sm float-left" role="button" href="#"><i class="fas fa-upload pr-1" aria-hidden="true"></i>Export</a>
            <!-- BUTTON DROPDOWNS -->
            <div class="dropdown float-right">
                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                    Multi Search
                </button>
                <div class="dropdown-menu">
                    <!-- Material inline 1 -->
                    <div class="dropdown-item form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="check_site_id" name="check_site_id">
                        <label class="form-check-label" for="check_site_id">Site ID</label>
                    </div>

                    <!-- Material inline 2 -->
                    <div class="dropdown-item form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="check_tower_index" name="check_tower_index">
                        <label class="form-check-label" for="check_tower_index">Tower Index</label>
                    </div>
                    <div class="dropdown-divider"></div>
                    <!-- Search form -->
                    <input class="dropdown-item form-control" type="text" placeholder="Search" aria-label="Search" id="key1" name="key1">
                    <input class="dropdown-item form-control" type="text" placeholder="Search" aria-label="Search" id="key2" name="key2">
                    <input class="dropdown-item form-control" type="text" placeholder="Search" aria-label="Search" id="key3" name="key3">
                    <input class="dropdown-item form-control" type="text" placeholder="Search" aria-label="Search" id="key4" name="key4">
                    <input class="dropdown-item form-control" type="text" placeholder="Search" aria-label="Search" id="key5" name="key5">
                    <input class="dropdown-item form-control" type="text" placeholder="Search" aria-label="Search" id="key6" name="key6">
                    <input class="dropdown-item form-control" type="text" placeholder="Search" aria-label="Search" id="key7" name="key7">
                    <input class="dropdown-item form-control" type="text" placeholder="Search" aria-label="Search" id="key8" name="key8">

                    <div class="dropdown-divider"></div>

                    <input class="dropdown-item btn btn-sm btn-success" type="submit" value="Submit" onclick="search()">
                    <input class="dropdown-item btn btn-sm btn-info" type="reset" value="Reset" onclick="reset()">

<!--                    <a class="dropdown-item" href="#">Link One</a>-->
<!--                    <a class="dropdown-item" href="#">Link Two</a>-->
<!--                    <a class="dropdown-item" href="#">Link Three</a>-->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <table id="dtIPAddress" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm"></th>
            <th class="th-sm">No.</th>
            <th class="th-sm">Status Ip Addres Abis-IUB-S1</th>
            <th class="th-sm">Area</th>
            <th class="th-sm">Hostname</th>
            <th class="th-sm">Router Name </th>
            <th class="th-sm">Site ID </th>
            <th class="th-sm">Tower Index </th>
            <th class="th-sm">S-VID </th>
            <th class="th-sm">C-VID </th>
            <th class="th-sm">IP Address </th>
            <th class="th-sm">IP Gateway </th>
            <th class="th-sm">Subnet </th>
            <th class="th-sm">S-VID </th>
            <th class="th-sm">C-VID </th>
            <th class="th-sm">IP Address </th>
            <th class="th-sm">IP Gateway </th>
            <th class="th-sm">Subnet </th>
        </tr>
        </thead>
        <tbody id="data_table" name="data_table">
        
        </tbody>

    </table>
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
   var site = '<?php echo base_url()?>';
//    $(function(){
//      ajax();
//    });
    $(document).ready(function () {
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

function editData(id){
    window.location.href=site+'Subnets/editSubnets/'+id;
}

function hapusData(id){
    $.ajax({
    type:'POST',
    url:site+'Subnets/deleteData/'+id,
    dataType:'json',
    success: function(respon){
    if(respon.status == 'sukses'){
        alert("sukses");
       window.location.href=site+'Subnets';
      }else{
        alert("Gagal");
        window.location.href=site+'Subnets';
      }  
    }
    });
}
    
   
//  }
</script>
</body>

</html>