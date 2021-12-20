<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Persona Editar</h1>

    <div >
    <form style="margin-top:20px;" method="post" action="{{url('persona/update',$persona->id)}}">
        @csrf  <!-- directiva -->
        @method('put')
        <div style="padding:15px">
            <!--  <labe for="">Nombre</label> -->
           <input type="text" name="nombre" value=" {{$persona->id}}">
           <!--  <input type="text" name="nombre" > -->
        </div>
    <div style="padding:15px">
             <labe for="">Nombre</label> 
           <input type="text" name="nombre" value=" {{$persona->nombre}}">
           <!--  <input type="text" name="nombre" > -->
        </div>
        <div style="padding:15px">
         <labe for="">Apellido</label>
        <input type="text" name="apellido" value=" {{$persona->apellido}}">
           
            <!-- <input type="text" name="apellido">  -->
        </div>
        <div style="padding:15px">
        <labe for="">Cedula</label>
        <input type="text" name="cedula" value=" {{$persona->cedula}}">
           <!--  
            <input type="text" name="cedula" > -->
        </div>
        <div style="padding:15px">
        <labe for="">tipo_persona</label>
        <input type="text" name="cedula" value=" {{$persona->tipo_persona}}">
           <!--  
            <input type="text" name="cedula" > -->
        </div>
        <div style="margin-top:10px; padding:15px;">
            <button type="submit">Editar</button>
        </div>
    </form>
 </div>



   
   
   
   


</body>
</html>