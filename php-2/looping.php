
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Looping</title>

</head>

<body>

    <h1>Berlatih Looping</h1>    
     <?php 

        echo "<h3>Soal No 1 Looping I Love PHP</h3>";

        echo "Looping pertama: <br><br>";

        for ($i = 0; $i <= 20; $i += 2) {
            echo "$i - I Love PHP <br><br>";
        }

        echo "Looping kedua: <br><br>";

        for ($i = 20; $i > 0; $i -= 2) {
            echo "$i - I Love PHP <br><br>";
        }

        /* 

            Soal No 2

            Loop Associative Array

            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. 

            Setiap item memiliki key yaitu : id, name, price, description, source. 

            

            Output: 

            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 

            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 

            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 

            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg )             
        Jangan ubah variabel $items        */


        $items = [

            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 

            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],

            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],

            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']

        ];

        

        // Output: 
        foreach ($items as $item) {

            $output = [
                "id" => [$item[0], 
                "name" => $item[1], 
                "price" => $item[2], 
                "description" => $item[2]]
            ];

            print_r($output);
        };

        

        echo "<h3>Soal No 3 Asterix </h3>";

        /* 

            Soal No 3

            Asterix 5x5

            Tampilkan dengan looping dan echo agar menghasilkan kumpulan bintang dengan pola seperti berikut: 

            Output: 

            * 

            * * 

            * * * 

            * * * * 

            * * * * *

        */

        echo "Asterix: ";

        for ($i = 0; $i <= 5; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }

            echo "<br><br>";
        }

        echo "<br>";        

    ?>
</body>

</html>