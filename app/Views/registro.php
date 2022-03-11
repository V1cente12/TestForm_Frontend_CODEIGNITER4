<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="<?php echo base_url() ?>/public/css/bootstrap.min.css" rel="stylesheet" >
    <script src="<?php echo base_url() ?>/public/js/bootstrap.bundle.min.js" ></script>


    
    
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12 ">               
                <div class="shadow-lg p-3 mb-5 mt-4 bg-body rounded">                                    
                <center><div class="p-3 mb-2 bg-success text-white" >FORMULARIO</div></center>
                    <form class="row g-3 needs-validation" novalidate>
                    <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12" >
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" value="" required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Complete los datos</div>

                        </div>
                        
                        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12" >
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="apellido" value="" required>                    
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Complete los datos</div>

                        </div>  
                        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12" >
                        <label for="nombre" class="form-label" >Celular</label>
                        <input type="text" class="form-control" id="nombre" value="" name="tel" value="" maxlength="9" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  required>
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Complete los datos</div>

                        </div>                                          
                        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12" >
                        <label for="pais" class="form-label">Departamento</label>
                       <select class="form-select" id="pais" required>
                      <option selected disabled value="">Seleccione...</option>
                            <option>La Paz</option>
                            <option>Cochabamba</option>
                            <option>Santa Cruz</option>
                            <option>Beni</option>
                            <option>Potosi</option>
                            <option>Chuquisaca</option>
                            <option>Oruro</option>
                            <option>Pando</option>
                            <option>Tarija</option>
                        </select>                       
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Complete los datos</div>
                        </div> 

                        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12" >
                        <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nombre@ejemplo.com">                  
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Debe ser un correo válido</div>

                        </div>  

                        
                        
                        <div class="col-xxl-8 col-lg-8 col-md-8 col-sm-12" >
                        <label for="customRange1" class="form-label">Disponibilidad de tiempo</label>
                        <input type="range" class="form-range" id="customRange1">               
                        <div class="valid-feedback"></div>
                        <div class="invalid-feedback">Complete los datos</div>

                        </div>  


                      

                        
                          
                        <button type="submit" class="btn btn-outline-success">Enviar</button>                    
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>      
    (function () {
      'use strict'
      
      var forms = document.querySelectorAll('.needs-validation')
     
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {            
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }else{
              alert('FORMULARIO ENVIADO')
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
    </script>  
     
    

    <script src="<?php echo base_url() ?>/public/js/popper.min.js" ></script>
    <script src="<?php echo base_url() ?>/public/js/bootstrap.min.js" ></script>
</body>
</html>