<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
 
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
    $adults = ["Hopper", "Nancy", "Joyce", "Jonathan", "Murray"];
    echo "<h3> Soal 2</h3>";
  
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids);
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li>";

    echo "</ol>";

    echo "Total Adults: " . count($adults); 
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li>";

    echo "</ol>";

        $dataMentah = [
            ["Name" => "Will Byers", "Age" => 12, "Aliases" => "Will the wise", "Status" => "Alive"],
            ["Name" => "Mike Wheeler", "Age" => 12, "Aliases" => "Dugeon Master", "Status" => "Alive"],
            ["Name" => "Jim Hooper", "Age" => 43, "Aliases" => "Chief Hopper", "Status" => "Deceased"],
            ["Name" => "Eleven", "Age" => 12, "Aliases" => "El", "Status" => "Alive"],

        ];

        $dataKarakter = [];

        foreach($dataMentah as $data) {
            $dataKarakter[] = [
                "Nama" => $data["Name"],
                "Age" => $data["Age"],
                "Aliases" => $data["Aliases"],
                "Status" => $data["Status"],
            ];
        }

        print_r($dataKarakter);
    ?>
</body>

</html>