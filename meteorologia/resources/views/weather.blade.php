<!-- Detalles del tiempo -->
<h2>Detalles del Tiempo para {{ $postalCode }}</h2>
<p>Temperatura Actual: {{ $currentTemperature }}°C</p>
<p>Tiempo Actual: {{ $currentWeather }}</p>

<!-- Pronóstico de los próximos 5 días -->
<h2>Pronóstico para los Próximos 5 Días</h2>
<ul>
    @foreach ($next5DaysWeather as $day)
        <li>{{ $day->date }}: {{ $day->temperature }}°C - {{ $day->weather }}</li>
    @endforeach
</ul>

<!-- Top 5 Ciudades con la Temperatura Más Baja -->
<h2>Top 5 Ciudades con la Temperatura Más Baja</h2>
<ol>
    @foreach ($top5Cities as $city)
        <li>{{ $city->city }}: {{ $city->temperature }}°C</li>
    @endforeach
</ol>