@extends('layouts.layout')

@section('title','Alumnos')


@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href='#'>Editar Alumno</a>
                    
                </div>

                <div class="card-body">
                  
                    <table class="table">
                          <thead>
                            <tr>
                                <th >Matricula</th>
                                <th >Nombre</th>
                                <th >Apellido Paterno</th>
                                <th >Apellido Materno</th>
                                <th >Turno</th>
                                <th >Semestre</th>
                                <th >Grupo</th>
                              

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>
                                    c12912
                                </td>

                                <td>
                                    Luis
                                </td>

                                <td>
                                    Perez
                                </td>

                                <td>
                                    Perez
                                </td>

                                <td>
                                    Matutino
                                </td>
                                
                                <td>
                                    3
                                </td>

                                <td>
                                    B
                                </td>

                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Editar</a>
                                </td>
                            </tr>    
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection