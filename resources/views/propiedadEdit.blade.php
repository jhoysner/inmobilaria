@extends('layouts.app')
@section('content')

    <a href="{{route('propiedades.index')}}" style="float:right;margin-right:2em;">Atras</a>
    <h3 style="margin-left:2em">Editando Propiedad</h3>

    <form action="{{route('propiedades.update',$propiedad->id)}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{$propiedad->title}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="title">addres</label>
                            <input type="text" class="form-control" name="address" value="{{$propiedad->address}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Town</label>
                            <input type="text" class="form-control" name="town" value="{{$propiedad->town}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="title">Country</label>
                            <input type="text" class="form-control" name="country" value="{{$propiedad->country}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">State</label>
                            <select name="state_id"  class="form-control">
                                <option value="{{$stateUni->id}}">{{$stateUni->name}}</option>
                                <option>---------------</option>
                                 @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach  
                            </select>
                        </div>
        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="title">Facilities</label><br> 
                            <small>Si desea editar Seleccion de nuevo todas las Facilities asignasdas a esta propiedad</small><br>
                                <select name="facilities[]" id="example-getting-started" multiple="multiple">
                                    @foreach($facilities as $facilities) --}}
                                        <option value="{{$facilities->id}}">{{$facilities->name}}</option>
                                    @endforeach  --}}
                   
                                </select>
            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="title">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10" >{{$propiedad->description}}</textarea>
                  <label for=""><strong>Facilities check:</strong></label> <br>
                      <ul>
                        
                      @foreach($my_facilities as $my_facility)
                         <li>   
                            {{$my_facility}}<br>
                         </li>
                      @endforeach
                     </ul>
                </div>
            </div>

            <div class="form-group">
                  <button type="submit" class="btn btn-success" style="margin-top:2em;">SEND</button>
            </div>
        </div>
        
    </form>
@endsection