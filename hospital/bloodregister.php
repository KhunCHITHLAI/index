<?php
require("header.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>blood registration</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bloodregister.css">
</body>
</head>
<body>
<div class="container">
        <ul class="progressbar">
            <li class="active">Step 1</li>
            <li class="step2">step 2</li>
            <li class="step3">step 3</li>
        </ul>
    </div>
<div class="container bg-light mt-5">
<form method="POST" action="blooddonar.php">
	<div class="row pt-3">
		<div class="col-md-12">
			<div class="form-group">
				<label>Name<span style="color: red;">*</span></label>
				<input type="text" id="input1" name="name" class="form-control">
				<span style="color: red" id="span1"></span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Email<span style="color: red;">*</span></label>
				<input type="text" id="input2" name="email" class="form-control">
				<span style="color: red" id="span2"></span>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12">
			<div class="form-group">
				<label>Password<span style="color: red;">*</span></label>
				<input type="password" id="input3" name="password" class="form-control">
				<span style="color: red" id="span3"></span>
			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
				<label>Confirm-password<span style="color: red;">*</span></label>
				<input type="password" id="input4" name="confirm" class="form-control">
				<span style="color: red" id="span4"></span>
			</div>
		</div>
	</div>
	<div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" name="register" id="reg" class="btn-success p-2" style="text-align: center; border-radius: 5%; border:1px solid green; width: 100px;">Register
		</button>
		</div>
		</form>
	</div>
<script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bloodregister.js"></script>
</body>
</html>
<?php
require("footer.php");
?>