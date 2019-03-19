$(function(){
    console.log("clicked the button");
    var button = $("#add");
    button.on('click',function(){
        $("#modal").modal("hide");
    });
    
    var newstable = $("#newstable");
     
    newstable.on('click', function(){
        console.log("desired table");
        window.location = "newsDashboard.php";
    });
    
    
     var close = $("#close");
    close.on('click',function(){
        console.log("something of the sturbon button clicked.");
        $("#dismiss").modal("hide");
    });
});