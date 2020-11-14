<?php
require("header.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Services</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <style>
        
            .preview {
            width:400px;
            height:180px}
            
            .thumb {
            width:130px;
            margin-right:2px;}
            
            .normal {
            border:2px solid #221464;}
            
            .selected {
            border:2px solid #0099ff;}
</style> 
    </head>
    <body>
        
        <div class="container bg-light">
            <div class="row">
               </div>
    </div>

        <div class="container mt-3 bg-light">
            <div class="row">
                <div class="col-md-6">
                    <img id="0" class="preview normal" src="" alt="preview"/><br>
                    <img id="1" src="image/up1.1.jpg" class="thumb normal" alt="picture" onmouseover="preview(this)"/>
                    <img id="2" src="image/up1.2.jpg" class="thumb normal" alt="exercise" onmouseover="preview(this)"/>
                    <img id="3" src="image/up1.3.jpg" class="thumb normal" alt="lecture" onmouseover="preview(this)"/>
                
        </div>
                    <div class="col-md-6">
                        <h2>Best Room1</h2>
                        <p>Separate kiving room and patient room , one bedroom for family (Twin beds) , two bathrooms , one toilet , sofa, refrigerator and drinking water , minibar (free) , dishware dining table , 2TVs , Free Wi-Fi , Safety box , 140 square meters.<br><b><i>Room Price is $700 and service charge is $200.</i> Total Price is $900.</b></p>
                   
                    </div> 
            

                    <div class="col-md-6">
                        <h2>Best Room2</h2>
                        
                        <p>Separate kiving room and patient room , one bathrooms , one toilet , sofa, refrigerator and drinking water , minibar (free for first set) , dishware , dining table , 2TVs , Free Wi-Fi , Safety box , 90 square meters.<br><b><i>Room Price is $500 and service charge is $200.</i> Total Price is $700.</b></p></div>
                    <div class="col-md-6">
                        <img id="4" class="preview normal" src="" alt="preview"/><br>
                        <img id="5" src="image/up2.1.jpg" class="thumb normal" alt="picture" onmouseover="preview(this)"/>
                        <img id="6" src="image/up2.2.jpg" class="thumb normal" alt="exercise" onmouseover="preview(this)"/>
                        <img id="7" src="image/up2.3.jpg" class="thumb normal" alt="lecture" onmouseover="preview(this)"/>
                    </div>
                    
        <div class="col-md-6">
            <img id="8" class="preview normal" src="" alt="preview"/><br>
            <img id="9" src="image/up3.1.jpg" class="thumb normal" alt="picture" onmouseover="preview(this)"/>
            <img id="10" src="image/up3.2.jpg" class="thumb normal" alt="exercise" onmouseover="preview(this)"/>
            <img id="11" src="image/up3.3.jpg" class="thumb normal" alt="lecture" onmouseover="preview(this)"/>
        </div>
                <div class="col-md-6">
                    <h2>Best Room3</h2>
                    
                    <p>Separate kiving room and patient room , one bathrooms , one toilet , sofa, refrigerator and drinking water , minibar (free for first set) , dishware , dining table , 2TVs , Free Wi-Fi , Safety box , 90 square meters.<br><b><i>Room Price is $450 and service charge is $200.</i> Total Price is $650.</b></p></div>
                </div>
            </div>
               
        </div>
        <script>
            var lastImg=1;          
            document.getElementById("0").src=document.getElementById(lastImg).src;
            document.getElementById(lastImg).className="thumb selected";
            function preview(img)
            {
                document.getElementById(lastImg).className="thumb normal";
                img.className="thumb selected";
                document.getElementById(0).src-img.src;
                lastImg=img.id
            }
            var lastImg1=5;
            document.getElementById("4").src=document.getElementById(lastImg1).src;
            document.getElementById(lastImg1).className="thumb selected";
            function preview(img)
            {
                document.getElementById(lastImg1).className="thumb normal";
                img.className="thumb selected";
                document.getElementById(0).src-img.src;
                lastImg1=img.id
            }
            var lastImg2=9;            
            document.getElementById("8").src=document.getElementById(lastImg2).src;
            document.getElementById(lastImg2).className="thumb selected";
            function preview(img)
            {
                document.getElementById(lastImg2).className="thumb normal";
                img.className="thumb selected";
                document.getElementById(0).src-img.src;
                lastImg2=img.id
            }
            </script>
                        
        
    </body>
</html>
<?php
require("footer.php");
?>