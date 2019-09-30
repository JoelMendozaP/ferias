@extends('layouts.app')

@section('content')
<div class="mask rgba-orange-slight d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">
            <!-- textos responsives -->
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                    <div class="card">
                            <div class="card-body">
                              <h3 class="text-center orange-text" ><b>Registrar Feria</b></h3>
                              <hr>
                              <!-- formulario -->
                                <!-- Extended material form grid -->
                                    <form action="{{route('ferias.crear')}}" method="POST">
                                        @csrf

                                        @error('nombre')
                                            <div class="alert alert-danger">
                                                El nombre es obligatorio
                                            </div>
                                        @enderror
                                        <!-- Grid row -->
                                        <div class="form-row">

                                            <div class="col-md-12">
                                                        <!-- Material input -->
                                                        <div class="md-form form-group">
                                                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                                                        <label>Nombre de la feria</label>
                                                        </div>
                                                    </div>    
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="date" class="form-control" name="fechaInicio" value="{{ old('fechaInicio') }}">
                                            <label>Fecha de Inicio</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="date" class="form-control" name="fechaFin" value="{{ old('fechaFin') }}">
                                            <label for="inputPassword4MD">Fecha de Fin</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="time" value="08:00" class="form-control" name="HraInicio" value="{{ old('HraInicio') }}">
                                            <label for="inputPassword4MD">Hora Inicio</label>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="time" value="18:00" class="form-control" name="HraFin" value="{{ old('HraFin') }}">
                                            <label for="inputPassword4MD">Hora de Fin</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                        </div>
                                        <!-- Grid row -->
                                    
                                        <!-- Grid row -->
                                        <div class="row">
                                        <!-- Grid column -->
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="Ciudad" value="{{ old('Ciudad') }}">
                                            <label for="inputAddressMD">Ciudad</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="Localidad" value="{{ old('Localidad') }}">
                                            <label for="inputAddressMD">Localidad</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="Calle" value="{{ old('Calle') }}">
                                            <label for="inputAddressMD">Calle o Av.</label>
                                            </div>
                                        </div>

                                        
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-12">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}">
                                            <label for="inputAddress2MD">Descripcion de la feria</label>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="objetivo" value="{{ old('objetivo') }}">
                                            <label for="inputAddress2MD">Objetivo</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                        </div>
                                        <!-- Grid row -->
                                    
                                        <!-- Grid row -->
                                        <div class="form-row">
                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="number" class="form-control" name="nroStad" value="{{ old('nroStad') }}">
                                            <label for="inputCityMD">Cantidad de Stands</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                    
                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                            <!-- Material input -->
                                            <div class="md-form form-group">
                                            <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">
                                            <label for="inputZipMD">Numero de Referencia</label>
                                            </div>
                                        </div>
                                        <!-- Grid column -->
                                        </div>
                                        <!-- Grid row -->
                                        <div class="form-row text-center">
                                        <!-- Grid column -->
                                        <div class="col-md-6">
                                        <button type="submit" class="btn orange-gradient btn-orange btn-block  my-4">Registrar</button>
                                        </div>
                                        <div class="col-md-6 text-right ">
                                            <br> 
                                            <a href="#ventana1" class="btn-floating btn-lg btn-default" data-toggle="modal"> <i class="fas fa-map-marked-alt"></i></a>
                                            
                                                <!-- Central Modal Medium Success -->
                                                <div class="modal fade" id="ventana1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-notify modal-success" role="document">
                                                <!--Content-->
                                                <div class="modal-content ">
                                                    <!--Header-->
                                                    <div class="modal-header  orange">
                                                    <p class="heading lead ">Agregar Ubicacion con Google Map</p>

                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true" class="white-text">&times;</span>
                                                    </button>
                                                    </div>

                                                    <!--Body-->
                                                    <div class="modal-body">
                                                    <div class="text-center">
                                                        <!--Google map-->
                                                         <div id="map-container-google-2" class="z-depth-1-half map-container">
                                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.4410825319055!2d-68.13180778487465!3d-16.503815088613777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f206517d882d1%3A0x7efa3457461b1e6a!2sCarrera%20de%20Inform%C3%A1tica%20-%20UMSA!5e0!3m2!1ses-419!2sus!4v1568908953374!5m2!1ses-419!2sus" 
                                                                width="400" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                                        </div>
                                                        
                                                        <!--Google Maps-->
                                                    </div>
                                                    </div>

                                                    <!--Footer-->
                                                    <div class="modal-footer justify-content-center">
                                                    <a type="button" class="btn btn-orange">Guardar Ubicacion</a>
                                                    <a type="button" class="btn btn-outline-orange waves-effect" data-dismiss="modal">Cancelar</a>
                                                    </div>
                                                </div>
                                                <!--/.Content-->
                                                </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </form>
                                  <!-- Extended material form grid -->  
                            </div>
                          </div>
            </div>
            <div class="col-sm-3"></div>
          </div>
    </div>          
  </div>
<br><br><br><br><br><br><br>
@endsection


<!-- git add . -->
<!-- git comit -m "mensaje" -->
<!-- git push -->