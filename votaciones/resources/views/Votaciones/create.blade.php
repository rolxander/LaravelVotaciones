<form method="post" action="{{url('votaciones')}}">
    {{ csrf_field() }}
    <label for="Mesa">{{'Mesa'}}</label>
    <input type="text" name="mesa">
    <br>
    <label for="Eleccion">{{'Eleccion'}}</label>
    <input type="text" name="eleccion">
    <br>
    <label for="P1">{{'P1'}}</label>
    <input type="text" name="p1">
    <br>
    <label for="P2">{{'P2'}}</label>
    <input type="text" name="p2">
    <br>
    <label for="P3">{{'P3'}}</label>
    <input type="text" name="p3">
    <br>
    <label for="P4">{{'P4'}}</label>
    <input type="text" name="p4">
    <br>
    <label for="Estado">{{'Estado'}}</label>
    <input type="text" name="estado">
    <br>    
    <input type="submit" value="Registrar">

</form>