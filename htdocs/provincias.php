<h2>provincias</h2>
<a href="/">Regresar</a>
<br/><br/>

<input type="submit" value="Insertar">


<?php
    include  'provincia/provincias.php';

    $provincias = listar_provincias();

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Codigo</th>';
    echo '<th>Nombre</th>';
    echo '</tr>';

    foreach($provincias as $indice => $provincia)
    {
        echo'<tr>';
        foreach($provincia as $columna => $valor)
        {
          echo "<td>$valor</td>";
        }
        echo'</tr>';
    }
    echo '</table>'

?>