//  Menu Burger
const menuBurger = document.getElementById("burger");
const navbar = document.getElementById("nav");



menuBurger.addEventListener('click',()=>{ 
    navbar.classList.toggle('active');
}) 



/*   Validation de formulaire
const formValid = document.getElementById('bouton');
const nom = document.getElementById('nom');
const tel = document.getElementById('tel');
const email = document.getElementById('email');
const message = document.getElementById('message');

formValid.addEventListener('click', validation);

function validation(){

if (nom.value == "")                                  
    { 
        alert("Mettez votre nom."); 
        nom.focus(); 
        return false; 
    }

if (email.value == "")                                   
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }        

if (email.value.indexOf("@", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    }   

if (email.value.indexOf(".", 0) < 0)                 
    { 
        alert("Mettez une adresse email valide."); 
        email.focus(); 
        return false; 
    } 

if (comment.value == "")                  
    { 
        alert("Écrivez un message."); 
        comment.focus(); 
        return false; 
    } 
    return true; 
}*/

