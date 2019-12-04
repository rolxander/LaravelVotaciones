<table>
    <thead>
    <tr>
        <th>Registro</th>
        <th>Mesa</th>
        <th>Eleccion</th>
        <th>p1</th>
        <th>p2</th>
        <th>p3</th>
        <th>p4</th>
        <th>Estado</th>
    </tr>  
    </thead>
    <tbody>
        @foreach ($votaciones as $mesa)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$mesa->mesa}}</td>
                <td>{{$mesa->eleccion}}</td>
                <td>{{$mesa->p1}}</td>
                <td>{{$mesa->p2}}</td>
                <td>{{$mesa->p3}}</td>
                <td>{{$mesa->p4}}</td>
                <td>{{$mesa->estado}}</td>
                <td>
                <a href="{{'/votaciones/'.$mesa->id.'/edit'}}" >Editar</a> |
                   <form method="post" action ="{{'/votaciones/'.$mesa->id}}">
                   {{ csrf_field() }}
                   {{method_field('DELETE')}}
                   <button type="submit" onclick="return confirm('Desea borrar el registro')">Borrar</button>
                   </form>
            </tr>
        @endforeach
    </tbody>
</table>