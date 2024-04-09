<h2>camiones</h2>
<a href="/">Regresar</a>
<br/><br/>

<input type="submit" value="Insertar">


<?php
    include  'camion/camiones.php';

    $camiones = listar_camiones();

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Matricula</th>';
    echo '<th>Modelo</th>';
    echo '<th>Tipo</th>';
    echo '<th>Potencia</th>';
    echo '</tr>';

    foreach($camiones as $indice => $camion)
    {
        echo'<tr>';
        foreach($camion as $columna => $valor)
        {
          echo "<td>$valor</td>";
        }
        echo'</tr>';
    }
    echo '</table>'

?>