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
    $nama = "dika";
         echo $name[strlen($nama)-1] == "a";
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"]; // Lengkapi di sini
    $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray");

    echo print_r($kids);
    echo "<br>";
    echo print_r($adults);
    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    echo "Total Kids: " . count($kids); // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    // Lanjutkan
    for ($i=0; $i < count($kids); $i++) { 
    	echo "<li>$kids[$i]</li>";
    }

    echo "</ol>";

    echo "Total Adults: " . count($adults); // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    // Lanjutkan
    for ($i=0; $i < count($adults); $i++) { 
    	echo "<li>$adults[$i]</li>";
    }

    echo "</ol>";

    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"


            Output:
            Array
                (
                    [0] => Array
                        (
                            [Name] => Will Byers
                            [Age] => 12
                            [Aliases] => Will the Wise
                            [Status] => Alive
                        )

                    [1] => Array
                        (
                            [Name] => Mike Wheeler
                            [Age] => 12
                            [Aliases] => Dugeon Master
                            [Status] => Alive
                        )

                    [2] => Array
                        (
                            [Name] => Jim Hooper
                            [Age] => 43
                            [Aliases] => Chief Hopper
                            [Status] => Deceased
                        )

                    [3] => Array
                        (
                            [Name] => Eleven
                            [Age] => 12
                            [Aliases] => El
                            [Status] => Alive
                        )

                )
        */

         echo "<h3> Soal 3 </h3>";
         $data = [
         	[
         		"Nama" => "Will Byers",
         		"Age" => 12,
         		"Aliases" => "Will the Wise",
         		"Status" => "Alive"
         	],	
         	[
         		"Nama" => "Mike Wheeler",
         		"Age" => 12,
         		"Aliases" => "Dungeon Master",
         		"Status" => "Alive"
         	],
         	[
         		"Nama" => "Jim Hopper",
         		"Age" => 43,
         		"Aliases" => "Chief hopper",
         		"Status" => "Deceased"
         	],
         	[
         		"Nama" => "Eleven",
         		"Age" => 12,
         		"Aliases" => "El",
         		"Status" => "Alive"
         	],
         ];
         print_r($data);

         echo "<br>"
    ?>
</body>

</html>