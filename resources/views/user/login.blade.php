@section('layouts.app')
@section('contents')
  <!--==============================content================================-->
 
  <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-3">
              <h2 class="p3"><span class="color-1">Login</span> section </h2>
			  
              
			  <form id="form" method="POST" action="login">
          @csrf 
          
                <fieldset>

				   <label>
                    <input type="text" name="emailid" placeholder="emailid" >
                  </label>
                  <label>
                    <input type="text" name="password" placeholder="password" >
                  </label>
                 
                </fieldset>
              </form>
              
              <button type="submit" class="button top-3">Login</button> </div>
			  
       


@endsection