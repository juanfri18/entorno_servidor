<<<<<<< HEAD
<?php
$libros=[
    "ficcion"=>[
        ["Las doce reglas para vivir","j.petersom","2013",5],
        ["el principìto ","davinchi","2003",2]
    ],
    "no Ficcion"=>[
        ["resident evil","juan antonio","1999",4],
        ["cronicas vampiricas","estfeania grande","2002",9]
    ],
    "Ciencia"=>[
        ["Ben 10","Armando","1999",4],
        ["wally","Marcos fernandez","2010",1]
    ]
];
foreach($libros as $categoria=>$libros){
    $total_ejemplares_genero=0;
    echo "<table><tr><td>$categoria</td></tr>";
    foreach($libros as $libro){
        echo"<tr><td>".$libro[0]."</td>";
        echo"<td>".$libro[1]."</td>";
        echo"<td>".$libro[2]."</td>";
        echo"<td>".$libro[3]."</td>";
        echo "</tr>";
        $total_ejemplares_genero+=$libro[3];


    }        
    echo"<tr><td>total libros</td><td>".$total_ejemplares_genero."</td></tr>";
}
echo "</table>";
=======
<?php
$libros=[
    "ficcion"=>[
        ["Las doce reglas para vivir","j.petersom","2013",5],
        ["el principìto ","davinchi","2003",2]
    ],
    "no Ficcion"=>[
        ["resident evil","juan antonio","1999",4],
        ["cronicas vampiricas","estfeania grande","2002",9]
    ],
    "Ciencia"=>[
        ["Ben 10","Armando","1999",4],
        ["wally","Marcos fernandez","2010",1]
    ]
];
foreach($libros as $categoria=>$libros){
    $total_ejemplares_genero=0;
    echo "<table><tr><td>$categoria</td></tr>";
    foreach($libros as $libro){
        echo"<tr><td>".$libro[0]."</td>";
        echo"<td>".$libro[1]."</td>";
        echo"<td>".$libro[2]."</td>";
        echo"<td>".$libro[3]."</td>";
        echo "</tr>";
        $total_ejemplares_genero+=$libro[3];


    }        
    echo"<tr><td>total libros</td><td>".$total_ejemplares_genero."</td></tr>";
}
echo "</table>";
>>>>>>> 147114465e09abf56b763fc92836d0324a35af13
?>