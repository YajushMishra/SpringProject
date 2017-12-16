<?php
ob_start();
session_start();
	include('header.php');
?>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">HOME</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>WELCOME</div>
                                </div>
                            </div>
                        </div>
						<div class="panel-body">
							<div id="morris-area-chart">
							<?php
								if(isset($_GET['control'])){
									switch($_GET['control']){
										case 'registration':
											include('registration4dated14march.php');
											break;
										case 'list':
											include('list.php');
											break;
										case 'change_password':
											include('changepassword.php');
											break;
										case 'signout':
											include('signout.php');
											break;
										case 'view':
											include('view.php');
											break;
									}
								}
											
							?>
							</div>
						</div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left"></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
                        <!-- /.panel-body -->
<?php
	include('footer.php');
?>