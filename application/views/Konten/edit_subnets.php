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
    <title><?php $Id;?></title>
</head>
<body>
    <!-- Default form contact -->
<form class="text-center border border-light p-5" action="#!">

<p class="h4 mb-4">Contact us</p>

<!-- Name -->
<input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name">

<!-- Email -->
<input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail">

<!-- Subject -->
<label>Subject</label>
<select class="browser-default custom-select mb-4">
    <option value="" disabled>Choose option</option>
    <option value="1" selected>Feedback</option>
    <option value="2">Report a bug</option>
    <option value="3">Feature request</option>
    <option value="4">Feature request</option>
</select>

<!-- Message -->
<div class="form-group">
    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Message"></textarea>
</div>

<!-- Copy -->
<div class="custom-control custom-checkbox mb-4">
    <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
    <label class="custom-control-label" for="defaultContactFormCopy">Send me a copy of this message</label>
</div>

<!-- Send button -->
<button class="btn btn-info btn-block" type="submit">Send</button>

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
</body>
</html>
