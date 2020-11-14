<?php
require("header.php")
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Contacts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        
    </head>
    <body>
        
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-4" >
                    <i class="fas fa-phone-alt"></i>09876543213
                        </div>
                        <div class="col-md-4">
                            <i class="far fa-envelope"></i>hospital234@gmail.com
                        </div>
                          <div class="col-md-4">
                            <i class="fas fa-map-marker-alt"></i>Mandalay
                        </div>
                       
               </div>
    
    

        <div class="container mt-3 bg-light">
            <div class="row">            

                    <div class="col-md-6">
                        <h2>Contact Us</h2>
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="">
                        <label>Date</label>
                        <input type="date" class="form-control">
                        <label>Message</label>
                        <br>
                        <textarea class="mt-3" style="width:100%"></textarea>
                        <div style="text-align: center;" class="pt-4 pb-3">
		<button type="submit" id="login" class="btn-primary p-2" style="text-align: center; border-radius: 5%; border:1px solid gray; width: 100px;">Send
		</button>
	</div>
                </div>
                    <div class="col-md-6">
                    <img src="image/welcome.jpg" width="400" height="470">
                </div>
        
            </div>
                </div>
        </div>
                        
        
    </body>
</html>
<?php
require("footer.php");
?>