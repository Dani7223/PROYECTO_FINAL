<?php

//Operaciones con la BBDD

require_once "LibreriaPDO.php";

$db = new DB("almacen_zapatos");

class Model
{
    public function datosBBDD($db)
    {
        $param = array();

        $consulta = "select * from producto";

        $db->ConsultaDatos($consulta, $param);

        foreach ($db->filas as $fila) {
            echo ' <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">';

            echo '<img src="data:image/jpg;base64,' . base64_encode($fila['Foto']) . '" class="card-img-top" alt="' . $fila['Modelo'] .  '">';
            echo '
                        <div class="card-body">';
            $param = array();

            $param[':Id'] = $fila['Id_Marca'];

            $consulta = "select * from marca where :Id = Id";            

            echo '
                            <h5 class="card-title">' . $fila['Modelo'] . '</h5>
                            <p class="card-text">' . $fila['Descripcion'] . '</p>
                            <a href="#" class="btn mx-auto" id="ver">Ver más</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Zapatos para hombres</h5>
                            <p class="card-text">Los mejores zapatillas </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
}
