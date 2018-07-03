<?php
// My modifications to mailer script from: <-- WHO'S ME?!?
// http://blog.teamtreehouse.com/create-ajax-contact-form
// Added input sanitizing to prevent injection
if (!function_exists('http_response_code')) {
	function http_response_code($code = NULL) {

		if ($code !== NULL) {

			switch ($code) {
				case 100: $text = 'Continue'; break;
				case 101: $text = 'Switching Protocols'; break;
				case 200: $text = 'OK'; break;
				case 201: $text = 'Created'; break;
				case 202: $text = 'Accepted'; break;
				case 203: $text = 'Non-Authoritative Information'; break;
				case 204: $text = 'No Content'; break;
				case 205: $text = 'Reset Content'; break;
				case 206: $text = 'Partial Content'; break;
				case 300: $text = 'Multiple Choices'; break;
				case 301: $text = 'Moved Permanently'; break;
				case 302: $text = 'Moved Temporarily'; break;
				case 303: $text = 'See Other'; break;
				case 304: $text = 'Not Modified'; break;
				case 305: $text = 'Use Proxy'; break;
				case 400: $text = 'Bad Request'; break;
				case 401: $text = 'Unauthorized'; break;
				case 402: $text = 'Payment Required'; break;
				case 403: $text = 'Forbidden'; break;
				case 404: $text = 'Not Found'; break;
				case 405: $text = 'Method Not Allowed'; break;
				case 406: $text = 'Not Acceptable'; break;
				case 407: $text = 'Proxy Authentication Required'; break;
				case 408: $text = 'Request Time-out'; break;
				case 409: $text = 'Conflict'; break;
				case 410: $text = 'Gone'; break;
				case 411: $text = 'Length Required'; break;
				case 412: $text = 'Precondition Failed'; break;
				case 413: $text = 'Request Entity Too Large'; break;
				case 414: $text = 'Request-URI Too Large'; break;
				case 415: $text = 'Unsupported Media Type'; break;
				case 500: $text = 'Internal Server Error'; break;
				case 501: $text = 'Not Implemented'; break;
				case 502: $text = 'Bad Gateway'; break;
				case 503: $text = 'Service Unavailable'; break;
				case 504: $text = 'Gateway Time-out'; break;
				case 505: $text = 'HTTP Version not supported'; break;
				default:
					exit('Unknown http status code "' . htmlentities($code) . '"');
					break;
			}

			$protocol = (isset($_SERVER['SERVER_PROTOCOL']) ? $_SERVER['SERVER_PROTOCOL'] : 'HTTP/1.0');

			header($protocol . ' ' . $code . ' ' . $text);

			$GLOBALS['http_response_code'] = $code;

		} else {

			$code = (isset($GLOBALS['http_response_code']) ? $GLOBALS['http_response_code'] : 200);

		}

		return $code;

	}
}

// Only process POST requests.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form_type = trim($_POST["form_type"]);

    $lang = $_POST["lang"];
    switch ($lang) {
        case 'en':
            $texts = en_Texts();
            break;
        case 'fr':
            $texts = fr_Texts();
            break;
        case 'es':
        default  :
            $texts = es_Texts();
            break;
    }

    switch ($form_type) {
        case 'quot':
            $message_structure = quot_structure($texts);
            break;
        case 'contact':
        default:
            $message_structure = contact_structure($texts);
            break;
    }

    // Build the email headers.
    $email_headers = "De: $name <".$message_structure['email'].">";

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    $recipient = "alejandro.abbud@yahoo.com";

    // Send the email.
    if (mail($recipient, $message_structure['subject'], $message_structure['email_content'], $email_headers)) {
        // Set a 200 (okay) response code.
        http_response_code(200);
        echo $texts[2];
    } else {
        // Set a 500 (internal server error) response code.
        http_response_code(500);
        echo $texts[3];
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo 'There was a problem while sending the message, please try again later.';
}

function contact_structure($texts) {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["msg"]);

    simple_validation($name,$message,$email,$texts);

    // Set the email subject.
    $subject = "Mensaje enviado desde la forma de contacto del sitio web de aatt";

    // Build the email content.
    $email_content = "\n";
    $email_content .= "Nombre: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "\nComentarios:\n$message\n";

    return $params = [
        'email' => $email,
        'subject' => $subject,
        'email_content' => $email_content
    ];
}

function quot_structure($texts) {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $people = trim($_POST["people"]);
    $days = trim($_POST["days"]);
    $cities = trim($_POST["cities"]);
    $services = trim($_POST["services"]);
    $contents = trim($_POST["contents"]);
    $budget = trim($_POST["budget"]);
    $message = trim($_POST["msg"]);

    simple_validation($name,$message,$email,$texts);

    // Set the email subject.
    $subject = "Mensaje enviado desde la forma de cotización del sitio web de aatt";

    // Build the email content.
    $email_content = "\n";
    $email_content .= "Nombre: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "No. personas: $people\n";
    $email_content .= "No. días: $days\n";
    $email_content .= "Ciudades: $cities\n";
    $email_content .= "Servicios: $services\n";
    $email_content .= "Contenidos: $contents\n";
    $email_content .= "Presupuesto: $budget\n";
    $email_content .= "\nComentarios:\n$message\n";

    return $params = [
        'email' => $email,
        'subject' => $subject,
        'email_content' => $email_content
    ];
}

function simple_validation($name,$message,$email,$texts) {
    // Check that data was sent to the mailer.
    if ( empty($name) OR (isset($message) ? empty($message) : false)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo $texts[0];
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo $texts[1];
        exit;
    }
}

function en_Texts() {
    return $texts = [
        0 => 'Oops! There was a problem while sending the message, please fill the form correctly and try again later',
        1 => 'Oops! There was a problem while sending the message. Please make sure your email has the following structure: mail@example.com',
        2 => 'Thank you! Your message was sent successfully.',
        3 => 'Oops! There was a problem while sending the message.',
    ];
}

function es_Texts() {
    return $texts = [
        0 => 'Oops! Hubo un error con su envío. Por favor complete la forma y envíela de nuevo.',
        1 => 'Oops! Hubo un error con su envío. Por favor asegúrese de que su correo siga el formato correo@ejemplo.com',
        2 => '¡Gracias! Su mensaje ha sido envíado.',
        3 => 'Oops! Hubo un error no pudimos mandar su mensaje.',
    ];
}

function fr_Texts() {
    return $texts = [
        0 => "Un problème est survenu lors de l'envoi du message. Remplissez le formulaire correctement et réessayez plus tard.",
        1 => "Un problème est survenu lors de l'envoi du message. Veuillez vous assurer que votre courriel a la structure suivante: mail@example.com",
        2 => "Je vous remercie! Votre message a bien été envoyé.",
        3 => "Un problème est survenu lors de l'envoi du message.",
    ];
}