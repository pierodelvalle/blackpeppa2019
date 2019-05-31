$("#form").submit(function(event) {

   /* stop form from submitting normally */
   event.preventDefault();
   /* get some values from elements on the page: */
   var $form = $( this ),
       $submit = $form.find( 'input[type="submit"]' ),
       name_value = $form.find( 'input[name="name"]' ).val(),
       phone_value = $form.find( 'input[name="phone"]' ).val(),
       business_value = $form.find( 'input[name="business"]' ).val(),
       email_value = $form.find( 'input[name="email"]' ).val(),
       message_value = $form.find( 'textarea[name="message"]' ).val(),
       page_value = $form.find( 'input[name="page"]' ).val(),

       url = $form.attr('action');

   /* Send the data using post */

   var posting = $.post( url, { 
                     name: name_value,
                     phone: phone_value,
                     business: business_value,
                     email: email_value,
                     message : message_value,
                     page: page_value
                 });

   posting.done(function(data) {

       /* Put the results in a div */

       //$( "#form-end" ).html(data);
       //$( "#form-end" ).show();

       /* Change the button text. */
       $submit.val('¡Listo! Su mensaje ha sido enviado.');  

       /* Disable the button. */
       $submit.attr("disabled", true);

   });

});