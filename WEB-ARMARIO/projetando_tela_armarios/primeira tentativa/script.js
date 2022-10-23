const container = document.querySelector(".container");
const armarios = document.querySelectorAll(".row .armario:not(.vendido)");
const count = document.getElementById("count");
const total = document.getElementById("total");
const areaSelect = document.getElementById("area");

populateUI();

let ticketPrice = +areaSelect.value;

// Save selected area index and price
function setareaData(areaIndex, areaPrice) {
  localStorage.setItem("selectedareaIndex", areaIndex);
  localStorage.setItem("selectedareaPrice", areaPrice);
}

// Update total and count
// function updateSelectedCount() {
//   const selectedarmarios = document.querySelectorAll(".row .armario.selecionado");

//   const armariosIndex = [...selectedarmarios].map((armario) => [...armarios].indexOf(armario));

//   localStorage.setItem("selectedarmarios", JSON.stringify(armariosIndex));

//   const selectedarmariosCount = selectedarmarios.length;

//   count.innerText = selectedarmariosCount;
//   total.innerText = selectedarmariosCount * ticketPrice;

//   setareaData(areaSelect.selectedIndex, areaSelect.value);
// }


// Get data from localstorage and populate UI
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
console.log(populateUI())
// area select event
// areaSelect.addEventListener("change", (e) => {
//   ticketPrice = +e.target.value;
//   setareaData(e.target.selectedIndex, e.target.value);
//   updateSelectedCount();
// });

// armario click event
container.addEventListener("click", (e) => {
  if (
    e.target.classList.contains("armario") &&
    !e.target.classList.contains("vendido")
  ) {
    e.target.classList.toggle("selecionado");

    //updateSelectedCount();
  }
});

// Initial count and total set
// updateSelectedCount();