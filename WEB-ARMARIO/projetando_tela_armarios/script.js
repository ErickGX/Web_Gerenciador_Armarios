
$('.select').change(function(){
    var optionID = $(this).val();
    if(optionID =="area1"){
        $('#quimica').removeClass("dados");
        $('#quimica').addClass("mostrar");
    
    }else{
        $('#quimica').removeClass("mostrar");
        $('#quimica').addClass("dados");
    }

    if(optionID =="area2"){
        $('#nutri').removeClass("dados");
        $('#nutri').addClass("mostrar");
    
    }else{
        $('#nutri').removeClass("mostrar");
        $('#nutri').addClass("dados");
    }

    if(optionID =="area3"){
        $('#adm').removeClass("dados");
        $('#adm').addClass("mostrar");
    
    }else{
        $('#adm').removeClass("mostrar");
        $('#adm').addClass("dados");
    }

    if(optionID =="000"){
    
        $('#quimica').removeClass("mostrar");
        $('#quimica').addClass("dados");
        
        $('#nutri').removeClass("mostrar");
        $('#nutri').addClass("dados");

        $('#adm').removeClass("mostrar");
        $('#adm').addClass("dados");
    
    }


    console.log(responseID);
});


$('.armario').click(function(){
    if (divClass == "armario.disponivel"){
        $('.armario').removeClass("armario.disponivel");
        $('.armario').addClass("armario.selecionado");
    }
});


