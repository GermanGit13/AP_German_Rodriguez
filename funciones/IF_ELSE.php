<?php

function autodesk($model)
{

    if ($model == 'Autocad') {

        // dentro de este PRINT podremos picar código HTML, y será interpretado sin problema
        print <<<HERE
        <form method="post"> <!-- -->
                <h1>Versiones de Autocad</h1>
                <input type="radio" name="type" value="Autocad" checked>Autocad</input> <!-- Oculto la opcion con hidden y me aseguro que me llega marcado el type con checked para recogerlo en el $"POST" -->
                <br>
                <label for="lang">Versión</label>
                <select name="model" id="lang">
                    <option value="selecciona">Selecciona una Version</option>
                    <option value="Todas">Todas</option>
                    <option value="Autocad2019">Autocad 2019</option>
                    <option value="Autocad2020">Autocad 2020</option>
                    <option value="Autocad2022">Autocad 2022</option>
                </select>
                <BR>
                <BR>
                <BR>
                <button class="btn btn-dark" type="submit" name="SubmitA">Consultar</button>
        </form>
        

HERE;

    } else {
        print <<<HERE
        <form method="post"> <!-- -->
                <h1>Licencias de Revit</h1>
                <input type="radio" name="type" value="Revit" checked>Revit</input> <!-- Oculto la opcion con hidden y me aseguro que me llega marcado el type con checked para recogerlo en el $"POST" -->
                <br>
                <label for="lang">Versión</label>
                <select name="model" id="lang">
                    <option value="selecciona">Selecciona una Version</option>
                    <option value="Todas">Todas</option>
                    <option value="Revit2019">Revit 2019</option>
                    <option value="Revit2020">Revit 2020</option>
                    <option value="Revit2022">Revit 2022</option>
                </select>
                <BR>
                <BR>
                <BR>
                <button class="btn btn-dark" type="submit" name="SubmitA">Consultar</button>
        </form>

HERE;
    }
}

