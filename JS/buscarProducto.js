$("#form-busqueda").submit(function(e){
    e.preventDefault();
})

modal = document.getElementById("modal-busqueda"); 
$("#btn-buscar").click(function (e) { 
    e.preventDefault();
    let inputValor = $("#input-buscar").val();
    console.log('inputValor :>> ', inputValor);
    modal.innerHTML = "";

    $.get("PHP/buscarProductos.php", {producto: inputValor}, function(respuesta){
        data = $.parseJSON(respuesta);
        console.log('data :>> ', data);
        if(data.length>=1){
            for (let index = 0; index < data.length; index++) {
                const element = data[index];
                console.log('dato :>> ', element);
                
                    let id = element[0];
                    let producto = element[1];
                    let precio = element[2];
                    let imagen = element[3];
                    let descripcion = element[5];
                    let auxboton="";
                    if (descripcion == "") {
                        
                        auxboton=`
                            <p class="p-descripcion d-none">${descripcion}</p>
                        `;
                    } else {
                        
                        auxboton= `
                        <button type="button" class="btn py-2 bg-home-segundary color-home v-descripcion fa-solid fa-eye">
                         </button>
                         <p class="p-descripcion d-none">${descripcion}</p>
                        
                        
                        `;    
                        // console.log('auxboton :>> ', auxboton);
                    }
                    
                    let productoB = document.createElement("div");
                    console.log('productoB :>> ', productoB);
                    productoB.className= "col-sm-6 col-lg-4";
                    productoB.innerHTML =`
                    <div class="item border p-2 col">
                        <div class="imagen">
                            <img src="${imagen}" class="w-100" alt="">
                        </div>
                        <div>
                            <h5>${producto}</h5>
                            <p>S/ <span>${precio}</span></p>
                            
                            <div>
                           
                            </div>
                             ${auxboton}

                          <button type="button" class="btn bg-home color-home p-1 personalizacion">Personalizar</button>
                         
                          <div class="mb-3 d-nonec div-personalizacion py-2">
                             <label class="form-label"  for="imagen">personalización</label>
                             <textarea name="personalizacion" class="form-control " id="personalizacion" cols="05" rows="5" placeholder="Personalización opcional"></textarea>
                         </div>
                            <input type="number" name="" id="" class="form-control my-2" value="1" min="1">
                            <button class="btn bg-home color-home w-100 btn-add-carrito" id="${id}"><i class="fa-solid fa-bag-shopping  px-2"></i>Agregar</button>
                        </div>
                    </div>
                    
                    `;
                    // console.log('tr :>> ', tr);    
                
                    modal.appendChild(productoB);                   
                    
                    $("#alert-adicionales").removeClass("d-none");

        }
        let modalD = document.createElement("div");
        modalD.innerHTML= `
                    <div class="modal fade pt-5 mt-2" id="modalDescripcion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-home color-home">
                        <h5 class="modal-title" id="exampleModalLabel">Descripción</h5>
                        <button type="button" class="btn-close" id="cerrarDescripcionB" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        
                        </div>
                    </div>
                    </div>
                </div>

                `;
        modal.appendChild(modalD);
        
        

        }else{
            let productoB = document.createElement("div");
                    
                    productoB.className= "col";
                    productoB.innerHTML =`
                 
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>Aún no tenemos este producto en venta!</strong>
                </div>                
                
                `;
                    
                    modal.appendChild(productoB);  
                    $("#alert-adicionales").addClass("d-none");      
        }

    });      
    
});

modal.addEventListener('click', (e)=>{comprarProducto(e), mostrarDescripcionBusqueda(e),agregarPerzonalización(e) });

function mostrarDescripcionBusqueda(e) {
    if(e.target.classList.contains('v-descripcion')){

         let producto = e.target.parentElement;
             descripcion = producto.querySelector('.p-descripcion').textContent;
             console.log('descripcion :>> ', descripcion);
             $("#modalDescripcion").modal("show")
             $("#modalDescripcion .modal-body").html(descripcion)
             $("#cerrarDescripcionB").click(function(){
                 $("#modalDescripcion").modal("hide");
             })  
            }        
    
}