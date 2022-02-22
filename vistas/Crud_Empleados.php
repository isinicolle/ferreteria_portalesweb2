<!DOCTYPE html>
<html lang="en">

<head>
  <title>Formulario de empleados</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="../bootstrap/css/crud_empleados.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" />
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
  <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

  <!-- Todo para la data table-->
<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
	<link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	

   <!-- DATA TABLE--> 
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css"/>	
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"/>
   <script type="text/javascript">
       $(document).ready(function() {
           //Asegurate que el id que le diste a la tabla sea igual al texto despues del simbolo #
           $('#userList').DataTable();
       } );
   </script>
<!-- Todo para las datepicker -->


<!-- Datepicker -->
<link href='../bootstrap/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
<script src='../bootstrap/js/bootstrap-datepicker.min.js' type='text/javascript'></script>

</head>

<body>
  <?php
    include_once('../plantilla/encabezado.php');
  ?>
      <div class="container">
    <div class="mx-auto main-section" id="myTab" role="tablist">
      <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
          <a class="nav-link active" id="list-tab" data-toggle="tab" href="#list" role="tab" aria-controls="list"
            aria-selected="false"><strong>Tabla</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="form-tab" data-toggle="tab" href="#form" role="tab" aria-controls="form"
            aria-selected="true"><strong>Formulario</strong></a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
          <div class="card">
            <div class="card-header">
              <h4>Lista de Empleados Ferreteria Maresa</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="userList" class="table table-bordered table-hover table-striped">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apellido</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Teléfono</th>
                      <th scope="col">Dirección</th>
                      <th scope="col">ID Ciudad</th>
                      <th scope="col">ID Rol</th>
                      <th scope="col">Fecha de nacimiento</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>David</td>
                      <td>Chavez</td>
                      <td>dchavez@gmail.com</td>
                      <td>22334455</td>
                      <td>Santa Lucia</td>
                      <td>01</td>
                      <td>Administardor</td>
                      <td>06/01/2001</td>
                      <td>Activo</td>
                      <td>
                        <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash"></i></a>
                      </td>
                      <tr>
                        <th scope="row">2</th>
                        <td>Alex</td>
                        <td>Sandoval</td>
                        <td>asandoval@gmail.com</td>
                        <td>22334455</td>
                        <td>Santa Lucia</td>
                        <td>01</td>
                        <td>Administardor</td>
                        <td>06/01/2001</td>
                        <td>Activo</td>
                        <td>
                          <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash"></i></a>
                        </td>
                        <tr>
                            <th scope="row">1</th>
                            <td>Isis</td>
                            <td>Zapata</td>
                            <td>izapata@gmail.com</td>
                            <td>22334455</td>
                            <td>Santa Lucia</td>
                            <td>02</td>
                            <td>Administardor</td>
                            <td>06/01/2001</td>
                            <td>Activo</td>
                            <td>
                              <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash"></i></a>
                            </td>
                            <tr>
                                <th scope="row">1</th>
                                <td>Andres</td>
                                <td>Martinez</td>
                                <td>amartinez@gmail.com</td>
                                <td>22334455</td>
                                <td>Santa Lucia</td>
                                <td>02</td>
                                <td>Administardor</td>
                                <td>06/01/2001</td>
                                <td>Activo</td>
                                <td>
                                  <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash"></i></a>
                                </td>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mike</td>
                                    <td>Moraquin</td>
                                    <td>amartinez@gmail.com</td>
                                    <td>22334455</td>
                                    <td>Santa Lucia</td>
                                    <td>02</td>
                                    <td>Administardor</td>
                                    <td>06/01/2001</td>
                                    <td>Activo</td>
                                    <td>
                                      <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-trash"></i></a>
                                    </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="form" role="tabpanel" aria-labelledby="form-tab">
          <div class="card">
            <div class="card-header">
              <h4>Nuevo Empleado</h4>
            </div>
            <div class="card-body">
              <form class="form needs-validation" id="form1" method="post" role="form" autocomplete="off" novalidate>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="text" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Apellido</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="text" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Correo electrónico</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="email" required>
                      <div class="valid-feedback">Correcto</div>
                      <div class="invalid-feedback">Ingrese datos correctos</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Teléfono</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="text" required>
                      <div class="valid-feedback">Correcto</div>
                      <div class="invalid-feedback">Ingrese datos correctos</div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Dirección</label>
                    <div class="col-lg-9">
                      <input class="form-control" type="text" required>
                      <div class="valid-feedback">Correcto</div>
                      <div class="invalid-feedback">Ingrese datos correctos</div>
                    </div>
                  </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Fecha de nacimiento</label>
                  <div class="col-lg-9">
                    <input id="datepicker"  class="form-control" required />
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                    <script type="text/javascript">
                      $(document).ready(function(){
                       $('#datepicker').datepicker({
                        "format": "mm-dd-yy",
                        "endDate": "-18y",
                        "keyboardNavigation": false
                       }); 
                      });
                      </script>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">¿Activo?</label>
                  <div class="col-lg-9">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">

                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Ciudad</label>
                  <div class="col-lg-9">
                    <select class="custom-select custom-select-lg mb-3" required>
                      <option selected disabled value="">Seleccione una opción</option>
                      <option value="1">Tegucigalpa</option>
                      <option value="2">San Pedro Sula</option>
                      <option value="3">Comayagua</option>
                    </select>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Rol</label>
                  <div class="col-lg-9">
                    <select class="custom-select custom-select-lg mb-3" required>
                      <option selected disabled value="">Seleccione una opción</option>
                      <option value="1">Administrador</option>
                      <option value="2">Empleado</option>
                    </select>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Correo electrónico</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="email" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Nombre de usuario</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="text" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="password" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-lg-3 col-form-label form-control-label">Confirmar contraseña</label>
                  <div class="col-lg-9">
                    <input class="form-control" type="password" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Ingrese datos correctos</div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12 text-center">
                    <button type="submit" class="btn btn-primary" value="Save Changes">Enviar</button>
                    <button type="reset" class="btn btn-secondary" value="Cancel">Cancelar</button>
                  </div>
                </div>
              </form>
              <script src="../bootstrap/js/validacion.js"></script>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
  include_once('./plantilla/pie.php');
?>