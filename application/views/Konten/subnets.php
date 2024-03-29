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
    <!-- Your ipam styles -->
    <link href="<?php echo base_url('assets/MD_template/');?>css/addons/ipam.css" rel="stylesheet">

    
    


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
<div class="container-fluid mt-3">
        <div class="row mx-auto">
            <div class="col-lg-11 col-sm-10">
                <div class="row">
                    <div class="col">
                        <!-- Table Navigation -->
                        <div class="clearfix">
                            <button class="btn btn-primary btn-sm float-left" type="button" data-toggle="modal"
                                    data-target="#modalReserve">
                                <i class="fas fa-pen pr-1" aria-hidden="true"></i>Reserve
                            </button>
                            <button class="btn btn-primary btn-sm float-left" type="button" data-toggle="modal"
                                    data-target="#modalAdd">
                                <i class="fas fa-plus pr-1" aria-hidden="true"></i>Add IP
                            </button>
                            <button type="button" class="btn btn-primary btn-sm float-left" data-toggle="modal"
                                    data-target="#modalChooseFile"><i class="fas fa-download pr-1"
                                                                      aria-hidden="true"></i>Import
                            </button>
                            <a class="btn btn-primary btn-sm float-left" role="button" href="#"><i
                                    class="fas fa-upload pr-1"
                                    aria-hidden="true"></i>Export</a>
                            <!-- BUTTON DROPDOWNS -->
                            <div class="dropdown float-right">
                                <!--Trigger-->
                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button"
                                        data-toggle="dropdown">
                                    Multi Search
                                </button>
                                <div class="dropdown-menu" id="dtSearch">
                                    <!-- Material inline 1 -->
                                    <div class="dropdown-item form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="cbSiteID">
                        <label class="form-check-label" for="cbSiteID">Site ID</label>
                    </div>

                                    <!-- Material inline 2 -->
                                      <div class="dropdown-item form-check form-check-inline">
                        <input type="checkbox" class="form-check-input" id="cbTowerIndex">
                        <label class="form-check-label" for="cbTowerIndex">Tower Index</label>
                    </div>
                                    <div class="dropdown-divider"></div>
                                    <!-- Search form -->
                                    <input class="form-control mb-1" type="text" placeholder="Search" aria-label="Search" id="key1"> 
                    <input class="form-control mb-1" type="text" placeholder="Search" aria-label="Search" id="key2">
                    <input class="form-control mb-1" type="text" placeholder="Search" aria-label="Search" id="key3">
                    <input class="form-control mb-1" type="text" placeholder="Search" aria-label="Search" id="key4">
                    <input class="form-control mb-1" type="text" placeholder="Search" aria-label="Search" id="key5">
                    <input class="form-control mb-1" type="text" placeholder="Search" aria-label="Search" id="key6">
                    <input class="form-control mb-1" type="text" placeholder="Search" aria-label="Search" id="key7">
                    <input class="form-control mb-1" type="text" placeholder="Search" aria-label="Search" id="key8">

                                    <div class="dropdown-divider"></div>

                                    <div class="btn-group dropdown-item">
                                        <input class="btn btn-sm btn-success" type="submit" value="Submit" onclick="search()">
                                        <input class="btn btn-sm btn-info" type="reset" value="Reset" onclick="reset()">
                                    </div>
                                    <!--                    <a class="dropdown-item" href="#">Link One</a>-->
                                    <!--                    <a class="dropdown-item" href="#">Link Two</a>-->
                                    <!--                    <a class="dropdown-item" href="#">Link Three</a>-->
                                </div>
                            </div>
                        </div>
                        <!-- Table Navigation -->
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- Table layout -->
                        <table id="dtIPAddress" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm"></th>
            <th class="th-sm">No.</th>
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
            <th class="th-sm">Reserve by</th>
        </tr>
        </thead>
        <tbody id="data_table" name="data_table">
        
        </tbody>

    </table>
                        <!-- Table layout -->
                    </div>
                </div>
            </div>
            <!-- Filter layout -->
            <div class="col-lg-1 col-sm-2 p-0 border rounded border-primary">
                <div class="alert alert-primary font-weight-bold" role="alert">
                    <i class="fas fa-sliders-h blue-text pr-2" aria-hidden="true"></i>Filter
                </div>

                <div class="row mx-auto">
                    <div class="col-md-12">
                        <select class="mdb-select colorful-select dropdown-primary md-form"
                                searchable="Search here..."
                                id="filter1">
                            <option value="0" selected>All</option>
                            <option value="1">Jabodetabek</option>
                            <option value="2">Central Java</option>
                            <option value="3">Sumatera</option>
                        </select>
                        <label class="mdb-main-label">By Area</label>
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="col-md-12">
                        <select class="mdb-select colorful-select dropdown-primary md-form"
                                searchable="Search here..."
                                id="filter2">
                            <option value="0" selected>All</option>
                            <option value="1">Central Java Ring 15</option>
                            <option value="2">Central Java Ring 16</option>
                            <option value="3">Jabo Ring 12</option>
                        </select>
                        <label class="mdb-main-label">By Ring</label>
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="col-md-12">
                        <select class="mdb-select colorful-select dropdown-primary md-form"
                                searchable="Search here..."
                                id="filter3">
                            <option value="0" selected>All</option>
                            <option value="1">MA-JK1398-01H</option>
                            <option value="2">MA-JK2417227-01H</option>
                            <option value="3">MA-JK2413476-01H</option>
                        </select>
                        <label class="mdb-main-label">By Hostname</label>
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="col-md-12">
                        <select class="mdb-select colorful-select dropdown-primary md-form"
                                searchable="Search here..."
                                id="filter4">
                            <option value="0" selected>All</option>
                            <option value="1">Adrian</option>
                            <option value="2">Hadli</option>
                            <option value="3">Gabriela</option>
                        </select>
                        <label class="mdb-main-label">By User</label>
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="col-md-12">
                        <select class="mdb-select colorful-select dropdown-primary md-form"
                                searchable="Search here..."
                                id="filter5">
                            <option value="0" selected>All</option>
                            <option value="1">Available</option>
                            <option value="2">Reserved</option>
                            <option value="3">Active</option>
                        </select>
                        <label class="mdb-main-label">By Status</label>
                    </div>
                </div>

                <div class="row mx-auto">
                    <div class="col-md-12">
                        <select class="mdb-select colorful-select dropdown-primary md-form"
                                searchable="Search here..."
                                id="filter6">
                            <option value="0" selected>All</option>
                            <option value="1">1 day ago</option>
                            <option value="2">3 days ago</option>
                            <option value="3">7 days ago</option>
                        </select>
                        <label class="mdb-main-label">By Last Updated</label>
                    </div>
                </div>

            </div>
            <!-- Filter layout -->
        </div>
    </div>

