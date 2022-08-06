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
        <title>OOP 2</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <main class="d-flex flex-column mx-3">
            <h2 class="mt-5 text-center">TypeScript Quest : OOP 2</h2>
            <hr>
            <h3 class="mt-3 text-center">Challenge/Goal</h3>
            <div class="mb-4 mt-4 d-flex flex-column">
                <p class="h4">
                    1) Here is a list of animals and possible actions on them
                </p>
                <div class="d-flex flex-column ms-5">
                    <div class="my-2 fw-bold h5">Animals :</div>
                    <div class="my-1 h6">* European cat (black)</div>
                    <div class="my-1 h6">* Carthusian cat</div>
                    <div class="my-1 h6">* Newfoundland dog (black)</div>
                    <div class="my-1 h6">* Moon moon dog</div>
                    <div class="my-1 h6">* Tit</div>
                    <div class="my-1 h6">* Merle (black)</div>
                    <div class="my-1 h6">* Tuna</div>
                    <div class="my-1 h6">* Shark</div>
                    <div class="my-1 h6">* Maggot</div>
                </div>
                <div class="d-flex flex-column mt-2 ms-5">
                    <div class="my-2 fw-bold h5">And possible actions :</div>
                    <div class="my-1 h6">* You can photograph all the animals</div>
                    <div class="my-1 h6">* All cats can meow</div>
                    <div class="my-1 h6">* All dogs can bark</div>
                    <div class="my-1 h6">* All birds can fly</div>
                    <div class="my-1 h6">* All fish can swim</div>
                    <div class="my-1 h6">* You can stroke all 4-legged animals</div>
                    <div class="my-1 h6">* We can feed all the animals of black color</div>
                </div>
            </div>
            <p class="mb-4 h4">
                2) You must create 7 functions (corresponding to the 7 actions), each taking the right type of parameter
            </p>
            <p class="mb-4 h4">
                3) You must therefore create above these 7 functions the corresponding types
            </p>
            <p class="mb-4 h4">
                4) Run --> <b>tsc oop2/oop2.ts</b> <-- in your terminal, it will create the file : "oop2.js" in the oop2 folder 
            </p>
            <p class="mb-4 h4">
                5) To execute the file, run --> <b>node oop2/oop2.js</b> <-- in your terminal
            </p>
        </main>
    </body>
</html>
