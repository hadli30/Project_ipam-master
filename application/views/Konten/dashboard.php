<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $title ?></title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('assets/MD_template/');?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('assets/MD_template/');?>css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('assets/MD_template/');?>css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Main navigation -->
  <header>
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark primary-color mb-5">
      <a class="navbar-brand" href="#">IPAM</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
              aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>Dashboard">Dashboard
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>Subnets">IP Manager</a>
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
    <!-- Main container -->
    <section class="container">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-7 col-md-12">

          <div class="card mb-4">

            <div class="card-header white-text primary-color">
              <h6 class="font-weight-500 my-1">Last 5 information logs</h6>
            </div>

            <div class="card-body">

              <div class="table-responsive">

                <table class="table large-header">

                  <thead>

                  <tr>
                    <th class="font-weight-bold"><strong>User</strong></th>
                    <th class="font-weight-bold"><strong>Command</strong></th>
                    <th class="font-weight-bold"><strong>Object</strong></th>
                    <th class="font-weight-bold"><strong>Date</strong></th>
                  </tr>

                  </thead>

                  <tbody>

                  <tr>
                    <td>Admin</td>
                    <td>User login</td>
                    <td>-</td>
                    <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 2019-08-26 11:55:00
                        </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Admin</td>
                    <td>User login</td>
                    <td>-</td>
                    <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 2019-08-26 11:55:00
                        </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Admin</td>
                    <td>IP Address</td>
                    <td>192.168.2.1</td>
                    <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 2019-08-26 11:55:00
                        </span>
                    </td>
                  </tr>
                  <tr>
                    <td>Admin</td>
                    <td>User login</td>
                    <td>-</td>
                    <td class="hour">
                        <span class="grey-text float-right">
                          <i class="far fa-clock-o" aria-hidden="true"></i> 2019-08-26 11:55:00
                        </span>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>

              <button
                      class="btn btn-flat grey lighten-3 btn-rounded waves-effect float-right font-weight-bold btn-dash">View
                full report</button>

            </div>

          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-5 col-md-12">

          <div class="card mb-4">

            <div class="card-header white-text primary-color">
              <h6 class="font-weight-500 my-1">Statistics</h6>
            </div>

            <div class="card-body">

              <table class="table large-header">

                <tbody>
                <tr>
                  <td class="border-top-0">Number of IPv4 addresses</td>
                  <td class="border-top-0">15</td>
                </tr>
                <tr>
                  <td>Number of IPv6 addresses</td>
                  <td>32</td>
                </tr>
                <tr>
                  <td>Number of Subnets</td>
                  <td>41</td>
                </tr>
                <tr>
                  <td>Number of Gateways</td>
                  <td>14</td>
                </tr>

                </tbody>
              </table>

              <button
                      class="btn btn-flat grey lighten-3 btn-rounded waves-effect font-weight-bold float-right btn-dash">View
                full report</button>

            </div>

          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </section>
    <!-- Main container -->
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
</body>

</html>
