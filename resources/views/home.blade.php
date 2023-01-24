@extends('layouts.app')

@section('content')
    <section class="bg-green">
        <div class="container py-5">
            <div class="row g-4">
                @foreach ($train as $trainElement)
                    <div class="col-3">
                        <div class="card bg-dark text-light">
                            <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                            <div class="card-body p-0 py-3">
                                <h3 class="card-title">Azienda: {{ $trainElement->azienda }}</h3>
                                <h5>Stazione di partenza: {{ $trainElement->stazione_partenza }}</h5>
                                <h5>Stazione di arrivo: {{ $trainElement->stazione_arrivo }}</h5>
                                <h6>Orario Partenza: {{ $trainElement->orario_partenza }}</h6>
                                <h6>Orario Arrivo: {{ $trainElement->orario_arrivo }}</h6>
                                <h6>Numero Treno: {{ $trainElement->codice_treno }}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection


</body>

</html>
