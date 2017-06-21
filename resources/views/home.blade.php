@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10col-md-offset-2">
            <div class="panel panel-default">
                <a href="{{route('propiedades.create')}}" class="btn btn-info" style="margin:2em;">Crear Propiedad</a>   
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table">
                       <thead>
                       <tr>
                         <th>Id</th>
                         <th>Title</th>
                         <th>Description</th>
                         <th>Addres</th>
                         <th>Town</th>
                         <th>Country</th>
                         <th>state</th>
                         <th>Action</th>
                         <th></th>
                       </tr>       
                       </thead>
                       <tbody>
                        @foreach($propertis as $property)
                         <tr>
                             <td>{{$property->id}}</td> 
                             <td>{{$property->title}}</td> 
                             <td>{{$property->description}}</td> 
                             <td>{{$property->address}}</td> 
                             <td>{{$property->town}}</td> 
                             <td>{{$property->country}}</td> 
                             <td>
                               @if($property->state_id == 1)
                                   Activo
                               @elseif($property->state_id == 2)
                                   Inactivo
                               @else
                                  En revision
                               @endif
                             </td> 
                             <td style="inline-block">
                                <div class="btn-group">
                                    <a href="{{ route('propiedades.edit',$property->id )}}" class="btn btn-info btn-xs" > Editar</a>
                                    <form action="{{ route('propiedades.destroy',$property->id )}}" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-xs" >Eliminar</button>
                                    </form>
                                </div>
                             </td> 
                         </tr>
                        @endforeach 
                       </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
