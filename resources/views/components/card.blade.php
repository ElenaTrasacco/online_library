<div class="container card mb-3 cardWidth mt-3">
    <div class="row g-0">
      <div class="col-12 col-md-4 d-flex align-items-start mt-4">
        <img src="{{Storage::url($library->cover)}}" class="img-fluid rounded-start cardImg" alt="book">
      </div>

      <div class="col-12 col-md-8">
        <div class="card-body">
          <h4 class="card-title">{{$library->title}}</h4>
          <p class="card-text mt-2">{{$library->author}}</p>
          <p class="card-text mt-2">{{Str::limit($library->description)}}</p>
          <p class="card-text mt-2">Did you like this book?</p>
          <livewire:counter />


          <div class="d-flex justify-content-end">
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