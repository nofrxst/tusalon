document.getElementById("btn_registrarse").addEventListener("click",register)
document.getElementById("btn_iniciar-sesion").addEventListener("click",login)
//Variables
var contenedor_log_reg = document.querySelector(".cnt_log-reg");
var formulario_login = document.querySelector(".login");
var formulario_register = document.querySelector(".register");
var caja_trasera_login = document.querySelector(".caja_trasera-login");
var caja_trasera_register = document.querySelector(".caja_trasera-register");

function register(){
    formulario_register.style.display = "block";
    contenedor_log_reg.style.left = "410px";
    formulario_login.style.display ="none";
    caja_trasera_register.style.opacity = "0";
    caja_trasera_login.style.opacity = "1";
};

function login(){
    formulario_register.style.display = "none";
    contenedor_log_reg.style.left = "10px";
    formulario_login.style.display ="block";
    caja_trasera_register.style.opacity = "1";
    caja_trasera_login.style.opacity = "0";
};