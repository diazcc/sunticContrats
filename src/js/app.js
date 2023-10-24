(() => {
  setClassDefault();
  clickOpenMenu();
  openViewNewContrat();
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
