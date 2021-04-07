<?php
$ci=$_GET['ci'];
$color=$_GET['color'];
$nombre=$_GET['nombre'];
echo "<h1>BIENVENIDO  ".$nombre."</h1> ";
echo "<a href=home.php?ci=".$ci."&color=d60502&nombre=".$nombre.">";
echo "<button>Rojo</button>";
echo "</a>";
echo "<a href=home.php?ci=".$ci."&color=0232d6&nombre=".$nombre.">";
echo "<button>Azul</button>";
echo "</a>";
echo "<a href=home.php?ci=".$ci."&color=d6dd02&nombre=".$nombre.">";
echo "<button>Amarillo</button>";
echo "</a>";
echo "</br>";
echo "<a href=notas.php?ci=".$ci."&color=d6dd02&nombre=".$nombre.">";
echo "<button>NOTAS</button>";
echo "</a>";
        echo "<a href=index.php?ci=".$ci."&color=d60502&nombre=".$nombre.">";
        echo "<button>salir</button>";
        echo "</a>";
echo "<html>";
echo "	<head>";
echo "        <meta charset=".'utf-8'.">";
echo "		<title>Pagina de prueba</title>";


echo "</head>";
echo "<body>";
echo "</body";

?>

<?php
$nombre=$_GET['nombre'];
echo "</br>";
echo "<h1>Notas de ".$nombre."</h1>";

?>
<table border="3" bordercolor="020202" cellpadding="3" cellspacing="3" >
<tr>
    <td>SIGLAS </td>
    <td>NOTA 1 </td>
    <td>NOTA 2 </td>
    <td>NOTA 3 </td>
    <td>NOTA FINAL</td>
</tr>


<?php
$ci=$_GET['ci'];
include "conneccion.inc.php";
$consulta="SELECT * from nota where ci like $ci";
$resuk=mysqli_query($con, $consulta);
while ($fila = mysqli_fetch_array($resuk))
{
    echo "<tr>";
    echo "<td>".$fila['sigla']."    "."</td>";
    echo "<td>".$fila['nota1']."    "."</td>";
    echo "<td>".$fila['nota2']."    "."</td>";
    echo "<td>".$fila['nota3']."    "."</td>";
    echo "<td>".$fila['nota_final']."</td>";
    echo "</tr>";
}

echo "<style>";
echo "  body {background-color:".$color.";}";
echo "</style";

?>
</table>