</main>


<!-- Modal delete -->
<div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Are you sure?</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fas fa-times fa-4x animated rotateIn"></i>
                <input type="hidden" id="Id_delete" name="Id_delete" value="">
            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a href="" class="btn  btn-outline-danger" onclick="hapusData2()">Yes</a>
                <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">No</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- /Modal delete -->


<!--Modal: modalEdit-->
<div class="modal fade bd-example-modal-lg" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalEdit"
     aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <h4 class="title"><i class="fas fa-database"></i>Edit IP Address</h4>
                <button type="button" class="close"  aria-label="Close" onclick="close_moodal_edit()"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <!--Body-->
            <div class="modal-body mb-0 text-center">
            <form id="form_edit">
                <div class="form-group row">
                    <label for="inputArea" class="col-sm-3 col-form-label text-left">Area</label>
                    <input type="hidden" class="form-control" id="id" name="id"placeholder="Area">
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputArea" name="inputArea" placeholder="Area">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRing" class="col-sm-3 col-form-label text-left">Ring</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputRing" name="inputRing" placeholder="Ring">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHostname" class="col-sm-3 col-form-label text-left">Hostname</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputHostname" name="inputHostname" placeholder="Hostname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRoutername" class="col-sm-3 col-form-label text-left">Router Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputRoutername" name="inputRoutername" placeholder="Router Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSiteID" class="col-sm-3 col-form-label text-left">Site ID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputSiteID" name="inputSiteID" placeholder="Site ID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputTowerIndex" class="col-sm-3 col-form-label text-left">Tower Index</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputTowerIndex" name="inputTowerIndex" placeholder="Tower Index">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSiteName" class="col-sm-3 col-form-label text-left">Site Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputSiteName" name="inputSiteName" placeholder="Site Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPhase" class="col-sm-3 col-form-label text-left">Phase</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputPhase" name="inputPhase" placeholder="Phase">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputBSC" class="col-sm-3 col-form-label text-left">BSC/RNC/LTE</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputBSC" name="inputBSC" placeholder="BSC/RNC/LTE">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputHUT" class="col-sm-3 col-form-label text-left">HUT</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputHUT" name="inputHUT" placeholder="HUT">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputMicro" class="col-sm-3 col-form-label text-left">Microwave</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="inputMicro" name="inputMicro" placeholder="Microwave">
                    </div>
                </div>

                <hr>

                <div id="abisoam">
                    <select class="mdb-select md-form" id="selectOAM">
                        <option value="1">Abis/IuB/S1</option>
                        <option value="2">OAM</option>
                    </select>

                    <div id="dataAbis">
                    <div class="form-group row">
                        <label for="inputCAPabis" class="col-sm-3 col-form-label text-left">Cap (Kbps)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCAPabis" name="inputCAPabis"  placeholder="Cap (Kbps)">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputSVIDabis" class="col-sm-3 col-form-label text-left">S-VID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputSVIDabis" name="inputSVIDabis" placeholder="S-VID">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputCVIDabis" class="col-sm-3 col-form-label text-left">C-VID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCVIDabis" name="inputCVIDabis" placeholder="C-VID">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputIPAddressabis" class="col-sm-3 col-form-label text-left">IP Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputIPAddressabis" name="inputIPAddressabis" placeholder="IP Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputIPGatewayabis" class="col-sm-3 col-form-label text-left">IP Gateway</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputIPGatewayabis" name="inputIPGatewayabis" placeholder="IP Gateway">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputSubnetabis" class="col-sm-3 col-form-label text-left">Subnet</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputSubnetabis" name="inputSubnetabis" placeholder="Subnet">
                        </div>
                    </div>
                    </div>
                    <!-- data oam -->
                    <div id="data_oam">

                    <div class="form-group row">
                        <label for="inputCAPabis" class="col-sm-3 col-form-label text-left">Cap (Kbps)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCAPoam" name="inputCAPoam" placeholder="Cap (Kbps)">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputSVIDabis" class="col-sm-3 col-form-label text-left">S-VID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputSVIDoam" name="inputSVIDoam" placeholder="S-VID">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputCVIDabis" class="col-sm-3 col-form-label text-left">C-VID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCVIDoam" name="inputCVIDoam" placeholder="C-VID">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputIPAddressabis" class="col-sm-3 col-form-label text-left">IP Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputIPAddressoam" name="inputIPAddressoam" placeholder="IP Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputIPGatewayabis" class="col-sm-3 col-form-label text-left">IP Gateway</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputIPGatewayoam" name="inputIPGatewayoam" placeholder="IP Gateway">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputSubnetabis" class="col-sm-3 col-form-label text-left">Subnet</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputSubnetoam" name="inputSubnetoam" placeholder="Subnet">
                        </div>
                    </div>

                    </div>
                    <!-- /data oam -->

                </div>
                </form>
            </div>
           
            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-primary waves-effect waves-light" onclick="simpan_edit()">Reserve
                    <i class="fas fa-save ml-1"></i>
                </a>
                <a type="button" class="btn btn-outline-primary waves-effect" onclick="close_moodal_edit()">Cancel</a>
            </div>

        </div>
        <!--/.Content-->

    </div>
