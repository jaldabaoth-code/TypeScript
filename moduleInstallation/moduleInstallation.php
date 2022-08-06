<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <title>Module Installation</title>
    </head>
    <nav>
        <?php
            /* navbar included */
            include '../includes/navbar.php';
        ?>
    </nav>
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
                5) Run : --> <b>tsc moduleInstallation/moduleInstallation.ts</b> <-- in your terminal, it will create "moduleInstallation.js" files in the <b>moduleInstallation</b> folder
            </p>
            <p class="mb-4 h4">
                6) For run the "moduleInstallation.js" file, type : --> <b>node moduleInstallation/moduleInstallation.js</b> <-- in your terminal
            </p>
            <p class="mb-4 h4">
                7) For run the "moduleInstallation2.ts" file, type : --> <b>ts-node moduleInstallation/moduleInstallation2.ts</b> <-- in your terminal
            </p>
        </main>
    </body>
</html>
