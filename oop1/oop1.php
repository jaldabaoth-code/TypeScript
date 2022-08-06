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
        <title>OOP 1</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <main class="d-flex flex-column mx-3">
            <h2 class="mt-5 text-center">TypeScript Quest : OOP 1</h2>
            <hr>
            <h3 class="mt-3 text-center">Challenge/Goal</h3>
            <div class="mb-4 mt-4">
                <div class="d-flex flex-column">
                    <p class="h4">
                        1) You will have to write a class <b>Person</b>, allowing you to model a person. Each instance of the class <b>Person</b> will have two attributes, <b>name</b> and <b>age</b>.
                    </p>
                    <div class="me-2 ms-5 h5">
                        - The constructor of <b>Person</b> will need to initialize the <b>name</b> and <b>age</b> attributes from the parameters passed to it.
                    </div>
                    <div class="me-2 ms-5 h5">
                        - The class <b>Person</b> will also have two methods, <b>tellMyName</b> and <b>tellMyAge</b>, which will display respectively: <b>I am "name"</b> and <b>I am "age" years old</b> (replace <b>"name"</b> and <b>"age"</b> with the values of the <b>name</b> and <b>age</b> attributes respectively).
                    </div>
                </div>
            </div>
            <p class="mb-4 h4">
                2) Finally, to test your class, you will need to instantiate two people whose respective names and ages are "John" and 40, "Mary" and 35, and call the <b>tellMyName</b> and <b>tellMyAge</b> methods on each of these instances of <b>Person</b>.
            </p>
            <p class="mb-4 h4">
                3) Run --> <b>tsc oop1/oop1.ts</b> <-- in your terminal, it will create the file : "oop1.js" in the oop1 folder 
            </p>
            <p class="mb-4 h4">
                4) To execute the file, run --> <b>node oop1/oop1.js</b> <-- in your terminal
            </p>
        </main>
    </body>
</html>
