
var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

var body = document.querySelector("body");


btnSignin.addEventListener("click", function () {
   body.className = "sign-in-js"; 
});

btnSignup.addEventListener("click", function () {
    body.className = "sign-up-js";
})

$(window).scroll(function() {    
var scroll = $(window).scrollTop();
  if (scroll >= 40) {               // se rolar 40px ativa o evento
    $("#menu").addClass("ativo");    //coloca a classe "ativo" no id=menu
  } else {
    $("#menu").removeClass("ativo"); //se for menor que 40px retira a classe "ativo" do id=menu
  }
});