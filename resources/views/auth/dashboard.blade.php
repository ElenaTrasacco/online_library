<x-layout>
    <div class="container-fluid d-flex justify-content-center">
        <div class="row">
            <div class="col-12 dashCustom">
                <h2>{{Auth::user()->name}}'s dashboard</h2>
                <img src="https://static.ffx.io/images/$zoom_0.384%2C$multiply_0.9735%2C$ratio_1.5%2C$width_756%2C$x_0%2C$y_0/t_crop_custom/q_86%2Cf_auto/23aebcc30ce72a57278086c1a901ec0d6c1d0919" alt="books with circle">
               
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <h4 class="mt-5">{{Auth::user()->name}}'s inserted books</h4>
            <div class="col-12 col-md-8 mt-5">
                <livewire:book-list />
            </div>
        </div>
    </div>

   

    <div class="container-fluid d-flex justify-content-end">
        <div class="row">
            <div class="col-12 mt-5">
                <h4>{{Auth::user()->name}}'s liked books</h4>
                <p>cards dei libri che piacciono allo user -> livewire</p>
            </div>
        </div>
    </div>
     
    </x-layout>