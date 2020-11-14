$(document).ready(function(){

    $("#donar").click(function(){
        if ($("#input1").val()=="") {
            $("#span1").text("!require name");
        }
        else{
            $("#span1").text("");
        }
        if ($("#input2").val()=="") {
            $("#span2").text("!require email");
        }
        else{
            $("#span2").text("");
        }
        if ($("#input3").val()=="") {
            $("#span3").text("!require ph no");
        }
        else{
            $("#span3").text("");
        }
        
        if ($("#input4").val()=="") {
            $("#span4").text("!require birth");
        }
        else{
            $("#span4").text("");
        }
        if ($("#input5").val()=="") {
            $("#span5").text("!require type of blood");
        }
        else{
            $("#span5").text("");
        }
        
        if ($("#input6").val()=="") {
            $("#span6").text("!require bloodregister-id");
        }
        else{
            $("#span6").text("");
        }
        
        if($("#input1").val()!="" && $("#input2").val()!="" && $("#input3").val()!="" && $("#input4").val()!="" && $("#input5").val()!="" && $("#input6").val()!="")
        {
    
        return true;	
        }
        else{
        return false;
        }
        })
    
    })