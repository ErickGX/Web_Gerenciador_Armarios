const container = document.getElementById("CDA");
const armarios = document.querySelector(".row .armario:not(.vendido)");
const areaSelector = document.getElementById("proximidade");
const select = document.getElementById();

populateUI();


function populateUI() {
  const armariosSelecionados = JSON.parse(localStorage.getItem("armariosSelecionados"));

  if (armariosSelecionados !== null && armariosSelecionados.length > 0) {
    armarios.forEach((armario, index) => {
      if (armariosSelecionados.indexOf(index) > -1) {
        console.log(armario.classList.add("selecionado"));
      }
    });
  }


  const selectedareaIndex = localStorage.getItem("selectedareaIndex");

  if (selectedareaIndex !== null) {
    areaSelect.selectedIndex = selectedareaIndex;
    console.log(selectedareaIndex)
  }

console.log(populateUI())

container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("armario") &&
    !e.target.classList.contains("vendido")
  ) {
    e.target.classList.toggle("selecionado");

  }
});