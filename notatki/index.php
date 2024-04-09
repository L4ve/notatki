<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wow</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Notki tego typu</h1>
        <form action="dodaj.php" method="post">
            <textarea name="note" placeholder="..." required></textarea>
            <button type="submit">Dodaj notke</button>
        </form>
        
        <h2>Tu mają być notki</h2>
        <div class="notes">
            <?php include("pokaz.php"); ?>
        </div>
    </div>
</body>
</html>
