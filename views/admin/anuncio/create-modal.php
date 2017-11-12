<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cadastrar nova categoria</h4>
      </div>
      <div class="modal-body">
        <div id="mensagem"></div>
        <form action="createAnuncio" method="POST" id="create" name="create" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-9">
              <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" class="form-control" required >
              </div>
            </div>

            <div class="col-sm-3">
              <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" name="valor" class="form-control" step="0.01" min="0" required>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label for="descricao">Descricao</label>
            <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10" required></textarea>
          </div>
          

          <div class="row">
            <div class="col-sm-4">

              <div class="form-group">
                <label for="categoria">Categorias:</label>
                <select name="categoria" id="categoria" class="form-control" required>
                  <?php foreach ($categorias as $categoria): ?>
                    <?php if ($categoria->nome != null): ?>
                      <option value="<?php echo $categoria->id ?>"><?php echo $categoria->nome ?></option>
                    <?php endif ?>
                  <?php endforeach ?>
                </select>
              </div>

            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="tag">Tags:</label>
                <select name="tag" id="tag" class="form-control" multiple required>
                  <?php foreach ($tags as $tag): ?>
                    <option value="<?php echo $tag->id ?>"><?php echo $tag->nome ?></option>
                  <?php endforeach ?>
                </select>
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" class="form-control" required>
                  <option value="0">Ruim</option>
                  <option value="1">Bom</option>
                  <option value="2">Novo</option>
                </select>
              </div>
            </div>
          </div>
          

          <div class="form-group">
            <label for="galeria[]">Fotos do Anuncio:</label>
            <input type="file" name="galeria[]" class="form-control" >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" form="create" class="btn btn-success">Salvar</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">

    $("#create").submit(function(event) {
        event.preventDefault();

        var form = $('#create')[0];
        var data = new FormData(form);

        $.ajax({
            url: $("#create").attr("action"),
            method: $("#create").attr("method"),
            data: data,
            contentType:false,
            processData:false,
            success: function(data){
              var dataObject = $.parseJSON(data);
              $('.table tbody').empty();
              $("#mensagem").html('<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Anuncio criado com successo.</div>');
              $("#create").trigger('reset');
              
              $.each(dataObject, function() {
                 $('tbody').append(
                  '<tr>'+
                  '<td>'+ this.id + '</td>'+
                  '<td>' + this.titulo + '</td>'+
                  '<td>' + this.categoria + '</td>'+
                  '<td>' + this.usuario + '</td>'+
                  '<td>' + 'R$' + this.valor + '</td>'+
                  '<td>' + this.estado + '</td>'+
                  '</tr>');
               });
            }
       })
    });

</script>
