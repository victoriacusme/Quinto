<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 <table border="1">
 
     <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
        <th>Tipo</th>
        <th>Acciones</th>
     </tr>
     @foreach($personas as $p)
     <tr>
         <td>{{$p->nombre}}</td>
         <td>{{$p->apellido}}</td>
         <td>{{$p->cedula}}</td>
        <td>{{$p->tipo_persona}}</td>
        <td> <a href="{{url('/persona/editar',$p->id)}}">Editar</a>  |<a href="{{url('/persona/eliminar',$p->id)}}">Eliminar</a> </td>
</tr>
     @endforeach
 </table>


 <div >
    <form style="margin-top:20px;" method="post" action="{{url('/guardar/persona')}}">
        @csrf  <!-- directiva -->
    <div style="padding:15px">
           <!--  <labe for="">Nombre</label> -->
           <input type="text" name="nombre" placeholder="Ingrese su nombre">
           <!--  <input type="text" name="nombre" > -->
        </div>
        <div style="padding:15px">
        <input type="text" name="apellido" placeholder="Ingrese su apellido">
            <!-- <labe for="">Apellido</label>
            <input type="text" name="apellido"> -->
        </div>
        <div style="padding:15px">
        <input type="text" name="cedula" placeholder="Ingrese su cedula">
           <!--  <labe for="">Cedula</label>
            <input type="text" name="cedula" > -->
        </div>
        <div style="margin-top:10px; padding:15px;">
            <button type="submit">Guardar</button>
        </div>
    </form>
 </div>


</body>
</html>