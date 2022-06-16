CargarTabla();

    $("#btn-activador").click(function (e) { 
        e.preventDefault();
            
            $("#table").dataTable().fnDestroy();
        
                document.getElementById("tbody").innerHTML=""; 
                let cargando = document.createElement("td");
                cargando.setAttribute("colspan","5");
                cargando.textContent ="Cargando...";
                document.getElementById("tbody").appendChild(cargando); 
        
                setTimeout(() => {
                    document.getElementById("tbody").innerHTML=""; 
                    CargarTabla();    
                }, 400);
       
    });    



function CargarTabla() {
    jQuery.ajax({
        url: 'PHP/obtenerProductosPanel.php',
        data: "",
        cache: false,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function(data){
        data = $.parseJSON(data)
        for (let index = 0; index < data.length; index++) {
                const element = data[index];
                // console.log('dato :>> ', element);
                
                    let id = element[0];
                    let producto = element[1];
                    let precio = element[2];
                    let imagen = element[3];
                    let categoria = element[4];
       
                    tr = document.createElement("tr");
                    tr.innerHTML =`
                         <th style="height:30px; width:30px;" > <img src="${imagen}" class ="w-100" alt=""></th>
                         <td>${producto}</td>
                         <td>${precio}</td>
                         <td>${categoria}</td>
                        
                         
                         <td><button type="button" class="btn-close bg-home p-2 eliminar-producto" aria-label="Close" id="${id}"></button></td>    
                    
                    `;
                    // console.log('tr :>> ', tr);     
                    document.getElementById("tbody").appendChild(tr);                   
                    
        }
        $('#table').DataTable({
            responsive: true,
              "language": {
                "lengthMenu": "Mostrar _MENU_ Páginas",
                "zeroRecords": "No se encontró el producto buscado",
                "info": "Mostrando la página  _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(filtrado de _MAX_ registros totales)",
                "search": "Buscar"
        }
        });

        }
    }); 
  }


