<div>
    {{-- Success is as dangerous as failure. --}}
    <button class="btn">
        <i class="fa-solid fa-heart fa-beat fa-2x mx-5" style="color: #f5deb3;" wire:click="increment">
            <p class="mx-4 numberLike">{{$value}}</p>
        </i>
    </button>

    {{-- only to test --}}
    {{-- <button wire:click="decrement">-1</button> --}}
</div>
