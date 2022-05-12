//Funzione utilizzata per validare la form
function validaForm(){
    if(document.form.name.value == ""){
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
//Funzione utilizzata per validare la form delle recensioni
function validaReview(){
    const f = document.getElementById("reviewForm");
    if(f.nome.value == ""){
        document.getElementById("nr2").style.display = 'block';
        return false;
    }
    if(f.messaggio.value == ""){
        document.getElementById("mr2").style.display = 'block';
        return false;
    }

    return true;
}

//Funzione utilizzata per validare l'iscrizione alla newsletter
function validaIscrizione(){
    const f = document.getElementById("newsletterForm");
    if(f.newsletter.value == ""){
        document.getElementById("em").style.display = 'block';
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
    document.getElementById("mr2").style.display = 'none';
    document.getElementById("nr2").style.display = 'none';
    document.getElementById("pr").style.display = 'none';
    document.getElementById("er").style.display = 'none';
    document.getElementById("nr").style.display = 'none';
}
//Funzione invocata al caricamento della pagina
function loaded(){
    document.getElementById("name").addEventListener("click", hideLabels);
    document.getElementById("nome").addEventListener("click", hideLabels);
    document.getElementById("email").addEventListener("click", hideLabels);
    document.getElementById("phone").addEventListener("click", hideLabels);
    document.getElementById("message").addEventListener("click", hideLabels);
    document.getElementById("messaggio").addEventListener("click", hideLabels);
}
//JQuery per i cards effects
function activateSlider(j){
    $("div#card" + j).on({
        mouseenter: function(){
        $("p#card" + j).slideDown();
        },
        mouseleave: function(){
        $("p#card" + j).slideUp();
        }
    });
}
$(document).ready(function(){
    for(var i = 1; i <= 6; i++)
        activateSlider(i.toString());
});

