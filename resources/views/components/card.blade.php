<div class="container card mb-3 cardWidth">
    <div class="row g-0">
      <div class="col-md-4 d-flex align-items-center">
        <img src="{{Storage::url($library->cover)}}" class="img-fluid rounded-start cardImg" alt="book">
      </div>

      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">{{$library->title}}</h4>
          <p class="card-text mt-5">{{$library->author}}</p>
          <p class="card-text mt-5">{{Str::limit($library->description)}}</p>
          <p class="card-text mt-5">Did you like this book?
            <a href="">
              <i class="fa-solid fa-heart fa-beat mx-2" style="color: #f5deb3;"></i>
            </a>
          </p>
          


          <div class="d-flex justify-content-start">
            <a href="{{route('book.show', $library)}}">
              <button type="submit" class="btn btnLogs mt-2"> Read more
                <div class="loader">
                <div class="book"> 
                </div>
                </div> 
                </button>
            </a>
            
            </div>



        </div>
      </div>
    </div>
  </div>