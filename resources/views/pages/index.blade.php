@extends('layouts.app')

@section('content')
  <div class="indexpage" style="background-image: url('../images/index.jpg');background-size:cover;min-height:100vh;background-position:center;">
    <div class="container text-center">
      <div>
      <h1 class="text-white text-capitalize">welcome to  gamblers world</h1>
      <p class="text-white">we are determined to provide gamblers ample time 
        as they seek to benefit from their hustle. <br> we give you a shortcut to get to where you intend to be.we futher give out free odds. </p>
      </div>
        
        <div class="row justify-content-center mx-auto mt-5"> 
           <div class="col">
             <img src="../images/epl.jpg" width="200" alt="logo" class="rounded ">
           </div>
           <div class="col">
            <img src="../images/laliga.jpg" width="200" alt="logo" class="rounded">
          </div>
          <div class="col">
            <img src="../images/serie.jpg" width="200" alt="logo" class="rounded">
          </div>
       
         </div>
        <div class="row mx-auto mt-5">
          <div class="col">
            <img src="../images/ligue1.jpg" width="200" alt="logo" class="rounded">
          </div>
          <div class="col">
           <img src="../images/serie.jpg" width="200" alt="logo"  class="rounded"  >
          </div>
          <div class="col">
          <img src="../images/ligue1.jpg" width="200" alt="logo" class="rounded">
          </div>  
        </div>
    </div>
  </div>
@endsection

