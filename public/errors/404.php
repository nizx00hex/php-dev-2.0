<?php

http_response_code(404);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 | SocialFort</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #000;
            color: #fff;
            font-family: system-ui, sans-serif;
            min-height: 100vh;
            display: grid;
            place-items: center;
        }

        .container {
            text-align: center;
            padding: 24px;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
        }

        h1 {
            font-size: clamp(80px, 20vw, 120px);
            margin: 20px 0 0;
            letter-spacing: -6px;
        }

        h2 {
            font-size: 24px;
        }

        p {
            color: #a3a3a3;
            line-height: 1.6;
        }

        a {
            display: inline-block;
            background: #fff;
            color: #000;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: background 0.2s;
        }

        a:hover {
            background: #ccc;
        }
    </style>
</head>
<body>

    <main class="container">
        <div class="brand">SocialFort.</div>

        <h1>404</h1>

        <h2>Page not found</h2>

        <p>
            The page you're looking for doesn't exist
            or is no longer available.
        </p>

        <a href="/">Back to home</a>
    </main>

</body>
</html>