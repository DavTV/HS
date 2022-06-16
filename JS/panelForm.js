$(document).ready(function () {
    // $("#imagen").change(function () { 
    //     console.log(this.files);
       

    // });
$("#form-producto").submit(function (e) { 
        e.preventDefault();
        document.getElementById("btn-d-e").disabled = true;
        var data = new FormData();
            jQuery.each($('input[type=file]')[0].files, function(i, file) {
                data.append('file-'+i, file);
        });
        var other_data = $('form').serializeArray();
            $.each(other_data,function(key,input){
                data.append(input.name,input.value);
        }); 
        
        jQuery.ajax({
            url: 'PHP/agregarProducto.php',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data){
                document.getElementById("alerts").innerHTML= `
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <strong>${data}!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>                
                
                `;

                tr = document.createElement("tr");

                let imagen = document.getElementById('imagen').files[0].name;
                tr.innerHTML =`
                     <th style="height:30px; width:30px;" > <img src="${'IMG_PRODUCTOS/'+imagen}" class ="w-100" alt=""></th>
                     <td>${ $("#producto").val()}</td>
                     <td>${$("#categoria").val()}</td>
                     <td>${ $("#precio").val()}</td>
                     
                     <td><button type="button" class="btn-close bg-home p-2" aria-label="Close" id=""></button></td>    
                
                `;
                // console.log('tr :>> ', tr);     
                let tbody = document.getElementById("tbody");       
                tbody.insertBefore (tr, tbody.children[0]);  

            $("#producto").val("");    
            $("#precio").val("");    
            $("#categoria").val("");    
            $("#imagen").val(""); 
            $("#descripcion").val(""); 
            document.getElementById("btn-d-e").disabled = false;
            $("#btn-activador").click();
               
            }
     });
//      $('#table').DataTable({
//         responsive: true
//      });


setTimeout(() => {
    document.getElementById("alerts").innerHTML="";
}, 3000);
});
});

