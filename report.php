<?php

include 'config/config.php';

if(isset($_POST['send'])) {

$message = $_POST['message'];

$data = [

"content" =>
"📢 Nouveau report :\n" . $message

];

$options = [

'http' => [

'header' =>
"Content-type: application/json",

'method' => 'POST',

'content' => json_encode($data)

]

];

$context = stream_context_create($options);

file_get_contents(
$webhook_url,
false,
$context
);

echo "Report envoyé";

}

?>

<form method="POST">

<textarea
name="message"
placeholder="Explique ton problème">
</textarea>

<button type="submit" name="send">
Envoyer
</button>

</form>
