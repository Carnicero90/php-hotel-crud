<?php
$room_id = $_GET["id"];
require_once __DIR__ . '/db.php';
$sql = "SELECT room_number, floor, beds FROM stanze WHERE id = $room_id";
$result = $conn->query($sql);
$details = [];
if ($result && $result->num_rows > 0) {
    $details = $result->fetch_assoc();
}
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Dettagli stanza</title>
</head>

<body>
    <header>
        <h1>Hotel Qualcosa</h1>
    </header>
    <main>
    <section>
    <?php if (!empty($details)) {?>
    <h2 class="sect-header">
        Dettagli stanza
    </h2>
    <table>
            <thead>
                <tr>
                    <th>Numero Stanza</th>
                    <th>Piano</th>
                    <th>Posti letto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <?php echo $details['room_number'] ?>
                    </td>
                    <td>
                        <?php echo $details['floor'] ?>
                    </td>
                    <td>
                        <?php echo $details['floor'] ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php } else { ?>
            <p>Stanza non trovata!</p>
        <?php } ?>
        <a href="index.php" class="btn">Torna a pagina principale</a>
    
    </section>
        
    </main>

</body>

</html>