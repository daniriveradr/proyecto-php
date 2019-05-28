<?php

    $hola = 'Hello php';

    $arreglo = [

        'keyStr1' => 'lado',
        0 => 'ledo',
    
        'keyStr2' => 'lido',
        1 => 'lodo',
        2 => 'ludo'
    
    ];


    $array = [
        "México" => "Monterrey", "Querétaro", "Guadalajara",
        'Colombia' => 'Bogotá', 'Quibdo', 'Cartegena',
        'USA' => 'New York', 'Texas', 'Miami',
        'Brasil' => 'Brasilia', 'Sao Paulo', 'Rio de Janerio',
        'España' => 'Barcelona', 'Madrid', 'Galicia',
    ];

    $paises = [
        'Venezuela' => [
            'Caracas', 'Maracaibo', 'San Cristóbal'
        ],
    
        'Colombia' => [
            'Bogotá', 'Cali', 'Medellín'
        ],
    
        'Argentina' => [
            'Buenos Aires', 'Córdoba', 'Mendoza'
        ],
    
        'Spain' => [
            'Madrid', 'Barcelona', 'Valencia'
        ],
    
        'Estados Unidos' => [
            'Nueva York', 'Los Angeles', 'San Francisco'
        ],
    ];

    $valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
    sort($valores);
    // $valores = array(23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61);

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ejericios</title>
    </head>
    <body>
        <h1>Hola estos son los Ejericios que he hecho dentro del curso de php</h1>        
        <p>Mi primer echo "<?php echo $hola ?>"</p>

        <h2>Ejericio 1</h2>
        <!-- Lado, ledo, lido, lodo, ludo,
        decirlo al revés lo dudo.
        Ludo, lodo, lido, ledo, lado,
        ¡Qué trabajo me ha costado! -->
        <h5>
            <?php
                echo "$arreglo[keyStr1], $arreglo[0], $arreglo[keyStr2], $arreglo[1], $arreglo[2],";
            ?>
            <p>Ahora al reves</p>
            <?php
                echo "$arreglo[2], $arreglo[1], $arreglo[keyStr2], $arreglo[0], $arreglo[keyStr1]";                
            ?>
            <p>¡Que Trabajo me ha costado!</p>
        </h5>

        <h2>Ejericio 2</h2>

        <h5>
            <?php
                foreach($paises as $pais => $ciudades){
                    //Se asigna el valor para cada pais
                    echo "<ul>$pais:  ";
                    foreach($ciudades as $ciudad){
                        // Y luego el valor asignado se guarda en la varuible de ciudades
                        echo "<li> $ciudad</li>";
                    }
                    echo "</ul>";
                }
            ?>               
        </h5>

        <h2>Ejericio 3</h2>

        <h5>
            <p>Lista de numero ordenados de menor a mayor usand "sort"</p>
            <?php
            foreach ($valores as $valor) {
                echo '<li>' . $valor . '</li>'; 
            }

            
            //    var_dump($valores);
            
            $bigger=[];
                $smaller = [];
                rsort($valores); //Ordenar arreglo de mayor a menor
                for($index=0; $index<3; $index++){
                $bigger[$index]= $valores[$index];
                }
                $size = count($valores);

                sort($valores); //Ordenar arreglo de menor a mayor
                for($index=0; $index<3; $index++){
                $smaller[$index]= $valores[$index];
                }

                echo "Los numero más grandes son: \r";
                foreach ($bigger as $value) {
                echo $value.' ';
                }

                echo "\rLos numero más pequeños son: \r";
                foreach ($smaller as $value) {
                echo $value.' ';
                }
            ?>            
        </h5>

        
        

    </body>
    </html>