$(document).ready(function() {
    
    $(".mini-cone").click(function (){
        var $this = $(this);
        var id = $('#idDenounce').text();
        alert($(".mini-cone").parent().text());
        
        $.ajax({
            url: 'timeline/addcone',
            type: 'POST',
            data: 'id='+id,
            success: function( data ){
                window.location.replace('timeline');
            }
        });
    });
    
    $(".img-timeline").dblclick(function (){
        var $this = $(this);
        var id = $('#idDenounce').text();
        
        $.ajax({
            url: 'timeline/addcone',
            type: 'POST',
            data: 'id='+id,
            success: function( data ){
                window.location.replace('timeline');
            }
        });
    });
    
});

