document.getElementById("btn_Registrarse").addEventListener("click", register);
document.getElementById("btn_iniciar_sesion").addEventListener("click", iniciarSesion);
window.addEventListener("resize",anchoPagina);



//Declaracion de variables
let contenedor_loginregister=document.querySelector(".contenedor_login-register")
let formulario_login=document.querySelector(".formulario_login")
let formulario_register=document.querySelector(".formulario_register")
let caja_atras_login=document.querySelector(".caja_atras-login")
let caja_atras_register=document.querySelector(".caja_atras-register")

function anchoPagina(){
    if(window.innerWidth>850){
        caja_atras_login.style.display="block";
        caja_atras_register.style.display="block";
    }else{
        caja_atras_register.style.display="block";
        caja_atras_register.style.opacity="1";
        caja_atras_login.style.display="none";
        formulario_login.style.display="block";
        formulario_register.style.display="none";
        contenedor_loginregister.style.left="0";

    }
}
anchoPagina();

function iniciarSesion(){

    if(window.innerWidth>850){

        formulario_register.style.display="none";
        contenedor_loginregister.style.left = "10px";
        formulario_login.style.display="block";
        caja_atras_register.style.opacity = "1";
        caja_atras_login.style.opacity = "0";
    }else{
        formulario_register.style.display="none";
        contenedor_loginregister.style.left = "0px";
        formulario_login.style.display="block";
        caja_atras_register.style.display = "block";
        caja_atras_login.style.display = "none";
    }
}

function register(){
    if(window.innerWidth > 850){

        formulario_register.style.display="block";
        contenedor_loginregister.style.left = "410px";
        formulario_login.style.display="none";
        caja_atras_register.style.opacity = "0";
        caja_atras_login.style.opacity = "1";
    }else{
        formulario_register.style.display="block";
        contenedor_loginregister.style.left = "0px";
        formulario_login.style.display="none";
        caja_atras_register.style.display = "none";
        caja_atras_login.style.display = "block";
        caja_atras_login.style.opacity = "1"
    }
}