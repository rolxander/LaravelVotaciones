Editar

<form method="post" action="{{url('/votaciones/'.$mesa->id)}}">
    {{ csrf_field() }}
    {{ method_field('PATCH')}}
    <label for="Mesa">{{'Mesa'}}</label>
    <input type="text" name="mesa" value="{{$mesa->mesa}}">
    <br>
    <label for="Eleccion">{{'Eleccion'}}</label>
    <input type="text" name="eleccion" value="{{$mesa->eleccion}}">
    <br>
    <label for="P1">{{'P1'}}</label>
    <input type="text" name="p1" value="{{$mesa->p1}}">
    <br>
    <label for="P2">{{'P2'}}</label>
    <input type="text" name="p2" value="{{$mesa->p2}}">
    <br>
    <label for="P3">{{'P3'}}</label>
    <input type="text" name="p3" value="{{$mesa->p3}}">
    <br>
    <label for="P4">{{'P4'}}</label>
    <input type="text" name="p4" value="{{$mesa->p4}}">
    <br>
    <label for="Estado">{{'Estado'}}</label>
    <input type="text" name="estado"value="{{$mesa->estado}}">
    <br>    
    <input type="submit" value="Editar">
</form>