<?php
require_once __DIR__ . '/db.php';
$sql = "SELECT room_number, floor, id FROM stanze";
$result = $conn->query($sql);
$rooms = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $rooms[] = $row;
    }
}
$conn->close();
?>
<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Hotel Qualcosa</title>
</head>

<body>
    <!-- header -->
    <header>
        <h1>Hotel Qualcosa</h1>
    </header>
    <!-- END header -->

    <!-- main -->
    <main>
        <section>
        <?php if (!empty($rooms)) {?>
            <h2 class="sect-header">
                Le nostre stanze
            </h2>
            <table>
                <thead>
                    <tr>
                        <th>Numero Stanza</th>
                        <th>Piano</th>
                        <th abbr="dettagli stanza"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rooms as $room) { ?>

                        <tr>
                            <td>
                                <?php echo $room['room_number'] ?>
                            </td>
                            <td>
                                <?php echo $room['floor'] ?>
                            </td>
                            <td><a href="room.php?id=<?php echo $room['id'] ?>">Dettagli stanza</a></td>
                        </tr>
                    <?php } ?>
                    <tr class="shine">
                    <td>237</td>
                    <td>2</td>
                    <td><a href="https://media.movieassets.com/static/images/items/movies/posters/c5edd0b31f6018c399466968348da231.jpg">Dettagli stanza</a></td>
                    </tr>

                </tbody>
            </table>
            <?php } else { ?>
            <h2 class="alert">TRAGICO ERRORE INTERNO! RIPROVARE PIU TARDI</h2>
                <?php }?>
        </section>
    </main>
    <!-- END main -->
</body>
</html>