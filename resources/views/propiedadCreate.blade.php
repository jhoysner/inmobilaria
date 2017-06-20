@extends('layouts.app')
@section('content')

    <h3 style="margin-left:2em">Creando Propiedad</h3>
    <form action="{{route('propiedades.store')}}" method="POST">
        {{ csrf_field() }}

        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="col-md-6">
                            <label for="title">addres</label>
                            <input type="text" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Town</label>
                            <input type="text" class="form-control" name="town" required>
                        </div>
                        <div class="col-md-6">
                            <label for="title">Country</label>
                            <input type="text" class="form-control" name="country" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">State</label>
                            <select name="state_id"  class="form-control">
                                @foreach($states as $state)
                                <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach 
                            </select>
                        </div>
        
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Facilities</label><br>
                                <select name="facilities[]" id="example-getting-started" multiple="multiple">
                                    @foreach($facilities as $facilities)
                                    <option value="{{$facilities->id}}">{{$facilities->name}}</option>
                                    @endforeach 
                        
                                </select>
            
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="title">Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="10" value="description" required></textarea>
                </div>
            </div>

            <div class="form-group">
                  <button type="submit" class="btn btn-success" style="margin-top:2em;">SEND</button>
            </div>
        </div>
        
    </form>
@endsection