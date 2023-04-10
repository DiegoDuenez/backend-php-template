
$(document).ready(function(){
    authGuard()
})


if (localStorage.getItem("usuario") !== null) {
    let usuario = localStorage.getItem("usuario")
    $("#usuario").html(`<a href='usuarios.php' style='font-weight: normal;'><i class="fa-solid fa-circle-user" title='${usuario}'></i> ${usuario}</a> `);
}

function logout() {

    if (loggedIn()) {
        localStorage.removeItem("usuario");
        localStorage.removeItem("id");
        window.location = "index.php";
    }

}

function loggedIn() {
    return !!localStorage.getItem("usuario");
}

function authGuard() {
    if (loggedIn()) {
        return true;
    } else {
        window.location = "index.php";
        return false;
    }
}

function clearInputs(inputs) {
    inputs.each(function (e) {
      if (inputs[e].tagName.toLowerCase() == "input" || inputs[e].tagName.toLowerCase() == "textarea") {
        
        inputs[e].value = "";
  
      } else if (inputs[e].tagName.toLowerCase() == "select") {
        $(`#${inputs[e].id}`).val(0).trigger("change");
      }
    });
  }
  