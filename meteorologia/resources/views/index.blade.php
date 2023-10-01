
<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <!-- Contenido página  index PHP -->
    @extends('layouts.app')
    @section('content')
    <main class="px-3">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Entérate del tiempo en la zona exacta que te interesa buscando por código postal.</h2>
                    <form action="{{ route('search') }}" method="get">
                        @csrf
                        <div class="Rectangle">
                            <label for="city">
                                Introduce el código postal
                            </label>
                            <input type="text" class="form-control mt-2" name="city" id="city"
                            placeholder="Código postal">
                            @error('city')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        @isset($notFound)
                        <div class="alert alert-danger mt-3" role="alert">
                            Ubicación no encontrada, intente de nuevo!
                        </div>
                        @endisset

                        <button type="submit" class="btn btn-success mt-3">Buscar</button>
                    </form>
                    <h2>¡Que la lluvia no te pare!</h2>
                </div>


                <div class="col-md-4">
                    @isset($ok)
                    <div class="col-md-12">
                        <h5>{{ $main }}</h5>
                        <h1>{{ intval($temp) }}&deg;C</h1>
                    </div>

                    <div class="col-md-12">
                        <h3>{{ $name }}, {{ $country }}</h3>
                    </div>

                    <div class="col-md-12">
                        <h4>{{ $weather }}</h4>
                    </div>
                    @endisset

                </div>
            </div>
        </div>

    </main>
    @endsection

</body>
</html>