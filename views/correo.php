<?php
include '../include/header.php';
?>



    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enviar correo</title>
    </head>
    <body>
    <h1>Formulario para enviar correo</h1>
    <form action="sendMailHandler.php" method="post">
        <label for="to">Para:</label>
        <input type="email" name="to" id="to" required><br><br>

        <label for="subject">Asunto:</label>
        <input type="text" name="subject" id="subject" required><br><br>

        <label for="body">Mensaje:</label>
        <textarea name="body" id="body" rows="5" required></textarea><br><br>

        <button type="submit">Enviar correo</button>
    </form>
    </body><?php
