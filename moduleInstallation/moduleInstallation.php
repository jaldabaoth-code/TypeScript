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
        <title>Module Installation</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <main class="d-flex flex-column mx-3">
            <h2 class="mt-5 text-center">TypeScript Quest : Module Installation</h2>
            <hr>
            <h3 class="mt-3 text-center">Challenge/Goal</h3>

            <p class="mb-4 mt-4 h4">
                1) You will have to display in red color the configuration of the cpus of your machine
            </p>
            <p class="mb-4 h4">
                2) You will use chalk for the color and os for the information to display
            </p>
            <p class="mb-4 h4">
                3) Displaying '[object Object]' means displaying an object is not working
            </p>
            <div class="mb-4 d-flex flex-column">
                <p class="h4">
                    4) At first you have to turn it into a string with the JSON.stringify(X)
                </p>
                <div class="d-flex flex-column ms-5">
                    <div class="my-1 h5">1. Imports in ES6 the method allowing to have the information on the CPU</div>
                    <div class="my-1 h5">2. Correctly imports chalk in ES6</div>
                    <div class="my-1 h5">3. Converts the result of the method to retrieve CPU information into a string</div>
                    <div class="my-1 h5">4. Displays the result in red</div>
                </div>
            </div>
            <p class="mb-4 h4">
                5) Run --> <b>tsc moduleInstallation/moduleInstallation.ts</b> <-- in your terminal, it will create the files : "moduleInstallation.js" in the moduleInstallation folder 
            </p>
            <p class="mb-4 h4">
                6) To execute these files, run --> <b>node moduleInstallation/moduleInstallation.js</b> <-- in your terminal
            </p>
        </main>
        <script type="text/javascript" src="index.js"></script>
    </body>
</html>
