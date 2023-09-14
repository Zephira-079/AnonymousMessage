<?php
    require_once "./php/config.php";
    header("X-Frame-Options: SAMEORIGIN");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnonymousMessage</title>
    <link rel="stylesheet" href="css/styles.css">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Anonymouse Message @<?php echo get("author");?>">
    <meta property="og:description" content="Feel free to drop me a message if you'd like to chat or make a new friend. <?php echo get("author");?>">
    <meta property="og:image" content="./favicon/banner.png">
    
    <!-- Twitter Card Meta Tags (optional) -->
    <meta name="twitter:card" content="Anonymouse Message @<?php echo get("author");?>">
    <meta name="twitter:title" content="Anonymouse Message @<?php echo get("author");?>">
    <meta name="twitter:description" content="Feel free to drop me a message if you'd like to chat or make a new friend. <?php echo get("author");?>">
    <meta name="twitter:image" content="./favicon/banner.png">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="./favicon/icon.svg">
</head>

<body>
    <div id="toast-container"></div>
    <div class="container">
        <h1>
            <span class="header-primary">Anonymous</span>
            <span class="header-secondary">Message</span>
        </h1>
        <div class="user">
            <span>
                <?php
                    echo "@".get("author");
                ?>
            </span>
        </div>
        <form action="php/main.php" method="post" enctype="multipart/form-data">
            <textarea name="message" id="message" maxlength="1024" placeholder="Text goes here..." spellcheck="false" required></textarea>
            <button type="submit">Send</button>
        </form>
    </div>
    <script src="js/main.js" async defer></script>
</body>

</html>