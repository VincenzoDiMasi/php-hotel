<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <!-- BOOTSRAP -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-3">
  <h1 class="text-center">List of Hotels</h1>
  <form action="" method="get">
    <label for="has_parking">Mostra solo hotel con parcheggio:</label>
    <input type="checkbox" name="has_parking" value="1">
    <input type="submit" value="Vai!">
  </form>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Description</th>
        <th scope="col">Parking</th>
        <th scope="col">Vote</th>
        <th scope="col">Distance to center</th>
      </tr>
    </thead>
    <tbody>
      <?php


        // Verifico se l'utente ha selezionato l'opzione "Mostra solo hotel con parcheggio"
        if (isset($_GET["has_parking"])) {
        $HotelsWithParking = true;
        } else {
        $HotelsWithParking = false;
        }

        // Riporto l'array di oggetti
        $hotels = [
            [
                'name' => 'Hotel Belvedere',
                'description' => 'Hotel Belvedere Descrizione',
                'parking' => true,
                'vote' => 4,
                'distance_to_center' => 10.4
            ],
            [
                'name' => 'Hotel Futuro',
                'description' => 'Hotel Futuro Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 2
            ],
            [
                'name' => 'Hotel Rivamare',
                'description' => 'Hotel Rivamare Descrizione',
                'parking' => false,
                'vote' => 1,
                'distance_to_center' => 1
            ],
            [
                'name' => 'Hotel Bellavista',
                'description' => 'Hotel Bellavista Descrizione',
                'parking' => false,
                'vote' => 5,
                'distance_to_center' => 5.5
            ],
            [
                'name' => 'Hotel Milano',
                'description' => 'Hotel Milano Descrizione',
                'parking' => true,
                'vote' => 2,
                'distance_to_center' => 50
            ],
        ];

        // Genero un foreach che gira sull'array hotels
        foreach ($hotels as $hotel) {
        // Se l'utente ha selezionato l'opzione "Mostra solo hotel con parcheggio"
        // e l'hotel non ha un parcheggio, saltiamo questa iterazione del ciclo
        if ($HotelsWithParking && !$hotel["parking"]) {
            continue;
        }
        // Stampo in pagina nella tabella
        echo "<tr>";
        echo "<td>" . $hotel["name"] . "</td>";
        echo "<td>" . $hotel["description"] . "</td>";
        echo "<td>" . ($hotel["parking"] ? "Yes" : "No") . "</td>";
        echo "<td>" . $hotel["vote"] . "</td>";
        echo "<td>" . $hotel["distance_to_center"] . "</td>";
        echo "</tr>";
        }



        
      ?>
    </tbody>
  </table>
</div>

</body>
</html>