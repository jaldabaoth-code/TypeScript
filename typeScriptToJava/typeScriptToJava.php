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
        <title>TypeScript to Java</title>
    </head>
    <?php
        /* navbar included */
        include '../includes/navbar.php';
    ?>
    <body>
        <main class="d-flex flex-column mx-3">
            <h2 class="mt-5 text-center">TypeScript Quest : TypeScript to Java</h2>
            <hr>
            <h3 class="mt-3 text-center">Challenge/Goal</h3>
            <p class="mb-4 mt-4 h4">1) Clone this <a href="https://github.com/WildCodeSchool/quest-ts-to-java">repository</a></p>
            <p class="mb-4 h4">2) Convert all TypeScript classes to Java</p>
            <p class="mb-4 h4">3) You will not use java arrays instead of JS/TS arrays</p>
            <p class="mb-4 h4">4) For run the TypeScript file, type : --> <b>npx ts-node typeScriptToJava/user.ts</b> <-- in your terminal</p>
            <p class="mb-4 h4">5) Run : --> <b>cd typeScriptToJava/java/</b> <-- to go to the <b>typeScriptToJava/java</b> folder
            <p class="mb-4 h4">6) Run : --> <b>javac User.java</b> <-- in your terminal, it should not return an error and create 3 files in the <b>typeScriptToJava/java</b> folder : "User.class", "Photo.class" and "Address.class"</p>
            <p class="mb-4 h4">7) For run the "User.class" file, type : --> <b>java User</b> <-- in your terminal</p>
        </main>
    </body>
</html>
