<?php
	global $database;

	//Delete the entry in the database.
	$result = $database->query("DELETE FROM customer WHERE user_id = '" . $args["customer_id"] . "'");

	//Return a 404 response if no product was affected by this query or if an error occurred.
	if ($result !== true || $database->affected_rows == 0) {
		http_response_code(404);
		die("Kein solches Produkt.");
	}
	http_response_code(200);
    die("Der Benutzer würde erfolgreich gelöscht.");
?>