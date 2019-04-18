
<div class="row contato ">
    <div class="col-md-6 col-xs-2  col-sm-8  font-Montserrat text-center  rounded  ">

            <h3 class="text-primary text-center font-weight-bold"> Contato </h3>
            <form action="pages/forms/contato.php" method="POST" class="m-0">
                <div class="m-0 form-group">

                    <input type="text" id="nome" name="nome" placeholder="Seu Nome" class='form-control '/>
                    <span class="text-danger"  id="span1">Campo Nescessário</span>
                </div>
            <div class="row mt-2"></div>
            <input type="email" name="email" id="email" placeholder="Seu email" class='form-control' />
            <span class="text-danger" id="span2">Campo Nescessário</span>
            <div class="row mt-2"></div>
            <input type="text" name="asunto" id="assunto" placeholder="Assunto" class='form-control' />
            <span class="text-danger" id="span3">Campo Nescessário</span>
            <div class="row mt-2"></div>
            <textarea name="message" rows="5" cols="20" id="mensage"  class="form-control " placeholder="Sua Sugestão"></textarea>
            <span class="text-danger" id="span4">Campo Nescessário</span>
            <div class="row mt-2 offset-5 text-center">

            </div>




        </form>

        <button type="submit" id="Enviar" class="btn btn-primary m-3">Enviar</button>

        </div>
    </div>
