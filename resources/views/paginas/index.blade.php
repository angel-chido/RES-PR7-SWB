@extends('layouts.layout')

@section('title','Paginas')


@section('contenido')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-primary" href='#'>Registrar nueva Pagina</a>
                    
                </div>

                <div class="card-body">
                  
                    <table class="table">
                          <thead>
                            <tr>
            
                              <th >Nombre de la Pagina</th>
                              <th >Status</th>
                              <th >Opciones</th>
                              

                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                                <td>
                                    home
                                </td>

                                <td>
                                    Visible
                                </td>

                                <td>
                                    <a href="#" class="btn btn-info btn-sm">Editar</a>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Eliminar" onclick="return confirm('deseas borrar?')">
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