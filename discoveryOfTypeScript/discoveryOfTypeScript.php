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
            <p class="mb-2 mt-4 h4">
                1) The <b>JavaScript</b> code in <b>discovery/discovery.js</b> file should be transpiled as <b>TypeScript</b> code in <b>discovery/discovery.ts</b> file and then run without problems and display the same result in the console
            </p>
            <p class="mb-2 mt-4 h4">
                2) For JavaScript file run --> <b>node discovery/discovery.js</b> <-- in your terminal
            </p>
            <p class="mb-2 mt-4 h4">
                3) For TypeScript file run --> <b>npx ts-node discovery/discovery.ts</b> <-- in your terminal
            </p>
        </main>
    </body>
</html>
