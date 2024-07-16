<x-layout>
  <div class="container-fluid">
    <div class="row">
        <div class="col-12 formCustom">
            <h2>Login:</h2>
        </div>
    </div>
</div>


  <div class="container-fluid mt-4 mx-5">
    <div class="row">
      <div class="col-12 col-md-6">
        <form class="mt-3 mx-5" action="{{route('login')}}" method="POST">
          @csrf
          <div class="form-group">  
          <label for="email" class="display-6">Email address</label>
          <input type="email" class="form-control form-control-lg" id="email" placeholder="Enter email" name="email">
        </div>
      
          <div class="form-group">
            <label for="password" class="display-6">Password</label>
            <input type="password" class="form-control form-control-lg" id="password" placeholder="Password" name="password" >
          </div>
      
          <div class="d-flex justify-content-end">
          <button type="submit" class="btn btnLogs mt-5">Login
              <div class="loader">
                  <div class="book"> 
                    <div class="page"></div>
                    <div class="page page2"></div>
                  </div>
                </div> 
          </button>
          </div>
        </form>
     
        </div>
      </div>
  </div> 
</x-layout>
