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
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
        <a class="navbar-brand" href="index.html">IPAM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
                aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ipam.html">IP Manager
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
                        <a class="dropdown-item" href="#">Log Out</a>
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
        <table id="dtIPAddress" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
        <th class="th-sm">No
            </th>
            <th class="th-sm">Area
            </th>
            <th class="th-sm">Hostname
            </th>
            <th class="th-sm">Router Name
            </th>
            <th class="th-sm">Site ID
            </th>
            <th class="th-sm">Tower Index
            </th>
            <th class="th-sm">S-VID
            </th>
            <th class="th-sm">C-VID
            </th>
            <th class="th-sm">IP Address
            </th>
            <th class="th-sm">IP Gateway
            </th>
            <th class="th-sm">Subnet
            </th>
            <th class="th-sm">S-VID
            </th>
            <th class="th-sm">C-VID
            </th>
            <th class="th-sm">IP Address
            </th>
            <th class="th-sm">IP Gateway
            </th>
            <th class="th-sm">Subnet
            </th>
        </tr>
        </thead>
        <tbody id="data_table">
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
    // Material Design example
    var site = '<?php echo base_url()?>';
$(document).ready(function () {
        // $('#dtIPAddress').DataTable({
        //     "scrollX": true
        // });
        $('#dtIPAddress_wrapper').find('label').each(function () {
            $(this).parent().append($(this).children());
        });
        $('#dtIPAddress_wrapper .dataTables_filter').find('input').each(function () {
            $('input').attr("placeholder", "Search");
            $('input').removeClass('form-control-sm');
        });
        $('#dtIPAddress_wrapper .dataTables_length').addClass('d-flex flex-row');
        $('#dtIPAddress_wrapper .dataTables_filter').addClass('md-form');
        $('#dtIPAddress_wrapper select').removeClass(
            'custom-select custom-select-sm form-control form-control-sm');
        $('#dtIPAddress_wrapper select').addClass('mdb-select');
        $('#dtIPAddress_wrapper .mdb-select').materialSelect();
        $('#dtIPAddress_wrapper .dataTables_filter').find('label').remove();
        
        ajax();
        
});

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
            'autoWidth'   : true,
            'scrollX'     : true
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
            'autoWidth'   : true,
            "scrollX": true
          });
        }
      }
});
}
</script>
</body>

</html>
