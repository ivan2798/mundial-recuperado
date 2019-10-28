@extends('layouts.show') 
@section('tabla') 
<div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
  <div class="row schedule-item">
              <div class="col-md-2"><i>0</i></div>
              <div class="col-md-6">  
			  <div class="speaker">
                  <a href = "">_VER</a>
                </div>
                <h4>Nombre <span>  Region<span> </h4>
                <p>Equipo monotype a usar.</p>
              </div> 
			  <div>  
			  <div class="col-md-4">  
                <p>OPCIONES</p>
              </div> 
			</div>
    </div>   


    <div class="row schedule-item">
              <div class="col-md-2"><i>{{ $lideres->id}}</i></div>
              <div class="col-md-6">  
                <h4>{{ $lideres->nombre}}<span>  {{ $lideres->region}}<span> </h4>
                <p>{{ $lideres->elemento}}</p>
              </div> 
			  <div>  
			  <div class="col-md-4">  
                <a href="{{route('lideres.edit',$lideres->id)}}" class="btn btn-sm btn-warning">EDITAR</a> 
                <form action="{{route('lideres.destroy',$lideres->id)}}" method="POST">  
                    @csrf
                    @method('DELETE') 
                    
                    <button type = "submit" class = "btn  btn-danger">ELIMINAR</button>
                </form>
              </div> 
			</div>
            </div>


</div> 
@endsection 
