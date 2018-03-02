<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
    <title>Document</title>

    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
<!--    <script src="--><?php //echo base_url();?><!--assets/js/jquery.min.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</head>
<body>



<!-- Nav section from *https://getbootstrap.com/docs/4.0/components/navbar/-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">ManageIt</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a>
            </li>

            <?php if($this->session->userdata('logged_in')): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>projects">Projects<span class="sr-only">(current)</span></a></li>
                </li>
            <?php endif; ?>

            <?php if(!$this->session->userdata('logged_in')): ?>
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>users/register">Get started</a>
                </li>
            <?php endif; ?>

<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    Dropdown-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                    <a class="dropdown-item" href="#">Action</a>-->
<!--                    <a class="dropdown-item" href="#">Another action</a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">Something else here</a>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link disabled" href="#">Disabled</a>-->
<!--            </li>-->
        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->

        <?php if($this->session->userdata('logged_in')): ?>
        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
        </ul>
        <?php endif; ?>
    </div>
</nav>




<!-- Nav section from *https://getbootstrap.com/docs/3.3/components/#navbar-default-->
<!--<nav class="navbar navbar-inverse">-->
<!--    <div class="container-fluid">-->
<!--        <!-- Brand and toggle get grouped for better mobile display -->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <a class="navbar-brand" href="--><?php //echo base_url(); ?><!--">CI APP</a>-->
<!--        </div>-->
<!---->
<!--        <!-- Collect the nav links, forms, and other content for toggling -->
<!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active"><a href="--><?php //echo base_url(); ?><!--">Home<span class="sr-only">(current)</span></a></li>-->
<!---->
<!--            </ul>-->
<!--            --><?php //if(!$this->session->userdata('logged_in')): ?>
<!--            <ul class="navbar-nav">-->
<!--                <li><a href="--><?php //echo base_url(); ?><!--users/register">Get started<span class="sr-only">(current)</span></a></li>-->
<!--<!--                <li><a href="#">Link</a></li>-->
<!--<!--                <li class="dropdown">-->
<!--<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--<!--                    <ul class="dropdown-menu">-->
<!--<!--                        <li><a href="#">Action</a></li>-->
<!--<!--                        <li><a href="#">Another action</a></li>-->
<!--<!--                        <li><a href="#">Something else here</a></li>-->
<!--<!--                        <li role="separator" class="divider"></li>-->
<!--<!--                        <li><a href="#">Separated link</a></li>-->
<!--<!--                        <li role="separator" class="divider"></li>-->
<!--<!--                        <li><a href="#">One more separated link</a></li>-->
<!--<!--                    </ul>-->
<!--            </ul>-->
<!--            --><?php //endif; ?>
<!--<!--            <form class="navbar-form navbar-left">-->
<!--<!--                <div class="form-group">-->
<!--<!--                    <input type="text" class="form-control" placeholder="Search">-->
<!--<!--                </div>-->
<!--<!--                <button type="submit" class="btn btn-default">Submit</button>-->
<!--<!--            </form>-->
<!---->
<!--            --><?php //if($this->session->userdata('logged_in')): ?>
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active"><a href="--><?php //echo base_url(); ?><!--projects">Projects<span class="sr-only">(current)</span></a></li>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <ul class="nav navbar-nav navbar-right">-->
<!---->
<!--                <li><a href="--><?php //echo base_url(); ?><!--users/logout">Logout</a></li>-->
<!---->
<!--<!--                <li class="dropdown">-->
<!--<!--                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
<!--<!--                    <ul class="dropdown-menu">-->
<!--<!--                        <li><a href="#">Action</a></li>-->
<!--<!--                        <li><a href="#">Another action</a></li>-->
<!--<!--                        <li><a href="#">Something else here</a></li>-->
<!--<!--                        <li role="separator" class="divider"></li>-->
<!--<!--                        <li><a href="#">Separated link</a></li>-->
<!--<!--                    </ul>-->
<!--<!--                </li>-->
<!--           </ul>-->
<!--           --><?php //endif; ?>
<!---->
<!--        </div><!-- /.navbar-collapse -->
<!--    </div><!-- /.container-fluid -->
<!--</nav>-->
<br>
    <div class="container">

        <?php if (!$this->session->userdata('logged_in')): ?>
        <div class="col-xs-3">

            <?php $this->load->view('users/login_view'); ?>

        </div>
        <?php endif; ?>

        <div class="col-xs-9">

            <?php $this->load->view($main_view); ?>

        </div>

    </div>

</body>
</html>