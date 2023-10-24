(() => {
  setClassDefault();
  clickOpenMenu();
  openViewNewContrat();
  clickSendForm();
})();

function setClassDefault() {
  const classFormContrat = document.getElementById("viewNewContrat");
  const classNavbar = document.getElementById("contentNavbar");
  classFormContrat.className = "viewNewContrat viewNewContrat--hidde";
  classNavbar.className = "contentNavbar contentNavbar--hidde";
}

function clickOpenMenu() {
  const menuElement = document.getElementById("menu");
  menuElement.addEventListener("click", function () {
    showMenu();
  });
}

function showMenu() {
  const classNavbar = document.getElementById("contentNavbar");
  classNavbar.className = "contentNavbar";
  classNavbar.addEventListener("click", function (event) {
    if (event.target === classNavbar) {
      const classNavbar = document.getElementById("contentNavbar");
      classNavbar.className = "contentNavbar contentNavbar--hidde";
    }
  });
}

function openViewNewContrat() {
  const elementNewContrat = document.getElementById("newContrat");
  const classNewContrat = document.getElementById("viewNewContrat");
  elementNewContrat.addEventListener("click", function (event) {
    classNewContrat.className = "viewNewContrat";
    const classNavbar = document.getElementById("contentNavbar");
    classNavbar.className = "contentNavbar contentNavbar--hidde";
  });
  classNewContrat.addEventListener("click", function (event) {
    if (event.target === classNewContrat) {
      classNewContrat.className = "viewNewContrat viewNewContrat--hidde";
    }
  });
}

function clickSendForm() {
  formContrat = document.getElementById("formContrat");
  formContrat.addEventListener("submit", function (event) {
    validationForm(event);
  });
}

function validationForm(event) {
  alertText = document.getElementById("alertText");
  inputCodCont = document.getElementById("inputCodCont");
  selectCustomer = document.getElementById("selectCustomer");
  dateCont = document.getElementById("dateCont");
  priceCont = document.getElementById("priceCont");
  selectStateContrat = document.getElementById("selectStateContrat");
  stateForm = false;
  console.log(selectCustomer.value);
  if (inputCodCont.value.trim() == "") {
    stateForm = false;
  } else if (
    selectCustomer.value == "seleccionar" ||
    selectCustomer.value.trim() == ""
  ) {
    console.log(selectCustomer.value);
    stateForm = false;
  } else if (dateCont.value.trim() == "") {
    stateForm = false;
  } else if (priceCont.value.trim() == "") {
    stateForm = false;
  } else {
    stateForm = true;
  }

  if (stateForm) {
  } else {
    event.preventDefault();
    alertText.innerHTML = "Algunos campos estan vacio o no corresponde al tipo de dato";
  }
}
