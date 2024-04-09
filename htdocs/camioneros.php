<h2>camioneros</h2>
<a href="/">Regresar</a>
<br/><br/>

<input type="submit" value="Insertar">


<?php
    include  'camionero/camioneros.php';

    $camioneros = listar_camioneros();

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>DNI</th>';
    echo '<th>Nombre</th>';
    echo '<th>Telefono</th>';
    echo '<th>Direccion</th>';
    echo '<th>Salario</th>';
    echo '<th>Poblacion</th>';
    echo '</tr>';

    foreach($camioneros as $indice => $camionero)
    {
        echo'<tr>';
        foreach($camionero as $columna => $valor)
        {
          echo "<td>$valor</td>";
        }
        echo'</tr>';
    }
    echo '</table>'

?>