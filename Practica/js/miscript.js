$(document).ready(function(){
    imagenes = 
    [
        "img/img1.jpg",
        "img/img3.jpg",
        "img/img4.jpg"
    ];
    let contador = 0;
    let lent = imagenes.length -1;
    $('#btn-primera').click(function(){
        contador=0;
        $('#foto').attr("src",imagenes[contador]);
        $('.descripcion').text(imagenes[contador])
    });
    $('#btn-siguiente').click(function(){
        contador ++;
        if(contador <= 2){
            $('#foto').attr("src",imagenes[contador]);
            $('.descripcion').text(imagenes[contador])
        } else{
            contador =0;
            $('#foto').attr("src",imagenes[contador]);
            $('.descripcion').text(imagenes[contador])
        }
        
    });
    $('#btn-anterior').click(function(){
        contador --;
        if(contador >=0){
            $('#foto').attr("src",imagenes[contador]);
            $('.descripcion').text(imagenes[contador])
        }else {
            contador = lent;
            $('#foto').attr("src",imagenes[contador]);
            $('.descripcion').text(imagenes[contador])
        }
        
    });
    $('#btn-ultima').click(function(){
       contador= lent;
       $('#foto').attr("src",imagenes[contador]);
       $('.descripcion').text(imagenes[contador])
    });


});