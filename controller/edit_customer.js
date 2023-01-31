/*
 *Here are new variables definted
 */
 var anredeField = document.getElementById("anrede-field");
 var vornameField = document.getElementById("vorname-field");
 var nameField = document.getElementById("nachname-field");
 var geburtsdatumField = document.getElementById("geburtsdatum-field");
 var strasseField = document.getElementById("strasse-field");
 var haus_nrField = document.getElementById("haus_nr-field");
 var stadtField = document.getElementById("stadt-field");
 var plzField = document.getElementById("plz-field");
 var tele_firmaField = document.getElementById("tele_firma-field");
 var tele_privatField = document.getElementById("tele_privat-field");
 var emailField = document.getElementById("email-field");
 var editCusotmerRequest;
 
 /**
  * Here is the request of POST category requested
  */
 function onEditButtonPressed(event) {
     event.preventDefault();
 
     var customerData = {
        anrede: anredeField.value,
        vorname: vornameField.value,
        name: nameField.value,
        geburtsdatum: geburtsdatumField.value,
        strasse: strasseField.value,
        haus_nr: haus_nrField.value,
        stadt: stadtField.value,
        plz: plzField.value,
        tele_firma: tele_firmaField.value,
        tele_privat: tele_privatField.value,
        email: emailField.value
     };
     
     editProductRequest = new XMLHttpRequest();
     editProductRequest.open("PUT", "API/V1/Customer/" + window.location.hash.substring(1));
     editProductRequest.onreadystatechange = onEditResponsed;
     editProductRequest.send(JSON.stringify(customerData));   
 }
 
 /**
  * Here is the POST responsed
  */
 function onEditResponsed(event) {
     if (editProductRequest.readyState < 4) {
         return;
     }
     /**
      * The response Messages.
      */
     var responseStatus = editProductRequest.status;
 
     if (responseStatus == 200) {
        alert("Erfolgreich bearbeitet.");

     }
     else {
        alert("Error: Versuchen Sie noch einmal später.");
     }}
 
 /**
  * Here is the Button created and definted, when the button clicked, will the response responed
  */
 var finishButton = document.getElementById("customer-button");
 finishButton.addEventListener("click", onEditButtonPressed);