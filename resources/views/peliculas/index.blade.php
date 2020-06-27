<h1>Lista de Peliculas</h1>
<table>
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Clasificación</th>
            <th>Idioma</th>
            <th>Categoría</th>
            <th>Actores</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($peliculas as $p)
            <tr>
                <td> {{ $p->title  }} </td>
                <td> {{ $p->rating  }} </td>
                <td> {{  $p->idioma()->first()->name }} </td>
                <td>  
                    @foreach ($p->categorias()->getresults() as $categoria)
                        {{ $categoria->name  }} 
                    @endforeach
                </td>
                <td>
                    @foreach ($p->actores()->getresults() as $actores)
                    {{ $actores->first_name }} ,
                    {{-- {{  $actores->last_name }} , --}}
                    @endforeach
                </td>
            </tr>
        @endforeach
    </tbody>


</table>