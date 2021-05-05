window.onload = function() {
    //Pour attacher un événement au formulaire ('contact-form'), qui se déclenche dès qu’on clique dessus et empêche l'action par défaut.
    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        // Pour générer un numéro pour la variable contact_number
        this.contact_number.value = Math.random() * 100000 | 0; 
        // 
        emailjs.sendForm('contact_service', 'contact_form', this)
            .then(function() {
                alert('Votre message a bien été envoyé !');
            }, function(error) {
                alert('Une erreur est survenue, veuillez réessayer...', error);
            });
        //Pour réactualiser le formulaire de contact    
        document.getElementById("contact-form").reset(); 
        
    });

}