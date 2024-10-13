@extends('app')
@section('contents')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Sobre a Empresa</h1>
                <p class="lead text-muted">Sou um profissional formado pelo Senac-DF, com experiência em desenvolvimento de
                    software e design gráfico. Ofereço serviços especializados em Laravel, PHP e design criativo, focados em
                    qualidade e inovação. Sempre em busca de aprimorar meus conhecimentos, trabalho de forma autônoma para
                    entregar soluções digitais sob medida para meus clientes.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>
    {{-- @include('gallery') --}}
@endsection
{{-- @push('scripts')
    <script>
        $(document).ready(function() {
            alert('Esse script é para página sobre!')
        });
    </script>
@endpush --}}
