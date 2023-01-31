
<h1>Erstelle neue Kundendaten</h1>
<!--Here is the table created for the list of the products.-->
<table class="new-nachname-product">
    <tr>
        <td class="new-nachname-product">
            <br>
            <label for="anrede-field">Anrede</label>
            <br>
            <input type="text" id="anrede-field">
            <br>
            <br>
            <label for="vorname-field">Vorname</label>
            <br>
            <input type="text" id="vorname-field">
            <br>
            <br>
            <label for="nachname-field">Nachname</label>
            <br>
            <input type="text" id="nachname-field">
            <br>
            <br>
            <label for="geburtsdatum-field">Geburtsdatum</label>
            <br>
            <input type="date" id="geburtsdatum-field">
            <br>
            <br>
            <label for="strasse-field">Strasse</label>
            <br>
            <input type="text" id="strasse-field">
            <br>
            <br>
            <label for="haus_nr-field">Haus Nr.</label>
            <br>
            <input type="number" id="haus_nr-field">
            <br>
            <br>
            <label for="stadt-field">Stadt</label>
            <br>
            <input type="text" id="stadt-field">
            <br>
            <br>
            <label for="plz-field">PLZ</label>
            <br>
            <input type="number" id="plz-field">
            <br>
            <br>
            <label for="tele_firma-field">Telefonnummer Firma</label>
            <br>
            <input type="number" id="tele_firma-field">
            <br>
            <br>
            <label for="tele_privat-field">Telefonnummer Privat</label>
            <br>
            <input type="number" id="tele_privat-field">
            <br>
            <br>
            <label for="email-field">Email</label>
            <br>
            <input type="text" id="email-field">
            <br>
        </td>
    </tr>
</table>
<br>
<!--Here is the button created for the create_product.-->
<a href="daten.php"><button class="finish" id="customer-button">Finish</button></a>
<!--Here will the create_product php connected with the JavaScript.-->
<script src="controller/new_customer.js"></script>
