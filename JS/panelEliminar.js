let productos = document.getElementById("tbody");
productos.addEventListener("click",(e)=>{
    EliminarProducto(e);
})

function EliminarProducto(e){
    e.preventDefault();
    //Delegado para agregar al carrito
    if(e.target.classList.contains('eliminar-producto')){
        const producto = e.target.parentElement.parentElement;
        //Enviamos el producto seleccionado para tomar sus datos
        let productoID = producto.querySelector("button").id;
        let imagen = producto.querySelector("img").getAttribute("src");
        console.log('imagen :>> ', imagen);
        $.get("PHP/eliminarProducto.php", {producto_id : productoID, imagen: imagen}, function(respuesta){
            //   $("#ejemplo").text(respuesta);
              console.log('respuesta :>> ', respuesta);
    //     jQuery.ajax({
    //         url: 'PHP/eliminarProducto.php',
    //         data: ,
    //         cache: false,
    //         contentType: false,
    //         processData: false,
    //         type: 'POST',
    //         success: function(data){
    //           console.log('data :>> ', data);
               $("#table").dataTable().fnDestroy();
               setTimeout(() => {
                document.getElementById("tbody").innerHTML=""; 
                CargarTabla();    
            }, 400);
    //         }
    // })
        })}}

