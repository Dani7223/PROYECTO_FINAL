<?php

//Operaciones con la BBDD

require_once "LibreriaPDO.php";

$db = new DB("almacen_zapatos");

class Model
{
    public function mostrarOfertas($db)
    {
        $param = array();

        $param[':Oferta'] = 1;

        $consulta = "select * from producto where Oferta = :Oferta";

        $db->ConsultaDatos($consulta, $param);

        echo '
        <h3>Ofertas</h3>
        
        <div class="container">
        <div class="card-deck">';

        foreach ($db->filas as $fila) {
            echo '
                <div class="col-sm-4">
                    <div class="card text-center">';

            echo '<img src="data:image/jpg;base64,' . base64_encode($fila['Foto']) . '" class="card-img-top" alt="' . $fila['Modelo'] .  '">';
            echo '
                        <div class="card-body">';
            $param = array();

            $param[':Id'] = $fila['Id_Marca'];

            $consulta = "select * from marca where :Id = Id";   
            
            $precio = $fila['Precio']+10;

            echo '
                            <h5 class="card-title font-weight-bold">' . $fila['Modelo'] . '</h5>
                            <h5 class="precio-tachado">'. $precio .' €</h5>

                            <h5 class="card-title font-weight-bold">' . $fila['Precio'] . ' €</h5>
                            <p class="card-text">' . $fila['Descripcion'] . ' </p>
                            <a href="#" class="btn mx-auto" id="ver">Ver más</a>
                        </div>
                    </div>
                </div>';
        }
    }



    public function mostrarNovedades($db)
    {
        $param = array();

        $param[':Novedad'] = 1;

        $consulta = "select * from producto where Novedad = :Novedad";

        $db->ConsultaDatos($consulta, $param);

        echo '
        <h3 class="nov">Novedades</h3>
        
        <div class="container">
        <div class="card-deck">';

        foreach ($db->filas as $fila) {
            echo '
                <div class="col-sm-4">
                    <div class="card text-center">';

            echo '<img src="data:image/jpg;base64,' . base64_encode($fila['Foto']) . '" class="card-img-top" alt="' . $fila['Modelo'] .  '">';
            echo '
                        <div class="card-body">';
            $param = array();

            $param[':Id'] = $fila['Id_Marca'];

            $consulta = "select * from marca where :Id = Id";   
        

            echo '
                            <h5 class="card-title font-weight-bold">' . $fila['Modelo'] . ' <span class="badge badge-primary">Nuevo</span></h5> 
                            <h5 class="card-title font-weight-bold">' . $fila['Precio'] . ' €</h5>
                            <p class="card-text">' . $fila['Descripcion'] . ' </p>
                            
                            <a href="http://localhost/Almacen/Almacen_Zapatos/index.php?Zapa" class="btn mx-auto" id="ver">Ver más</a>
                        </div>
                    </div>
                </div>';
        }
    }
}
