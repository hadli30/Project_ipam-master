<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/style.css" rel="stylesheet">
    <!-- MDBootstrap Datatables  -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/addons/datatables.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!-- Default form contact -->
<form class="text-center border border-light p-5" action="#!">

<p class="h4 mb-4">Contact us</p>

<!-- Name -->
<input type="hidden" id="id" class="form-control mb-4" placeholder="" value="<?php echo $Id;?>">

<input type="text" id="area" class="form-control mb-4" placeholder="" value="<?php echo $Area;?>">
<input type="hidden" id="area2" class="form-control mb-4" placeholder="" value="<?php echo $Area;?>">

<input type="text" id="hostname" class="form-control mb-4" placeholder="" value="<?php echo $Hostname;?>">
<input type="hidden" id="hostname2" class="form-control mb-4" placeholder="" value="<?php echo $Hostname;?>">

<input type="text" id="router_name" class="form-control mb-4" placeholder="" value="<?php echo $Router_name;?>">
<input type="hidden" id="router_name2" class="form-control mb-4" placeholder="" value="<?php echo $Router_name;?>">

<input type="text" id="site_id" class="form-control mb-4" placeholder="" value="<?php echo $Site_id;?>">
<input type="hidden" id="site_id2" class="form-control mb-4" placeholder="" value="<?php echo $Site_id;?>">

<input type="text" id="tower_index" class="form-control mb-4" placeholder="" value="<?php echo $Tower_index;?>">
<input type="hidden" id="tower_index2" class="form-control mb-4" placeholder="" value="<?php echo $Tower_index;?>">
<!-- Subject -->


<!-- Send button -->
<button class="btn btn-info btn-block" type="submit" onclick="editData()">Send</button>

</form>

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

<!-- Default form contact -->


<script>

var site = '<?php echo base_url()?>';
function editData(){
    var area = $('#area').val();
    var hostname = $('#hostname').val();
    var router_name = $('#router_name').val();
    var site_id = $('#site_id').val();
    var tower_index = $('#tower_index').val();
    var id = $('#id').val();
    
    var data = 'id='+id+'&area='+area+'&hostname='+hostname+'&router_name='+router_name+'&site_id='+site_id+'&tower_index='+tower_index;


    $.ajax({
    type:'POST',
    url:site+'Subnets/editDataSubnets',
    dataType:'json',
    data:data,
    success: function(respon){
      if(respon.status == 'sukses'){
        alert("Sukses");
        window.location.href=site+'Subnets';
      }else{
        alert("Gagal");
        window.location.href=site+'Subnets';
      }
    }
    });

}

</script>
</body>
</html>
