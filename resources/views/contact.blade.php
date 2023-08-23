@extends('layouts.app')

@section('content')


  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="box-shadow">
          <div class="wrap block-2">
            <div class="col-3">
              <h2><span class="color-1">Find</span> us</h2>
              <div class="map img-border">
                <iframe src=""></iframe>
              </div>
              <dl>
                <dt class="color-1"><strong>Kedleston Road,<br>
                  Derby, DE22 .</strong></dt>
                <dd><span>Freephone:</span>0 800 559 7980</dd>
                <dd><span>Telephone:</span>+44 7453 60335</dd>
                <dd><span>Fax:</span>+1 700 889 9098</dd>
                <dd><span>E-mail:</span><a href="#" class="link">mail@unimail.derby.ac.uk</a></dd>
              </dl>
            </div>
            <div class="col-4">
              <h2><span class="color-1">Contact</span> form</h2>
              <form id="form" method="post" action="/contact">
              @csrf
                <fieldset>
                  <label>
                    <input type="text" name="fullname"  placeholder="fullname" >
                  </label>
                  <label>
                    <input type="text" name="emailid" placeholder="email" >
                  </label>
                  <label>
                    <textarea name="message" placeholder="message" >message</textarea>
                  </label>
                  <div class="btns"><button type="submit" class="button">register</button></div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>

    
@endsection
