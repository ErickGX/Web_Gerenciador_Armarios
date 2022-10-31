
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


const container = document.querySelector(".container");
const armarios = document.querySelectorAll(".row .armario:not(.vendido)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const areaSelect = document.getElementById("area");

container.addEventListener("click", (e) => {
    if (
      e.target.classList.contains("armario") &&
      !e.target.classList.contains("vendido")
    ) {
      e.target.classList.toggle("selecionado");
  
     
    }
  });

  function populateUI() {
    const selectedarmarios = JSON.parse(localStorage.getItem("selectedarmarios"));
  
    if (selectedarmarios !== null && selectedarmarios.length > 0) {
      armarios.forEach((armario, index) => {
        if (selectedarmarios.indexOf(index) > -1) {
          console.log(armario.classList.add("selected"));
        }
      });
    }
  
    const selectedareaIndex = localStorage.getItem("selectedareaIndex");
  
    if (selectedareaIndex !== null) {
      areaSelect.selectedIndex = selectedareaIndex;
      console.log(selectedareaIndex)
    }
  }



