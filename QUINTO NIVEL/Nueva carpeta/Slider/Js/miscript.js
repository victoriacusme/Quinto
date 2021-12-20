$(document).ready(function(){
   
    var imagenes=[
        "https://i.pinimg.com/236x/22/fd/25/22fd25dddb9acdf6a828ee27f184f250.jpg",
        "https://i.pinimg.com/474x/81/9f/3a/819f3a8f3dc967ab16a36a539248b813.jpg",
        "https://i.pinimg.com/236x/72/a8/7f/72a87f18c6aa0ae668ec174c8cca8f6f.jpg",
        "https://www.designwizard.com/wp-content/uploads/2018/12/9e9d4880-5c01-11e7-b10e-139486d7b4a2.jpg",
        "https://i.pinimg.com/474x/7a/4d/99/7a4d99747fa9cd4700c7a4ecd7200432.jpg"
    ];
    var i=0;
    
        $('#mostrar').click(function(){ $('#imagen').attr('src',imagenes[i=0]); });
        $('#siguiente').click(function(){ $('#imagen').attr('src', imagenes[i++]) });
        $('#anterior').click(function(){ $('#imagen').attr('src', imagenes[i--]) });
        $('#ultimo').click(function(){ $('#imagen').attr('src', imagenes[i=4] ); }); 
     
   
       
    });
 
