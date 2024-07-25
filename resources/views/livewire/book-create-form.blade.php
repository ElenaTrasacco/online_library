<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    
    <form class="mt-3 mx-5" wire:submit="store">
        
        <div class="form-group">
        <label for="cover" class="formTextSize">Cover</label>
        <input type="file" class="form-control form-control-lg" id="cover" placeholder="Enter cover" wire:model="cover">
        </div>
        @if ($cover)
        <div class="mb-3">
            <img src="{{$cover->temporaryUrl()}}" alt="" class="img-fluid">
        </div>
        @endif


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

        <div class="mb-3">
            <label for="category_id" class="form-label formTextSize">Genres</label>
        </div>
           @foreach ($categories as $category)
               <input type="checkbox" wire:model="category_id-{{$category->id}}" value="{{$category->id}}" id="{{$category->id}}">
               <label for="{{$category->id}}">{{$category->name}}</label>
           @endforeach
        

        {{-- <div class="mb-3">
            <label for="category_id" class="form-label formTextSize">Category</label>
            <select id="category_id" class="form-select form-select-lg" wire:model.live="category_id">
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>  --}}

        {{-- <div class="mb-3">
            <label for="category_id" class="form-label formTextSize">Category</label>
         </div>
            @foreach ($categories as $category)
            <input class="form-check-input form-check-input-lg" type="checkbox" id="categoria-{{$category->id}}" wire:model="category_id" value="{{$category->id}}">
            <label class="form-check-label" for="categoria-{{$category->id}}">{{$category->name}}</label>
            @endforeach --}}
           


        <div class="form-group">   
            <label for="year" class="formTextSize">Year</label>
            <input type="number" class="form-control form-control-lg" id="year" placeholder="Enter year" wire:model.live="year">
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
          
         
        @if(session('bookCreated'))
        <div class="alert alert-success mt-3">
            {{session('bookCreated')}} 
        </div>
        @endif       
      
        <div class="d-flex justify-content-end">
        <button type="submit" class="btn btnLogs mt-4"> Insert book
        <div class="loader">
        <div class="book"> 
        <div class="page"></div>
        <div class="page page2"></div>
        </div>
        </div> 
        </button>
        </div>


</div>
