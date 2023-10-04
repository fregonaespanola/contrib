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
            <tr class="impares">
                <td>16:00 - 16:55</td>
                <td class="cell"><?=$DIW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWEC?> <button class="boton">+</button></td>
                <td class="cell"><?=$DIW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWEC?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
            </tr>
            <tr class="pares">
                <td>16:55 - 17:50</td>
                <td class="cell"><?=$DIW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWEC?> <button class="boton">+</button></td>
                <td class="cell"><?=$DIW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWEC?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
            </tr>
            <tr class="impares">
                <td class="cell">17:50 - 18:45</td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
                <td class="cell"><?=$EIE_DAW?> <button class="boton">+</button></td>
                <td class="cell"><?=$EIE_DAW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DAW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
            </tr>
            <tr class="pares">
                <td>18:45 - 19:10</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr class="impares">
                <td class="cell">19:10 - 20:05</td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
                <td class="cell"><?=$EIE_DAW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DAW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWEC?> <button class="boton">+</button></td>
            </tr>
            <tr class="pares">
                <td>20:05 - 21:00</td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
                <td class="cell"><?=$DAW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DIW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWEC?> <button class="boton">+</button></td>
            </tr>
            <tr class="impares">
                <td>21:00 - 21:55</td>
                <td class="cell"><?=$ITGS?> <button class="boton">+</button></td>
                <td class="cell"><?=$DWES?> <button class="boton">+</button></td>
                <td class="cell"><?=$DAW?> <button class="boton">+</button></td>
                <td class="cell"><?=$DIW?> <button class="boton">+</button></td>
                <td class="cell"><?=$ITGS?> <button class="boton">+</button></td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>