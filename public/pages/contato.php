
<div class="row mt-5">
    <div class="col-6 offset-3   font-Montserrat text-center alert-info rounded  ">

            <h3 class="text-primary text-center font-weight-bold"> Contato </h3>
            <form action="pages/forms/contato.php" method="POST" class="m-0">
                <div class="m-0 form-group">

                    <input type="text" name="nome" placeholder="Seu Nome" class='form-control' />
                </div>
            <div class="row mt-2"></div>
            <!-- <input type="email" name="email" placeholder="Seu email" class='form-control' /> -->
            <div class="row mt-2"></div>
            <input type="text" name="asunto" placeholder="asunto" class='form-control' />
            <div class="row mt-2"></div>
            <textarea name="message" rows="5" cols="20" class="form-control" placeholder="Sua Sugestão"></textarea>
            <div class="row mt-2 offset-5 text-center">
                
            </div>
            
            
            
            
        </form>
        
        <button type="submit" onclick="alert('Enviado!')" class="btn btn-primary m-3">Enviar</button>

        </div>
    </div>
