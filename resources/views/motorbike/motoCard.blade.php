<x-layout>
<div class="container my-5">
    <div class="row">

        @foreach ($motorbikes as $motorbike)
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ Storage::url($motorbike->img) }}" 
                         class="card-img-top" 
                         style="height: 200px; object-fit: cover;" 
                         alt="{{ $motorbike->title }}">
                    
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold">{{ $motorbike->title }}</h5>
                        <hr>
                        <p class="card-text"><strong>Marca:</strong> {{ $motorbike->brand }}</p>
                        <p class="card-text"><strong>Modello:</strong> {{ $motorbike->model }}</p>
                        <p class="card-text"><strong>Cilindrata:</strong> {{ $motorbike->engine_cc }} cc</p>
                        <p class="card-text text-truncate">{{ $motorbike->description }}</p>
                        
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