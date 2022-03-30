@extends('layouts.layout')

@section('title','Alumnos')


@section('contenido')
<div class="container-fluid mt-3">
    <div class="row" style="height:100vh">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Registrar estudiante</h1>

                    <form method="POST" action="#">
                        @csrf
                        @method('PUT')


                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <label> Matricula</label>
                                <input type="text" class="form-control" name="matricula"
                                    value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Primer apellido</label>
                                <input type="text" class="form-control" name="apellido_p"
                                    value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Segundo apellido</label>
                                <input type="text" class="form-control" name="apellido_m"
                                    value="">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Turno</label>
                                <select class="form-control" value="" name="clic_id">
                                        <option value="#" selected="select">Matutino</option>
                                        <option value="#" selected="select">Vespertino</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Semestre</label>
                                <select class="form-control" value="" name="clic_id">
                                        <option value="#" selected="select">1</option>
                                        <option value="#" selected="select">2</option>
                                        <option value="#" selected="select">3</option>
                                        <option value="#" selected="select">4</option>
                                        <option value="#" selected="select">5</option>
                                        <option value="#" selected="select">6</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Grupo</label>
                                <select class="form-control" value="" name="clic_id">
                                        <option value="#" selected="select">a</option>
                                        <option value="#" selected="select">b</option>
                                        <option value="#" selected="select">c</option>
                                        <option value="#" selected="select">d</option>
                                </select>
                            </div>

                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                </div>
                
                </form>

            </div>
        </div>
    </div>
</div>
@endsection