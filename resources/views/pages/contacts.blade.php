@extends('layouts.app')

@section('content')
<div class="contact-section bg-dark" style="background-image: url('../images/neymar.jpg');background-size:cover;min-height:100vh;background-position:center;" >
  <div class="container">
      <div class="contact-header text-center">
          <h1 class="text-capitalize text-white"><strong>get in touch</strong></h1>
      </div>
      <div class="row justify-content-between">
          <div class="col-md-6">
              <form action="" class="text-capitalize  contform" >
                  
                  <div class="form-group ">
                      <label for="name">name</label><br>
                      <input type="text" class="form-control" placeholder="Enter your name">
                  </div>
                  <div>
                      <label for="mail">Email</label><br>
                      <input type="text" class="form-control" placeholder="Your email">
                  </div>
                  <div>
                      <label for="message">message</label><br>
                      <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Enter text"></textarea>
                  </div>
                  <input type="submit" value="submit" class="btn-primary btn btnn btn-primary:hover">
              </form> 
          </div>

          <div class="col-md-4">
              <div class="contact-info">
                  <div class="d-block mb-5">
                      <span class="d-block text-uppercase ">Email</span>
                      <a href="paulyech96@gmail.com">paulyech96@gmail.com</a>
                  </div>
                  <div class="d-block mb-5">
                      <span class="d-block  text-uppercase " >phone</span>
                      <a href="0715474420">+254 715 474 420</a>
                  </div>
                  <div class="d-block ">
                      <span class="d-block text-uppercase ">address</span>
                      <address class="text-capitalize ">nairobi, kenya</address>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection

