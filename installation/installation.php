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
        <title>Installation</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <main class="d-flex flex-column mx-3">
            <h2 class="mt-5 text-center">TypeScript Quest : Installation</h2>
            <hr>
            <h3 class="mt-3 text-center">Challenge/Goal</h3>
            <p class="mb-4 mt-4 h4">
                1) The goal is to fix TypeScript errors and make the code work
            </p>
            <p class="mb-4 h4">
                2) The file has an <b>interface</b> or a <b>type</b> which one describes User
            </p>
            <p class="mb-4 h4">
                3) The function <b>prettyPrintWilder</b> is correctly typed
            </p>
            <p class="mb-4 h4">
                4) The constant <b>wilders</b> is correctly typed
            </p>
            <p class="mb-4 h4">
                5) Run --> <b>tsc installation/basic.ts installation/challenge.ts installation/hello.ts</b> <-- in your terminal, it will create 3 files in the installation folder : "basic.js", "challenge.js" and "hello.js"
            </p>
            <p class="mb-4 h4">
                6) To execute these files, run --> <b>node installation/basic.js installation/challenge.js installation/hello.js</b> <-- in your terminal
            </p>
        </main>
    </body>
</html>