</div>
<!--Modal: modalEdit-->







<!--Modal: modalChooseFile-->
<div class="modal fade" id="modalChooseFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <h4 class="title"><i class="fas fa-file-excel"></i> Upload Your IP Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <!--Body-->
            <div class="modal-body mb-0 text-center">


                <form class="md-form" action="#">
                    <div class="file-field">
                        <div class="btn blue-gradient btn-sm float-left">
                            <span><i class="fas fa-cloud-upload-alt mr-2" aria-hidden="true"></i>Choose files</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper mb-3">
                            <input class="file-path validate" type="text" placeholder="Upload one file">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-sm blue-gradient btn-block btn-rounded z-depth-1a">Submit</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>
        <!--/.Content-->

    </div>
</div>
<!--Modal: modalChooseFile-->


<div class="modal fade" id="modalAlreadyEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Be always up to date</p>
            </div>

            <!--Body-->
            <div class="modal-body">

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Close</a>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: modalEdit-->


<!--Modal: modalAdd-->
<div class="modal fade bd-example-modal-lg" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalEdit"
     aria-hidden="true">
    <div class="modal-dialog cascading-modal modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header light-blue darken-3 white-text">
                <h4 class="title"><i class="fas fa-database"></i>Add IP Address</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>

            <!--Body-->
            <div class="modal-body mb-0 text-center">
                <form id="form_add">
                <div class="form-group row">
                    <label for="addArea" class="col-sm-3 col-form-label text-left">Area</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addArea" name="addArea" placeholder="Area">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addRing" class="col-sm-3 col-form-label text-left">Ring</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addRing"  name="addRing" placeholder="Ring">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addHostname" class="col-sm-3 col-form-label text-left">Hostname</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addHostname" name="addHostname" placeholder="Hostname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addRoutername" class="col-sm-3 col-form-label text-left">Router Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addRoutername" name="addRoutername" placeholder="Router Name">
                    </div>
                </div>
               
               
               
                <div class="form-group row">
                    <label for="addPhase" class="col-sm-3 col-form-label text-left">Phase</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addPhase" name="addPhase" placeholder="Phase">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addBSC" class="col-sm-3 col-form-label text-left">BSC/RNC/LTE</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addBSC" name="addBSC" placeholder="BSC/RNC/LTE">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addHUT" class="col-sm-3 col-form-label text-left">HUT</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addHUT" name="addHUT" placeholder="HUT">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addMicro" class="col-sm-3 col-form-label text-left">Microwave</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addMicro" name="addMicro" placeholder="Microwave">
                    </div>
                </div>

                <hr>

                <h3>Abis/IuB/S1</h3>
                <div class="form-group row">
                    <label for="addCAPabis" class="col-sm-3 col-form-label text-left">Cap (Kbps)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addCAPabis" name="addCAPabis" placeholder="Cap (Kbps)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addSVIDabis" class="col-sm-3 col-form-label text-left">S-VID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addSVIDabis" name="addSVIDabis" placeholder="S-VID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addCVIDabis" class="col-sm-3 col-form-label text-left">C-VID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addCVIDabis" name="addCVIDabis" placeholder="C-VID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addIPAddressabis" class="col-sm-3 col-form-label text-left">IP Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addIPAddressabis" name="addIPAddressabis" placeholder="IP Address">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addIPGatewayabis" class="col-sm-3 col-form-label text-left">IP Gateway</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addIPGatewayabis"  name="addIPGatewayabis" placeholder="IP Gateway">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addSubnetabis" class="col-sm-3 col-form-label text-left">Subnet</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addSubnetabis" name="addSubnetabis" placeholder="Subnet">
                    </div>
                </div>

                <hr>

                <h3>OAM</h3>
                <div class="form-group row">
                    <label for="addCAPoam" class="col-sm-3 col-form-label text-left">Cap (Kbps)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addCAPoam" name="addCAPoam" placeholder="Cap (Kbps)">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addSVIDoam" class="col-sm-3 col-form-label text-left">S-VID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addSVIDoam" name="addSVIDoam" placeholder="S-VID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addCVIDoam" class="col-sm-3 col-form-label text-left">C-VID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addCVIDoam" name="addCVIDoam" placeholder="C-VID">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addIPAddressoam" class="col-sm-3 col-form-label text-left">IP Address</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addIPAddressoam" name="addIPAddressoam" placeholder="IP Address">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addIPGatewayoam" class="col-sm-3 col-form-label text-left">IP Gateway</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addIPGatewayoam" name="addIPGatewayoam" placeholder="IP Gateway">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="addSubnetoam" class="col-sm-3 col-form-label text-left">Subnet</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="addSubnetoam" name="addSubnetoam" placeholder="Subnet">
                    </div>
                </div>
                </div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <a type="button" class="btn btn-primary waves-effect waves-light">ADD<i class="fas fa-save ml-1" onclick="add_ip_baru()"></i></a>
                <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancel</a>
            </div>

        </div>
        <!--/.Content-->

    </div>
