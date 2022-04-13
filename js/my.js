//Funzione utilizzata per validare la form
function validaForm(){
    if(document.form.nome.value == ""){
        document.getElementById("nr").style.display = 'block';
        return false;
    }
    if(document.form.email.value == ""){
        document.getElementById("er").style.display = 'block';
        return false;
    }
    if(document.form.phone.value == ""){
        document.getElementById("pr").style.display = 'block';
        return false;
    }
    if(document.form.message.value == ""){
        document.getElementById("mr").style.display = 'block';
        return false;
    }

    return true;
}
//Funzione utilizzata per cambiare la navbar allo scroll della pagina
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("mainNav").classList.add("navbar-shrink");
      var links = document.getElementsByClassName("nav-link");
      for(var i = 0; i<links.length; i++)
            links[i].style.color = "black";
      document.getElementById("logo").style.background = "url('/assets/img/logo.png') no-repeat";
    } else {
        document.getElementById("mainNav").style.transition = '0.5s';
        document.getElementById("mainNav").classList.remove("navbar-shrink");
        var links = document.getElementsByClassName("nav-link");
        for(var i = 0; i<links.length; i++)
            links[i].style.color = null;
        document.getElementById("logo").style.background = null;
    }
}
window.onscroll = function() {scrollFunction()};
//Funzione utilizzata per nascondere le labels rosse quando clicchiamo sopra una casella di input
function hideLabels(){
    document.getElementById("mr").style.display = 'none';
    document.getElementById("pr").style.display = 'none';
    document.getElementById("er").style.display = 'none';
    document.getElementById("nr").style.display = 'none';
}
//Funzione invocata al caricamento della pagina
function loaded(){
    document.getElementById("name").addEventListener("click", hideLabels);
    document.getElementById("email").addEventListener("click", hideLabels);
    document.getElementById("phone").addEventListener("click", hideLabels);
    document.getElementById("message").addEventListener("click", hideLabels);
}





