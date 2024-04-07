@extends('layouts.app')

@section('content')

 @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! -->

<div class="jumbotron">
        <div class="container">
          <h3><b>VER POSTULACIONES A FONDOS</b></h3>
          <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique. This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
        </div>

        <hr>

        <div  class="container">
            
            <table id="registros" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>FOLIO</th>
                <th>NOMBRE PROYECTO</th>
                <th>FECHA DE ENVÍO</th>
                <th>ESTADO</th>
                <th>POSTULANTE</th>
                <th>INFLUENCIA</th>
                <th>VENCINDAD</th>
                <th>AFINIDAD MLC</th>
                <th>CALIFICACION</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>20987</td>
                <td>NOMBRE PROYECTO XXXX</td>
                <td>20/03/2024</td>
                <td>ENVIADO</td>
                <td>JUAN PERÉZ</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>10</td>
            </tr>
            <tr>
                <td>20987</td>
                <td>NOMBRE PROYECTO XXXX</td>
                <td>20/03/2024</td>
                <td>ENVIADO</td>
                <td>JUAN PERÉZ</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>10</td>
            </tr>
            <tr>
                <td>20987</td>
                <td>NOMBRE PROYECTO XXXX</td>
                <td>20/03/2024</td>
                <td>EN PROCESO</td>
                <td>JUAN PERÉZ</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>10</td>
            </tr>
        </tbody>
        <tfoot>
           <!--  <tr>
                <th>FOLIO</th>
                <th>NOMBRE PROYECTO</th>
                <th>FECHA DE ENVÍO</th>
                <th>ESTADO</th>
                <th>RESOUCIÓN</th>
            </tr> -->
        </tfoot>
    </table>

    </div>
</div>
     
<!-- Scripts -->
<script src="{{ asset('js/datatable.js') }}" defer></script>

@endsection
