<?php
    header("X-Frame-Options: SAMEORIGIN");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnonymousMessage</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="toast-container"></div>
    <div class="container">
        <h1>
            <span class="header-primary">Anonymous</span>
            <span class="header-secondary">Message</span>
        </h1>
        <div class="user">
            <span>@rovic_snk</span>
        </div>
        <form action="php/main.php" method="post" enctype="multipart/form-data">
            <textarea name="message" id="message" maxlength="1024" placeholder="Text goes here..." spellcheck="false" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="js/main.js" async defer></script>
</body>
</html>
