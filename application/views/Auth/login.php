<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Log in | IPAM</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/style.css" rel="stylesheet">
    <!-- Login styles -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/addons/login.css" rel="stylesheet">
</head>

<body>

<!-- Main layout -->
<form  class="form-login" action="<?= base_url('auth'); ?>" method="post">
    <section class="form-elegant">

    <!--Form without header-->
    <div class="card">

        <div class="card-body mx-4">

            <!--Header-->
            <div class="text-center">
                <h3 class="dark-grey-text mb-5"><strong>Log in</strong></h3>
                <small class="pl-3 justify-content-center"><?= $this->session->flashdata('message'); ?></small> <br>
            </div>

            <!--Body-->
            <div class="md-form">
               <input type="text" name="email" id="Form-user1" class="form-control" value="<?= set_value('email'); ?>">
             
                <label for="Form-user1">Your user</label>
            </div>

            <div class="md-form pb-3">
            <input type="password" name="password" id="Form-pass1" class="form-control">
                <label for="Form-pass1">Your password</label>
                <?php echo form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="<?php echo base_url() ?>auth/forgot_password" class="blue-text ml-1">
                    Password?</a></p>
            </div>

            <div class="text-center mb-3">
                <button type="submit" name="button" class="btn blue-gradient btn-block btn-rounded z-depth-1a">Log in</button>
            </div>
<!--            <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in with:-->
<!--            </p>-->

<!--            <div class="row my-3 d-flex justify-content-center">-->
<!--                &lt;!&ndash;W3&ndash;&gt;-->
<!--                <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a">-->
<!--                    <img src="img/w3.png" alt="" width="24" height="24">-->
<!--                </button>-->
<!--            </div>-->

        </div>

        <!--Footer-->
        <div class="modal-footer mx-5 pt-3 mb-1">
            <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="<?php echo base_url() ?>auth/registration"
                                                                                        class="blue-text ml-1"> Sign Up</a></p>
        </div>

    </div>
    <!--/Form without header-->

</section>
</form >
<!-- Main layout -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="<?php echo base_url('assets/MD_template/');?>js/mdb.min.js"></script>
</body>

</html>
