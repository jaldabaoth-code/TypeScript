<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/styles/styles.css">
        <link rel="stylesheet" href="../assets/styles/navbar.css">
        <link rel="icon" href="./favicon.ico" type="image/x-icon">
        <title>Discovery of TypeScript</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <main class="d-flex flex-column mx-3">
            <h2 class="mt-5 text-center">TypeScript Quest : Discovery of TypeScript</h2>
            <hr>
            <h3 class="mt-3 text-center">Challenge/Goal</h3>
            <p class="mb-4 mt-4 h4">
                1) The <b>JavaScript</b> code in <b>discoveryOfTypeScript/discoveryOfTypeScript.js</b> file should be transpiled as <b>TypeScript</b> code in <b>discoveryOfTypeScript/discoveryOfTypeScript.ts</b> file and then run without problems and display the same result in the console
            </p>
            <p class="mb-4 h4">
                2) For run "discoveryOfTypeScript.js" file, type : --> <b>node discoveryOfTypeScript/discoveryOfTypeScript.js</b> <-- in your terminal
            </p>
            <p class="mb-4 h4">
                3) For run "discoveryOfTypeScript.ts" file, type : --> <b>ts-node discoveryOfTypeScript/discoveryOfTypeScript.ts</b> <-- in your terminal
            </p>
        </main>
    </body>
</html>
