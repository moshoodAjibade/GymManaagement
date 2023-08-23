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
              <form id="form" method="post" action="">
              
                @csrf
              
                <fieldset>
                  <label>
                    <input type="text" name ="fullname" placeholder="Name" >
                  </label>
                  <label>
                    <input type="text" name ="emailid" placeholder="Email" >
                  </label>
				 
                  <label>
                    <input type="text" name="phone" placeholder="phone" >
                  </label>
                  
                  <label>
                    <input type="text" name="membershipplan" placeholder="membershipplan" >
                  </label>
                  <label>
                    <input type="text" name="trainertype" placeholder="trainertype" >
                  </label>
                  
                  <label>
                    <input type="date" name="date" placeholder="date" >
                  </label>
                  
                </fieldset>
              </form>
			  
                  <div class="btnss"><button type="submit" class="button">signup</button></div>
            </div>
             
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>



  @endsection
