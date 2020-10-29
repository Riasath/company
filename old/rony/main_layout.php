<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Opu">
    <meta name="keyword" content="">
    <link rel="shortcut icon" href="">
    <title>ERP System</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/admin/css/bootstrap-reset.css'); ?>" rel="stylesheet">

    <!--external css-->
    <link href="<?= base_url('assets/admin/css/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet"/>
    <link href="<?= base_url('assets/admin/css/jquery-easy-pie-chart/jquery.easy-pie-chart.css'); ?>" rel="stylesheet"
          type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/owl.carousel.css'); ?>" type="text/css">

    <!--right slidebar-->
    <link href="<?= base_url('assets/admin/css/slidebars.css'); ?>" rel="stylesheet">

    <!--file Upload -->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('assets/admin/css/bootstrap-fileupload/bootstrap-fileupload.css'); ?>"/>

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/admin/css/style.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/admin/css/style-responsive.css'); ?>" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url('assets/admin/other/bootstrap-datepicker/css/datepicker.css'); ?>"/>
    
   
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<section id="container">
    <!--header start-->
    <header class="header purple-bg">
        <div class="sidebar-toggle-box">
            <i class="fa fa-bars"></i>
        </div>
        <!--logo start-->
        <a href="<?= base_url('UserDashboard/user_dashboard'); ?>" class="logo">
            ERP Trade System
            <span> ( ইআরপি সিস্টেম )</span>
        </a>
        <!--logo end-->

        <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- notification dropdown start-->
                <li id="header_notification_bar" class="dropdown">
                    <a href="<?php echo base_url('user-notification'); ?>">
                        <i class="fa fa-bell-o"></i>
                        <span class="badge bg-warning">
                            <?php echo user_notification_number(); ?>
                        </span>
                    </a>
                </li>
                <!-- notification dropdown end -->
            </ul>
            <!--  notification end -->
        </div>

        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <!--                        <img alt="" src="-->
                        <? //= base_url('assets/admin/img/avatar1_small.jpg'); ?><!--">-->
                        <span class="username"><?php echo $this->session->userdata('UserFullName'); ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li><a href="<?= base_url('Authentication/user_logout'); ?>"><i class="fa fa-key"></i> Log
                                Out</a></li>
                    </ul>
                </li>
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">


                <li>
                    <a class="active" href="<?php echo base_url('user-dashboard'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard (ড্যাশবোর্ড)</span>
                    </a>
                </li>


                <li>
                    <a class="active" href="<?php echo base_url('UserDashboard/rules_regulation/Trade'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Rules( নিয়ম )</span>
                    </a>
                </li>



                <li>
                    <a href="<?php echo base_url('user-notification'); ?>">
                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                        <span>Notification( বিজ্ঞপ্তি )</span>
                    </a>
                </li>


                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-sitemap"></i>
                        <span> Form (সমূহ )</span>
<!--                        <span> Trade (বাণিজ্য)</span>-->
                    </a>
                    <ul class="sub">
                        <li>
                            <a href="javascript:;">Business Form (ব্যবসা ফরম)</a>
                            <ul class="sub">
                                <li><a href="<?php echo base_url('user-payment-tax?form_id=1'); ?>">Tax (কর)</a>
                                </li>
                                <li><a href="<?php echo base_url('user-payment-fee?form_id=2'); ?>">Fee (ফী)</a>
                                </li>
                                <li><a href="<?php echo base_url('user-payment-nomination?form_id=3'); ?>">Nomination
                                        (নামপত্তন)</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;">Form View (ফর্ম দেখুন)</a>
                            <ul class="sub">
                                <li><a href="<?php echo base_url('UserDashboard/tax_registration_information'); ?>">Tax
                                        (কর)</a></li>
                                <li><a href="<?php echo base_url('UserDashboard/fee_registration_information'); ?>">Fee
                                        (ফী)</a></li>
                                <li><a href="<?php echo base_url('UserDashboard/nomination_stall_reg_info'); ?>">Nomination
                                        (নামপত্তন)</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('UserDashboard/trade_payment'); ?>">Payment</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('UserDashboard/trade_billing'); ?>">Billing</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('UserDashboard/trade_report'); ?>">Report</a>
                        </li>
                    </ul>
                </li>
               

                <li>
                    <a href="<?php echo base_url("user-billing") ?>">
                        <i class="fa fa-credit-card" aria-hidden="true"></i>Billing
                    </a>
                </li>

                <li>
                    <a class="" href="<?php echo base_url('user-payment'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Payment Now</span>
                    </a>
                </li>
                <li>
                    <a class="" href="<?php echo base_url('user-accounts'); ?>">
                        <i class="fa fa-dashboard"></i>
                        <span>Accounts</span>
                    </a>
                </li>
<!--                <li>-->
<!--                    <a href="--><?php //echo base_url("user-report") ?><!--">-->
<!--                        <i class="fa fa-credit-card" aria-hidden="true"></i>Report-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                <li>-->
<!--                    <a class="" href="--><?php //echo base_url('user-site-map'); ?><!--">-->
<!--                        <i class="fa fa-dashboard"></i>-->
<!--                        <span>History</span>-->
<!--                    </a>-->
<!--                </li>-->


            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <section id="main-content">
        <section class="wrapper">
            <?= $content; ?>
        </section>
    </section>
    <!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2017 &copy; RTSoftbd.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>
<!-- js placed at the end of the document so the pages load faster -->
<script src="<?= base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
<script class="include" type="text/javascript"
        src="<?= base_url('assets/admin/js/jquery.dcjqaccordion.2.7.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/jquery.scrollTo.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/jquery.nicescroll.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('assets/admin/js/jquery.sparkline.js'); ?>" type="text/javascript"></script>

<script src="<?php echo base_url('assets/admin/css/jquery-easy-pie-chart/jquery.easy-pie-chart.js'); ?>"></script>

<script src="<?= base_url('assets/admin/js/owl.carousel.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/jquery.customSelect.min.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/respond.min.js'); ?>"></script>

<!--right slidebar-->
<script src="<?= base_url('assets/admin/js/slidebars.min.js'); ?>"></script>

<!--common script for all pages-->
<script src="<?= base_url('assets/admin/js/common-scripts.js'); ?>"></script>

<!--script for this page-->
<script src="<?= base_url('assets/admin/js/sparkline-chart.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/easy-pie-chart.js'); ?>"></script>
<script src="<?= base_url('assets/admin/js/count.js'); ?>"></script>

<!--file Upload -->
<script type="text/javascript"
        src="<?php echo base_url('assets/admin/css/bootstrap-fileupload/bootstrap-fileupload.js'); ?>"></script>

<script type="text/javascript"
        src="<?php echo base_url('assets/admin/other/bootstrap-datepicker/js/bootstrap-datepicker.js'); ?>"></script>

<script src="<?php echo base_url('assets/admin/js/advanced-form-components.js'); ?>"></script>

<script>


    //owl carousel

    $(document).ready(function () {
        $("#owl-demo").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            autoPlay: true

        });
    });

    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });

    $(window).on("resize", function () {
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>
<script type="text/javascript">
$('#autocomplete').autocomplete({
    source: "<?php echo site_url('User_form/sub_beasusee') ?>",
    minLength: 3,
    select: function (g, h) {
        $(this).val(h.item.value);
        $('#BusinessTypeSub_'+i).val(h.item.label);
    },
    focus:function(g, h){
        $(this).val(h.item.value);
        $('#BusinessTypeSub_'+i).val(h.item.label);
    }
});
</script>
</body>
</html>