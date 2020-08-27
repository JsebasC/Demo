

@section('title','Not Found')



@section('content')
@stop
<div class="main">

    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
          <div class="info">
          <div class="icon icon-danger">
                <i class="nc-icon nc-alert-circle-i"></i>
              </div>
            </div>
            <h2 class="title"> Esta página no existe.</h2>


            <h5 class="description">Es posible que la página se haya trasladado,
             la hayan eliminado o que la dirección esté mal escrita. Puedes volver a la página de inicio</h5>
            <br>
            <a href="{{url('/')}}" class="btn btn-danger btn-round">Inicio</a>
          </div>
        </div>
        <br/>
        <br/>
       
      </div>
    </div>
   

   
  </div>
  
