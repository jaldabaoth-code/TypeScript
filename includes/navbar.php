<!-- get current URI -->
<?php
    
$uri = $_SERVER['REQUEST_URI'];
?>
<div class="topnav">
    <a class="<?= ($uri=='/index.php' || $uri=='/') ? 'active' : '' ?>" href="../">Home</a>
    <a class="<?= ($uri=='/discoveryOfTypeScript/discoveryOfTypeScript.php') ? 'active' : '' ?>" href="../discoveryOfTypeScript/discoveryOfTypeScript.php">Discovery of TypeScript</a>
    <a class="<?= ($uri=='/typeScriptToJava/typeScriptToJava.php') ? 'active' : '' ?>" href="../typeScriptToJava/typeScriptToJava.php">TypeScript to Java</a>
    <a class="<?= ($uri=='/installation/installation.php') ? 'active' : '' ?>" href="../installation/installation.php">Installation</a>
    <a class="<?= ($uri=='/moduleInstallation/moduleInstallation.php') ? 'active' : '' ?>" href="../moduleInstallation/moduleInstallation.php">Module installation</a>
    <a class="<?= ($uri=='/oop1/oop1.php') ? 'active' : '' ?>" href="../oop1/oop1.php">OOP 1</a>
    <a class="<?= ($uri=='/oop2/oop2.php') ? 'active' : '' ?>" href="../oop2/oop2.php">OOP 2</a>
</div>
