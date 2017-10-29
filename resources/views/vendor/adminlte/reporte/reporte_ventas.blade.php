<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Reporte de Ventas</title>
<style>
 
 .col-md-12 {
    width: 100%;

} 

.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border: 3px solid #33b77e;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: #e7fbd8;
}

.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}

.box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin-left: 280px;
    line-height: 1;

}

.box-title {
    
    vertical-align: middle;
    background-color: #33b77e;
    color:#fff;
    border-radius: 3px;
    padding: 5px;
  

  }

.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 0px;

}


.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}


.table-bordered {
    border: 1px solid #f4f4f4;
}


.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 20px;
}

table {
    background-color: transparent;
}

 .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td, .table-bordered>tfoot>tr>td {
    border: 1px solid #f4f4f4;
}


.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
}

.bg-red {
    background-color: #dd4b39 !important;
}


</style>
    
</head>
<body>

<div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Reporte de Ventas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  
                </div>
              </div><!-- /.box -->
              <table class="table table-bordered">
                  <thead style="color:#337ab7;">
                     <tr>
                      <th style="width: 40px;text-align: center;">Código de Venta</th>
                      <th style="width: 40px;text-align: center;">ID_Cliente</th>
                      <th style="width: 40px;text-align: center;">Fecha</th>
                      <th style="width: 40px;text-align: center;">Dirección</th>
                      <th style="width: 40px;text-align: center;">Total</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody>
                  <?php foreach($data as $documentos){ ?>
                 
                    <tr>
                      <td style="text-align: center;"><?= $documentos->id; ?></td>
                      <td style="text-align: center;"><?= $documentos->Nombres; ?></td>
                      <td style="text-align: center;"><?= $documentos->fecha_pago ?></td>
                      <td style="text-align: center;"><?= $documentos->direccion_envio; ?></td>
                      <td style="text-align: center;"><?= $documentos->total; ?></td>
                    </tr>
                    
                    <?php  } ?>
                    
                  </tbody>

                  </table> 
              
            </div>


  
</body>
</html>
