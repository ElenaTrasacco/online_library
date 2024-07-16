<x-layout>
  <div class="container-fluid">
    <div class="row">
        <div class="col-12 formCustom">
            <h2>Login:</h2>
        </div>
    </div>
</div>


  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6">
        <form class="mt-3 mx-5" action="{{route('login')}}" method="POST">
          @csrf
          <div class="form-group">  
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
      
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
          </div>
      
          <div class="d-flex justify-content-end">
          <button type="submit" class="btn mt-5">
              <div class="loader">
                  <div class="book"> Login
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
