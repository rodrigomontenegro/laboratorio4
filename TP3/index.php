<?php
    $myNumber = 123;
    $myNumberString = "123";

    echo "a) Sumando las dos variables nos retorna esto: ";
    echo $myNumber + $myNumberString;
    echo "<br>b) Al hacer la suma inversa retorna: ";
    echo $myNumberString + $myNumber;
    echo "<br> c) Con un punto entre medio queda: $myNumber.$myNumberString: <br>Esto ocurre porque se concatenan. Con el + se suman.";
    echo "<br><br> 2) a)";
    if(1=="1"){
        echo "It's right";
    }
    echo "<br>b)";
    if(1==="1"){
        echo "It's right";
    }
    echo "<br>c)";
    if(!null){
        echo "It's right";
    }
    echo "<br>d)";
    if(!false){
        echo "It's right";
    }
    echo "<br>e)";
    if(""){
        echo "It's right";
    }
    echo "<br>f)";
    if(" "){
        echo "It's right";
    }
    echo "<br>g)";
    if("tested"){
        echo "It's right";
    }
    echo "<br>h)";
    if(1-1){
        echo "It's right";
    }
    echo "<br><br>3)";

    function multiplicar($a,$b){
        echo $a*$b;
    }
    
    function dividir($a,$b){
        if ($b==0) {
            echo "No se puede dividir por 0";
        } else {
            echo $a/$b;
        }
    }

    multiplicar(4,5);
    echo "<br>";
    dividir(1,0);
    echo "<br>";
    dividir(15,5);
    echo "<br>";

    echo "<br>4)";
    $array = [
        1 => "first value", 
        "1" => "second value", 
        1.2 => "third value", 
        true => "fourth value", 
        1+0.2 => "fifth value", 
        false !== null => "sixth value", 
    ];
    
    $arrayLength = count($array);
    echo "Largo del arreglo: " . $arrayLength;

    foreach ($array as $key => $value) {
        echo "<br>" . $key . $value;
    }
    echo "<br> Este arreglo es de largo 1 porque las claves que se usan para los otros valores no son correctas. Tienen que ser enteros.";

    echo "<br><br> 5)";

    $people = [
        ['name' => 'Martin', 'age' => 18, 'sex'=>'m'],
        ['name' => 'Martina', 'age' => 25, 'sex'=>'f'],
        ['name' => 'Pablo', 'age' => 27, 'sex'=>'m'],
        ['name' => 'Paula', 'age' => 12, 'sex'=>'f'],
        ['name' => 'Alexis', 'age' => 8, 'sex'=>'m'],
        ['name' => 'Jacinta', 'age' => 33, 'sex'=>'f'],
        ['name' => 'Epifanía', 'age' => 45, 'sex'=>'f'],
    ];
    
    
    $mayores = 0;
    $mujeresMenores = 0;
    foreach ($people as $key => $value) {
        if($value['age'] >= 18){
            $mayores ++;
        } elseif ($value['sex']=='f') {
            $mujeresMenores++;
        }
    }
    echo $mayores . " " . $mujeresMenores;

    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody>';
                foreach ($people as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $value['name'] . "</td>";
                    echo "<td>" . $value['age'] . "</td>";
                    echo "<td>" . $value['sex'] . "</td>";
                    echo "</tr>";
                }
            echo'</tbody>
            <tfoot>
                <tr>
                    <td colspan="3">' . "Mayores: " . $mayores . ". Mujeres menores: " . $mujeresMenores . '</td>
                </tr>
            </tfoot>
        </table>
    </body>
    </html>';

    $arrayReducido = array(
            $people[0]['age'],
            $people[1]['age'],
            $people[2]['age'],
            $people[3]['age'],
            $people[4]['age'],
            $people[5]['age'],
            $people[6]['age'],
    );

    echo "<br> Array reducido:<br>";
    for ($i=0; $i < count($arrayReducido); $i++) { 
        echo $arrayReducido[$i] . "<br>";
    }

    echo "<br> 6) El día de la semana es: " . date("l");
    if(date("l") == "Sunday" || date("l") == "Saturday"){
        echo "<br>Es fin de semana";
    }

    echo "<br><br>7)"
    
?>