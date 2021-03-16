<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <div class="container py-5">
    <div class="row">
        <div class="col-md-12">
		<div class="col-md-12 text-center mb-5">
            <img src="https://www.itenas.ac.id/wp-content/uploads/2020/07/Logo-id-Heebo-768x834.png" style="width:400px;height:400px;">
			</div>
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <!-- form card login -->
                    <div class="card rounded-0" id="login-form">
                        <div class="card-header">
                            <h3 class="mb-0">Login</h3>
                        </div>
                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST" action="<?php echo base_url('index.php/auth/login') ?>">
                                <div class="form-group">
                                    <label for="nim">NIM</label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="nim" id="nim" required="">
     
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="">
                        
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-lg float-right" id="btnLogin">Login</button>
                            </form>
                        </div>
                    </div>
                    <!-- /form card login end-->
					
                </div>
            </div>
        </div>
    </div>
    </div>
