/* lista termo de recesso ferias */
$(document).ready(function() {
    $('.list').DataTable({
        "oLanguage":{
            "sUrl" : "../br/br.txt"
        }
    });
} );

$(function(){
    $(".list input").keyup(function(){        
        var index = $(this).parent().index();
        var nth = ".list td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        $(".list  tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $(".list input").blur(function(){
        $(this).val("");
    }); 
});