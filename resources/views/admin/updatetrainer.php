@extends('layouts.app')

@section('content')


  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-3">
             
			  
            <div class="col-4">
            
              
			  <div class="col-4">
              <h2><span class="color-11">Book Gym Appointment</span> form</h2>
              <form id="form" method="post" action="{{url('edit doctor, $data->id')}}">
              
                @csrf
              
                @foreach ($trainerdata as $data)

               
                <fieldset>
                  <label>
                    <input type="text" name ="fullname" placeholder="Name" 
                    value={{$data->fullname}}>
                  </label>
                  <label>
                    <input type="text" name ="emailid" placeholder="Email" 
                    value={{$data->emailid}}>
                  </label>
				 
                  <label>
                    <input type="text" name="phone" placeholder="phone" 
                    value={{$data->phone}}>
                  </label>
                
                  <label>
                    <input type="text" name="trainertype" placeholder="trainertype" 
                    value={{$data->trainertype}}>
                  </label>
                  
                  
                </fieldset>
              </form>
			  
                  <div class="btnss"><button type="submit" class="button">signup</button></div>
            </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>



  @endsection
