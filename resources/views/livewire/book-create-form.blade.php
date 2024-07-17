<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    
    <form class="mt-3 mx-5 " action="{{route('book.create')}}" method="POST" wire:submit="store">
            @if(session('bookCreated'))
            <div class="alert alert-success">
                {{session('bookCreated')}} 
            </div>
            @endif
 @csrf
        <div class="form-group">
        <label for="cover" class="formTextSize">Cover</label>
        <input type="file" class="form-control form-control-lg" id="cover" placeholder="Enter cover" wire:model="cover">
        </div>


        <div class="form-group">
        <label for="title" class="formTextSize">Title</label>
        <input type="text" class="form-control form-control-lg" id="title" placeholder="Enter title" wire:model.live="title">
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>


        <div class="form-group">   
        <label for="author" class="formTextSize">Author</label>
        <input type="text" class="form-control form-control-lg" id="author" placeholder="Enter author" wire:model.live="author">
        @error('author')
        <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="form-group">   
            <label for="year" class="formTextSize">Year</label>
            <input type="integer" class="form-control form-control-lg" id="year" placeholder="Enter year" wire:model.live="year">
            @error('year')
             <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

        <div class="form-group">   
            <label for="description" class="formTextSize">Description</label>
            <textarea wire:model.live="description" id="description" class="form-control form-control-lg" placeholder="Enter a description"></textarea>
            @error('description')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div>
          
              
      
        <div class="d-flex justify-content-end">
        <button type="submit" class="btn btnLogs mt-5"> Insert book
        <div class="loader">
        <div class="book"> 
        <div class="page"></div>
        <div class="page page2"></div>
        </div>
        </div> 
        </button>
        </div>


</div>
