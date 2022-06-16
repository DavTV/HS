const productos = document.getElementById('lista-productos');
const tbody = document.getElementById('tbody');
const openCarrito= document.getElementById('btn-carrito-open');
const btn_enviar = document.getElementById('mandar-pedido');
const total = document.getElementById('total');

productos.addEventListener('click', (e)=>{
    comprarProducto(e);
    mostrarDescripcion(e);
    agregarPerzonalización(e);
});
tbody.addEventListener('click', (e)=>{
    eliminarProducto(e);
    mostrarPerzonalización(e);
});
// que lo ejecute una vez al cargar
carritoVacio();

let dataLS = obtenerProductosLocalStorage();
dataLS.forEach(element => {
    pintarCarito(element);
});
openCarrito.addEventListener("click", function(){
    carritoVacio();
    calcularTotal();
});
btn_enviar.addEventListener("click", function(e){
    
    enviarPedido(e);
});
//Añadir producto al carrito
 function comprarProducto(e){
        e.preventDefault();
        //Delegado para agregar al carrito
        if(e.target.classList.contains('btn-add-carrito')){
            const producto = e.target.parentElement.parentElement;
            //Enviamos el producto seleccionado para tomar sus datos
            const infoProducto = {
                imagen : producto.querySelector('img').src,
                producto: producto.querySelector('h5').textContent,
                precio: producto.querySelector('p span').textContent,
                cantidad:Math.round(producto.querySelector('input').value),
                personalizacion:producto.querySelector('textarea').value,
                descripcion:producto.querySelector('.p-descripcion').textContent,
                id: producto.querySelector('.btn-add-carrito').id
                
            }
            
            // console.log('personalizacion :>> ', personalizacion);
            let productosLS;
            productosLS = obtenerProductosLocalStorage();
            productosLS.forEach(function (productoLS){
                if(productoLS.id === infoProducto.id){
                    productosLS = productoLS.id;
                    
                }
            });
    
            if(productosLS === infoProducto.id){
                Swal.fire({
                   
                    title: 'Oops...',
                    text: 'El producto ya está agregado, eliminelo para poder modificar el carrito',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
            else {
                Swal.fire({
                    
                    title: 'Felicidades...',
                    text: 'Producto Agregado',
                    showConfirmButton: false,
                    timer: 1000
                })
                console.log(infoProducto);
                pintarCarito(infoProducto);
                guardarProductosLocalStorage(infoProducto);
                calcularTotal();
                producto.querySelector('textarea').value="";
            }
            
        }

    }
    function pintarCarito(producto) {
        document.getElementById("alert-tr").classList.add("d-none");
        let tr = document.createElement("tr");
        let modalP = document.createElement("div");
        modalP.innerHTML= `
                    <div class="modal fade pt-5 mt-2" id="modalPersonalizacion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header bg-home color-home">
                        <h5 class="modal-title" id="exampleModalLabel">Personalización</h5>
                        <button type="button" class="btn-close" id="cerrarPersonalizacionP" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" id="modal-body-personalizacion">
                        
                        </div>
                    </div>
                    </div>
                </div>

                `;



        tbody.appendChild(modalP);
        let auxPersonalizacion="";
        let botonD="";
        if(producto.personalizacion ==""){
          
           
        }else{
            auxPersonalizacion = producto.personalizacion
            botonD= `
                <div class="w-100"></div>
                <button class="btn bg-home-bajo color-home my-3 m-personalizacion fa-solid fa-clipboard-list">
                    
                </button>
            
            `;
        }
        tr.innerHTML = `
                        <td>
                            <img src="${producto.imagen}" width=100>
                        </td>
                        <td>${producto.producto}
                        
                            ${botonD}
                            <p class ="d-none">${auxPersonalizacion}</p>
                            <p>
                        </td>
                        <td>${producto.precio}</td>
                        <td>${producto.cantidad}</td>
                        <td><button type="button" class="btn-close bg-home p-2 borrar-producto" aria-label="Close" id="${producto.id}"></button></td> 
                    `;
        tbody.appendChild(tr);
    }

    function carritoVacio() {
        
        if(document.querySelector('#tbody').childElementCount < 2 ){
            document.getElementById("alert-tr").classList.remove("d-none")
        }else{
            console.log("no esta vacio")
        }           
        
    }
    function eliminarProducto(e){
        e.preventDefault();
        let producto, productoID;
        if(e.target.classList.contains('borrar-producto')){
            e.target.parentElement.parentElement.remove();
             producto = e.target.parentElement.parentElement;
             productoID = producto.querySelector('button').id;
             console.log(productoID)
            
        }
        eliminarProductoLocalStorage(productoID);
        // this.calcularTotal();
        calcularTotal();
    }

    function guardarProductosLocalStorage(producto){
        let productos;
        //Toma valor de un arreglo con datos del LS
        productos = obtenerProductosLocalStorage();
        //Agregar el producto al carrito
        productos.push(producto);
        //Agregamos al LS
        localStorage.setItem('productos', JSON.stringify(productos));
    }

    //Comprobar que hay elementos en el LS
    function obtenerProductosLocalStorage(){
        let productoLS;

        //Comprobar si hay algo en LS
        if(localStorage.getItem('productos') === null){
            productoLS = [];
        }
        else {
            productoLS = JSON.parse(localStorage.getItem('productos'));
        }
        return productoLS;
    }
    function eliminarProductoLocalStorage(productoID){
        let productosLS;
        //Obtenemos el arreglo de productos
        productosLS = obtenerProductosLocalStorage();
        //Comparar el id del producto borrado con LS
        productosLS.forEach(function(productoLS, index){
            if(productoLS.id === productoID){
                productosLS.splice(index, 1);
            }
        });

        //Añadimos el arreglo actual al LS
        localStorage.setItem('productos', JSON.stringify(productosLS));
    }

    function enviarPedido(e){
        let monto_ = document.getElementById("total").textContent;
        const nombre_cliente = document.getElementById('nombre-cliente').value;
        let data = obtenerProductosLocalStorage();
        let auxNombre="";
      

        data.forEach(element => {
            if(element.descripcion == ""){
                element.descripcion = "";
            }else{
                element.descripcion = "descripción " +element.descripcion;
            }
            if(element.personalizacion == ""){
                element.personalizacion= ""
            }else{
                element.personalizacion = "personalización: " +element.personalizacion;
            } 

            auxNombre = auxNombre + element.cantidad +"\n "+ element.producto + "\n "+element.descripcion+ ",\n " + element.personalizacion + " *** " ;
            // console.log('auxNombre :>> ', auxNombre);
        });
        let a = document.createElement("a");
        a.href="https://api.whatsapp.com/send?phone=51979895362&text=Hola,%20quisiera%20solicitar%20un%20pedido%20de%20"+""+auxNombre+"%20con%20el%20monto%20de:%20"+""+monto_+"%20sin%20sumar%20la%20personalización%20para:%20"+""+nombre_cliente;

        if(nombre_cliente != ""){
            e.preventDefault();
            a.click();
            
        }
    }
    function calcularTotal() {
        let subtotal=0;
        let data = obtenerProductosLocalStorage();
        data.forEach(element => {
            subtotal= subtotal + (parseFloat(element.precio)*parseInt(element.cantidad));
            
        });
        total.textContent = subtotal.toFixed(2);
    }

   
    function mostrarDescripcion(e) {
        if(e.target.classList.contains('v-descripcion')){
           
             let producto = e.target.parentElement;
             descripcion = producto.querySelector('.p-descripcion').textContent;
             $("#modal-descripcion").modal("show");
             $("#modal-body-des").html(descripcion);
            
        }
    }

    function agregarPerzonalización(e){
        if(e.target.classList.contains('personalizacion')){
            let producto = e.target.parentElement;
            let divPersonalizacion = producto.querySelector('.div-personalizacion');
                divPersonalizacion.classList.toggle("d-block");
       }
    }

    function mostrarPerzonalización(e){
        if(e.target.classList.contains('m-personalizacion')){
            let producto = e.target.parentElement;
            let personalizacion = producto.querySelector('p').textContent;
            $("#modal-body-personalizacion").html(personalizacion)
               $("#modalPersonalizacion").modal("show");
               $("#cerrarPersonalizacionP").click(function(){
                   $("#modalPersonalizacion").modal("hide");
               })
       }
    }