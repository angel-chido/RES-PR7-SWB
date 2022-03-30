@extends('layouts.layout')

@section('title','Paginas')


@section('contenido')
<div class="container-fluid mt-3">
    <div class="row" style="height:100vh">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Editar Pagina</h1>

                    <form method="POST" action="#">
                        @csrf
                        @method('PUT')


                        <div class="form-row">
                            

                            <div class="form-group col-md-6">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre" value="home">
                            </div>



                            <div class="form-group col-md-6">
                                <label>Estado</label>
                                <select class="form-control" value="" name="clic_id">
                                        <option value="#" selected="select">Visible</option>
                                        <option value="#" selected="select">Invisible</option>
                                </select>
                            </div>

                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                </div>
                
                </form>

            </div>
        </div>
    </div>
</div>
@endsection