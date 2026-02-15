<x-layout>
<div class="container my-5">
    <div class="row">

        @foreach ($cars as $car)
            <div class="col-12 col-md-4 mb-4"> 
                <div class="card h-100 shadow-sm">
                    
                    <img src="{{ Storage::url($car->img) }}" 
                         class="card-img-top" 
                         style="height: 200px; object-fit: cover;" 
                         alt="{{ $car->title }}">
                    
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold">{{ $car->title }}</h5>
                        <hr>
                        <p class="card-text"><strong>Marca:</strong> {{ $car->brand }}</p>
                        <p class="card-text"><strong>Modello:</strong> {{ $car->model }}</p>
                        
                        
                        <p class="card-text text-truncate">{{ $car->description }}</p>
                        
                        <div class="d-grid mt-3">
                            <a href="#" class="btn btn-outline-primary">Visualizza Dettagli</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach 

    </div> 
</div> 
</x-layout>