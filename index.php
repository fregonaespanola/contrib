<?php
include('data.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Horario</title>
</head>
<body>
    <h1>Horario de clases DAW 23-24</h1>
    <div class="contenedor">
    <table>
            <tr>
                <th>HORAS</th>
                <th>LUNES</th>
                <th>MARTES</th>
                <th>MIÉRCOLES</th>
                <th>JUEVES</th>
                <th>VIERNES</th>
            </tr>
        <tbody>
            <tr>
                <td>16:00 - 16:55</td>
                <td><?=$DIW?></td>
                <td><?=$DWEC?></td>
                <td><?=$DIW?></td>
                <td><?=$DWEC?></td>
                <td><?=$DWES?></td>
            </tr>
            <tr>
                <td>16:55 - 17:50</td>
                <td><?=$DIW?></td>
                <td><?=$DWEC?></td>
                <td><?=$DIW?></td>
                <td><?=$DWEC?></td>
                <td><?=$DWES?></td>
            </tr>
            <tr>
                <td>17:50 - 18:45</td>
                <td><?=$DWES?></td>
                <td><?=$EIE_DAW?></td>
                <td><?=$EIE_DAW?></td>
                <td><?=$DAW?></td>
                <td><?=$DWES?></td>
            </tr>
            <tr>
                <td>18:45 - 19:10</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>19:10 - 20:05</td>
                <td><?=$DWES?></td>
                <td><?=$DWES?></td>
                <td><?=$EIE_DAW?></td>
                <td><?=$DAW?></td>
                <td><?=$DWEC?></td>
            </tr>
            <tr>
                <td>20:05 - 21:00</td>
                <td><?=$DWES?></td>
                <td><?=$DWES?></td>
                <td><?=$DAW?></td>
                <td><?=$DIW?></td>
                <td><?=$DWEC?></td>
            </tr>
            <tr>
                <td>21:00 - 21:55</td>
                <td><?=$ITGS?></td>
                <td><?=$DWES?></td>
                <td><?=$DAW?></td>
                <td><?=$DIW?></td>
                <td><?=$ITGS?></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>