// Seleccion de elementos del DOM

const sign_in_btn = document.querySelector('#sign-in-btn');
const sign_up_btn = document.querySelector('#sign-up-btn');
const container = document.querySelector(".container");

// Funcion para alternar entre modos de formulario

sign_up_btn.addEventListener("click", () => {
    container.classList.add("sing-up-mode");
});

sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sing-up-mode");
});


//Mostrar alerta de exito al iniciar sesion

$('#login').click(function(){
    Swal.fire({
        position: "inherit",
        icon: "success",
        title: "Has inicado sesion correctamente",
        showConfirmButton: false,
        timer: 2000
    });
});


//Funcion para alternar la visibilidad de la contraseña

function togglePasswordVisibility() {
    var passwordFiled = document.getElementById("password");
    var icon = document.getElementById("password-toggle-icon");


    if (passwordFiled.type  === "password") {
        passwordFiled.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else { 
        passwordFiled.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye")
    
    }
} 