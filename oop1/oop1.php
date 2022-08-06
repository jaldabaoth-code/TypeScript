<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            /* head included */
            include '../includes/head.html';
        ?>
        <title>OOP 1</title>
    </head>
    <nav>
        <?php
            /* navbar included */
            include '../includes/navbar.php';
        ?>
    </nav>
    <body>
        <main class="d-flex flex-column mx-3">
            <h2 class="mt-5 text-center">TypeScript Quest : OOP 1</h2>
            <hr>
            <h3 class="mt-3 text-center">Challenge/Goal</h3>
            <div class="mb-4 mt-4">
                <div class="d-flex flex-column">
                    <p class="h4">
                        1) You will have to write a class <b>Person</b>, allowing you to model a person. Each instance of the class <b>Person</b> will have two attributes, <b>name</b> and <b>age</b>
                    </p>
                    <div class="me-2 ms-5 h5">
                        - The constructor of <b>Person</b> will need to initialize the <b>name</b> and <b>age</b> attributes from the parameters passed to it
                    </div>
                    <div class="me-2 ms-5 h5">
                        - The class <b>Person</b> will also have two methods, <b>tellMyName</b> and <b>tellMyAge</b>, which will display respectively: <b>I am "name"</b> and <b>I am "age" years old</b> (replace <b>"name"</b> and <b>"age"</b> with the values of the <b>name</b> and <b>age</b> attributes respectively)
                    </div>
                </div>
            </div>
            <p class="mb-4 h4">
                2) Finally, to test your class, you will need to instantiate two people whose respective names and ages are "John" and 40, "Mary" and 35, and call the <b>tellMyName</b> and <b>tellMyAge</b> methods on each of these instances of <b>Person</b>
            </p>
            <p class="mb-4 h4">
                3) Run : --> <b>tsc oop1/oop1.ts</b> <-- in your terminal, it will create the file "oop1.js" in the <b>oop1</b> folder 
            </p>
            <p class="mb-4 h4">
                4) For run the "oop1.js" file, type : --> <b>node oop1/oop1.js</b> <-- in your terminal
            </p>
            <p class="mb-4 h4">
                5) For run the "oop1.ts" file, type : --> <b>ts-node oop1/oop1.ts</b> <-- in your terminal
            </p>
        </main>
    </body>
</html>
