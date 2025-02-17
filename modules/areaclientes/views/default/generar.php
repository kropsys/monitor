<?php 
use yii\helpers\Html; 
use yii\helpers\Url;
use app\modules\monitoreo\models\Impresoras;
use app\modules\monitoreo\models\Modelo;
use app\modules\monitoreo\models\Marca;
$ccosto = $dispositivo->getCentroCosto()->one(); 
$modelo = $dispositivo->getModelo0()->one();
$marca = $modelo->getMarca0()->one();
//var_dump($dispositivo);
?>
  <!--<?php print_r($asunto); ?>-->
<div class="row">
    <div class="col-md-12">
        <form action="#" id="ticket-form" method="post" enctype="multipart/form-data" class="ajaxformConfirm">


            <div class="form-row">
                <div class="alert alert-info">
                    <dl class="row">

  <dt class="col-sm-3">Numero de serie</dt>
  <dd class="col-sm-9" id="field-serie"><?php echo $dispositivo->serie; ?></dd>

  <dt class="col-sm-3">Modelo</dt>
  <dd class="col-sm-9" id="field-modelo">
    <?php echo $modelo->modelo; ?>
  </dd>

  <dt class="col-sm-3">Marca</dt>
  <dd class="col-sm-9" id="field-marca"><?php echo $marca->marca; ?></dd>
  <dt class="col-sm-3">Centro de costos</dt>
  <dd class="col-sm-9" id="field-centro"><?php echo $ccosto->nom_cc; ?></dd>
  <dt class="col-sm-3">Ubicacion</dt>
  <dd class="col-sm-9" id="field-ubicacion"><?php echo $dispositivo->ubicacion; ?></dd>

</dl>
    </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <label for="contacto">Solicitante (*)</label>
                    <input type="text" name="contacto" id="contacto" class="form-control" placeholder="Su nombre" required="required">
                </div>
                <div class="col-md-4">
                    <label for="contacto">Email (*)</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese su email" required="required">
                </div>
                <div class="col-md-4">
                    <label for="telefono">Numero de contacto  (*)</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" placeholder="numero telefonico"  required="required">
                </div>
            </div>
            <div class="form_row">
                            <div class="form_row">
                <div class="col-md-6">
                    <label for="tipo">Tipo</label>
                    <select name="tipo" id="tipo" class="form-control" required="required">
                        <option value="">SELECCIONE UNA OPCION</option>
                        <option value="1">Problemas de impresion</option>
                        <option value="2">Solicitud de insumos</option>
                        <option value="3">Problemas con Pc,Tablet </option>
                    </select>
                </div>
                <div class="col-md-6"></div>
            </div>

            <div class="form_row">
                            <div class="form_row">
                <div class="form-group col-md-6">
                        <label class=" control-label">Asunto</label>
                        <select type="text" class="form-control selectpicker" name="asunto" id="asunto" data-live-search="true" data-title="SELECCIONE ASUNTO" required="required">
                            <option value="">SELECCIONE UNA OPCION</option>
                       <!--    <?php foreach ($asunto as $c): ?>
                                <option value="<?php echo $c['asunto'] ?>") ?><?php echo $c['asunto'] ?></option>
                              <?php endforeach; ?>
                               <option value="<?php echo "OTRO" ?>") ?><?php echo "Otro" ?></option> -->
                        </select>
                     


                       </div>
                
                <!--<div class="col-md-6">
                    <label for="asunto">Asunto</label>
                    <input type="text" name="asunto" class="form-control" required="required" >
                </div>
                
            </div>-->



 <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
            <div class="form_row">
                <div class="col-md-12">
                    <label for="detalle">Descripcion. </label>
                    <textarea class="form-control" name="detalle" id="detalle" ></textarea>
                </div>
            </div>

            <div class="form_row">
                <div class="col-md-12">
                    <label for="adjuntos">De ser necesario puede adjuntar documentos que ayuden a solucionar su problema</label>
                    <input type="file" name="adjuntos[]" id="adjuntos" class="form-control" multiple="multiple"  accept="application/pdf,image/gif,image/jpeg,image/png">

                </div>
            </div>

            <input type="hidden" value="<?php echo $dispositivo->id;  ?>" name="printer_id">
<!-- 
            <div class="form-row">
                <div class="col-md-12">
                    <label for="adjuntos">De ser necesario puede adjuntar imagenes que ayuden a solucionar su problema.   </label>
                    <input type="file" name="adjuntos" class="form-control">
                </div>
            </div> -->
            <br>    
            <div class="form-row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-success" id="btn-create-ticket">Crear ticket</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    


</script>