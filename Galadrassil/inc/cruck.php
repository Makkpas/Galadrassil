<div class="garden_body">
    <ul class="garden_pots">
            <?php

            require './database.php';

            $arboles = $database->select('user_arbol',['id_arbol','maceta','id','id_usuario'],['id_usuario'=>$user['id']]);
            $contador=1;
            for($contador;$contador<11;$contador++){
              $arbolEncontrado = FALSE;
              foreach($arboles as $arbol){  
                if($arbol['maceta'] == $contador){
                  $arbolID = $arbol['id_arbol'];
                  $arbolEncontrado = TRUE;
                  break;
                }
              }
              if($arbolEncontrado){
              $arbolInfo = $database->select('arboles',['tipo','etapa', 'adulto'],['id'=>$arbolID]);
              $arbolDetalles = $database->select('cuidados_arbol',['tiempo_agua','tiempo_abono','agua','abono'],['id_arbol'=>$arbolID]);
              echo '<li class="garden_pots_item">';
              echo '<img onclick="mostrarPlanta(id,src)" data-id_unico="'.$arbolID.'" data-cuidados_abono="'.$arbolDetalles[0]['cuidados_abono'].'" data-cuidados_agua="'.$arbolDetalles[0]['cuidados_agua'].'" data-tiempo_actual="'.time().'" data-tiempo_abono="'.$arbolDetalles[0]['tiempo_abono'].'" data-tiempo_agua="'.$arbolDetalles[0]['tiempo_agua'].'" data-name="'.$arbolInfo[0]['tipo'].'" id="'.$contador.'" class="garden_pots_item_svg" src="./assets/svg/pot_'.$arbolInfo[0]['etapa'].'_'.$arbolInfo[0]['tipo'].'.svg" alt="Maceta">';
              echo '</li>';
            }else{
              echo '<li class="garden_pots_item"><img onclick="mostrarPlanta(id,src);seleccionarTipo(1)" data-name="" id="'.$contador.'" class="garden_pots_item_svg" src="./assets/svg/pot_0_BoxPot.svg" alt="Maceta"></li>';
            }
          }
            ?>
    </ul>
</div>