</div>
<!--Modal: modalAdd-->

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



<script>
   var site = '<?php echo base_url()?>';
//    $(function(){
//      ajax();
//    });
    $(document).ready(function () {
      getData();

    $('#filter1').materialSelect();
    $('#filter2').materialSelect();
    $('#filter3').materialSelect();
    $('#filter4').materialSelect();
    $('#filter5').materialSelect();
    $('#filter6').materialSelect();
     
    $( "#filter3" ).change(function() {
        if($( "#filter3 option:selected" ).val() != 0){
            var dt = $( "#filter3 option:selected" ).val();

$.ajax({
type:'POST',
url:site+'Subnets/filter/'+dt,
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
  $('#filter3').html(respon.filter_hostname);
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
    'scrollX'     : true
  });
}
}
});
        }
        
        }).trigger( "change" );
   
    });


function reset(){
            $("#cbTowerIndex").prop("checked", false);
            $("#cbTowerIndex").prop("checked", false);
            $('#key1').val(null);
            $('#key2').val(null);
            $('#key3').val(null);
            $('#key4').val(null);
            $('#key5').val(null);
            $('#key6').val(null);
            $('#key7').val(null);
            $('#key8').val(null);
            getData();
    }

function getData(){
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
          $('#filter3').html(respon.filter_hostname);
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
            'scrollX'     : true
          });
        }
      }
});
}


