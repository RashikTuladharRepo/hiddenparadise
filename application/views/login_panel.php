<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Hidden Paradise Travel and Tours Pvt. Ltd</title>

    <!-- Required Styles-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/bootstrap.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/hiddenadmin.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('styles/font-awesome.css'); ?>"/>

    <!-- get jQuery from the google apis -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
</head>
<body>
<div class="container">
    <div class="login-form">
        <?php echo form_open('Hidden') ?>
            <h2 class="text-primary text-center">Adminstrator Login</h2>
            <div class="has-error">
                <span class="help-block" id="helpBlock" style="display: none;"></span>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username"
                           required>
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-key"></i></div>
                    <input type="text" class="form-control" id="password" name="password" placeholder="Password"
                           required>
                </div>
            </div>
            <button type="submit" class="btn btn-success pull-left clearfix" name="login"><i class="fa fa-thumbs-o-up"></i> Login</button>
            <button type="reset" class="btn btn-danger" name="reset"><i class="fa fa-refresh"></i> Reset</button>
            <a href="#" class="dancingscript pull-right">Forgot Password?</a>
            <div class="clearfix"></div>
        </form>
    </div>
</div>

<script type="text/javascript" src="<?php echo base_url('scripts/bootstrap.min.js') ?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('scripts/jqBootstrapValidation.js'); ?>"></script>
<script>
    $(function () { $("input").not("[type=submit]").jqBootstrapValidation(); } );
</script>
</body>
</html>