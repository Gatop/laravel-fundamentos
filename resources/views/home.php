<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
   <h1>Home</h1>
    <header>
        <nav>
            <a href="<?php echo route('home') ?>">home</a>
            <a href="<?php echo route('saludos', 'jorge') ?>">saludos</a>
            <a href="<?php echo route('contactanos') ?>">contactos</a>
        </nav>
    </header>
</body>
</html>