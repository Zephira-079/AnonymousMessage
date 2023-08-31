<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        ::selection {
            background-color: #82756c;
            color: lavender;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f8f4eb;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #b5aaa1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #82756c;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #e0d6c8;
        }

        .container {
            text-align: center;
        }

        .header-primary {
            font-size: 48px;
            font-weight: bold;
            color: #2e2b2a;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .error-message {
            font-size: 24px;
            color: #2e2b2a;
            margin-bottom: 40px;
        }

        .back-link {
            font-size: 18px;
            color: #2e2b2a;
            text-decoration: none;
            background-color: #f8f4eb;
            padding: 10px 20px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #dcd7d2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="header-primary">Oops!</h1>
        <p class="error-message">The page you are looking for could not be found.</p>
        <a href="../index.php" class="back-link">Go Back to Home</a>
    </div>
</body>

</html>