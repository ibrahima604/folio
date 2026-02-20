$('#contactForm').on('submit', function(e){
    e.preventDefault();
    $.ajax({
        url: 'contact.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response){
            $('#formMessage').text(response);
            $('#contactForm')[0].reset();
        },
        error: function(){
            $('#formMessage').text('Erreur lors de l\'envoi du message.');
        }
    });
});