function search(){
  var status_chechbox = "0";

    if(($('#cbSiteID').is(':checked') == true) && ($('#cbTowerIndex').is(':checked') == true)){
      status_checkbox = "3";
    }else if($('#cbSiteID').is(':checked') == true){
      status_checkbox = "2";
    }else if($('#cbTowerIndex').is(':checked') == true){
      status_checkbox = "1";
    }else{
      alert("Centang Salah satu Check Box");
      return;
    }

  
  

    var key1 = $("#key1").val();
    var key2 = $("#key2").val();
    var key3 = $("#key3").val();
    var key4 = $("#key4").val();
    var key5 = $("#key5").val();
    var key6 = $("#key6").val();
    var key7 = $("#key7").val();
    var key8 = $("#key8").val();



    var data = 'status_checkbox='+status_checkbox+'&key1='+key1+'&key2='+key2+'&key3='+key3+'&key4='+key4+'&key5='+key5+'&key6='+key6+'&key7='+key7+'&key8='+key8;

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

function updateData(id){
    // $('#modalEdit').modal('show');
    // $('#myModal').modal('hide');
  $.ajax({
    type:'POST',
    url:site+'Subnets/editData/'+id,
    dataType:'json',
    success: function(respon){
      if(respon.status == 'sukses'){
           
            $('#id').val(respon.id);
            $('#inputArea').val(respon.area);
            $('#inputRing').val(respon.ring);
            $('#inputHostname').val(respon.hostname);
            $('#inputRoutername').val(respon.router_name);
            $('#inputSiteID').val(respon.site_id);
            $('#inputTowerIndex').val(respon.tower_index);
            $('#inputSiteName').val(respon.site_name);
            $('#inputPhase').val(respon.phase);
            $('#inputBSC').val(respon.bsc);
            $('#inputHUT').val(respon.hut);

            $('#inputMicrowave').val(respon.microwave_link_1);
            $('#inputCAPabis').val(respon.cap_abis);
            $('#inputSVIDabis').val(respon.s_vid_abis);
            $('#inputCVIDabis').val(respon.c_vid_abis);
            $('#inputIPAddressabis').val(respon.ip_address_abis);
            $('#inputIPGatewayabis').val(respon.ip_gateway_abis);
            $('#inputSubnetabis').val(respon.subnet_abis);

            $('#inputCAPoam').val(respon.cap_oam);
            $('#inputSVIDoam').val(respon.s_vid_oam);
            $('#inputCVIDoam').val(respon.c_vid_oam);
            $('#inputIPAddressoam').val(respon.ip_address_oam);
            $('#inputIPGatewayoam').val(respon.ip_gateway_oam);
            $('#inputSubnetoam').val(respon.subnet_oam);

            $('#selectOAM').materialSelect();
            $('#abisoam input').prop("readonly",true);
            $('#modalEdit').modal({backdrop: false});
            $('#modalEdit').modal('show');
            
      }else{
        $('#modalAlreadyEdit').modal('show');
        $('#modalAlreadyEdit .modal-body').html(respon.pesan);
      }
    }
  });

  $( "#selectOAM" ).change(function() {
        if($( "#selectOAM option:selected" ).val() == 1){
            $("#data_oam").hide();
            $("#dataAbis").show();
        }else{
            $("#dataAbis").hide();
            $("#data_oam").show();
        }
        }).trigger( "change" );

}

function simpan_edit(){
        //     var area = $('#inputArea').val(respon.area);
        //     var ring = $('#inputRing').val(respon.ring);
        //     var hostname = $('#inputHostname').val(respon.hostname);
        //     var site_id = $('#inputSiteID').val(respon.site_id);
        //     var tower_index = $('#inputTwerIndex').val(respon.tower_index);
        //     var site_name = $('#inputSiteName').val(respon.site_name);
        //     var phase = $('#inputPhase').val(respon.phase);
        //     var bsc = $('#inputBSC').val(respon.bsc);
        //     var hut = $('#inputHUT').val(respon.hut);

        //    var microwve =  $('#inputMicrowave').val(respon.microwave_link_1);
        //    var cap_abis = $('#inputCAPabis').val(respon.cap_abis);
        //    var s_vid_abis =  $('#inputSVIDabis').val(respon.s_vid_abis);
        //     var c_vid_abis = $('#inputCVIDabis').val(respon.c_vid_abis);
        //     var ip_address = $('#inputIPAddressabis').val(respon.ip_address_abis);
        //     var ip_gateway_abis = $('#inputIPGatewayabis').val(respon.ip_gateway_abis);
        //     var subnet_abis = $('#inputSubnetabis').val(respon.subnet_abis);
        //     var cap_oam = $('#inputCAPoam').val(respon.cap_oam);
        //     $('#inputSVIDoam').val(respon.s_vid_oam);

        //     $('#inputCVIDoam').val(respon.c_vid_oam);
        //     $('#inputIPAddressoam').val(respon.ip_address_oam);
        //     $('#inputIPGatewayoam').val(respon.ip_gateway_oam);
        //     $('#inputSubnetoam').val(respon.subnet_oam);

        //  console.log($('#form_edit').serialize());
       
        $.ajax({
            type:'POST',
            url:site+'Subnets/editDataSubnets',
            dataType:'json',
            data:$('#form_edit').serialize(),
            success: function(respon){
                if(respon.status == 'sukses'){
                close_moodal_edit();
                window.location.href=site+'Subnets';
                }else{
                close_moodal_edit()
                window.location.href=site+'Subnets';
                } 
            }
        });
}

function hapusData(id){

   $('#Id_delete').val(id);
   $('#modalConfirmDelete').modal();


}

function hapusData2(){
  var id = $('#Id_delete').val();
   $.ajax({
    type:'POST',
    url:site+'Subnets/deleteData/'+id,
    dataType:'json',
    success: function(respon){
    if(respon.status == 'sukses'){
       window.location.href=site+'Subnets';
      }else{
        window.location.href=site+'Subnets';
      }  
    }
    });
}
    
function close_moodal_edit(){
    var id =  $('#id').val();
    $.ajax({
    type:'POST',
    url:site+'Subnets/close_modal/'+id,
    dataType:'json',
    success: function(respon){
    if(respon.status == 'sukses'){
        $('#modalEdit').modal('hide');
        window.location.href=site+'Subnets';
      }else{
        $('#modalEdit').modal('hide');
        window.location.href=site+'Subnets';
      }  
    }
    });
}

function add_ip_baru(){
    
}








</script>
</body>

</html>