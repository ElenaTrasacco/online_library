<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{Storage::url($library->cover)}}" class="img-fluid rounded-start cardImg" alt="book">
        {{-- PROBLEMA: non vede l'img e non capisco perchè --}}
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h4 class="card-title">{{ $library->title }}</h4>
          <p class="card-text mt-5">{{ $library->author }}</p>
          <p class="card-text mt-5">{{Str::limit($library->description)}}</p>


          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btnLogs mt-2"> Read more
            <div class="loader">
            <div class="book"> 
            {{-- <div class="page"></div>
            <div class="page page2"></div> --}}
            </div>
            </div> 
            </button>
            </div>
        </div>
      </div>
    </div>
  </div>