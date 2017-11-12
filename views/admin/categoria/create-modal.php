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
        <form action="createCategoria" method="POST" id="create" name="create" enctype="multipart/form-data">
          <div class="form-group">
            <label for="nome">Nome Categoria:</label>
            <input type="text" name="nome" class="form-control" required >
          </div>

          <div class="form-group">
            <label for="icon">Icone Categoria:</label>
            <input type="file" name="icon" class="form-control" required >
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
              $("#mensagem").html('<div class="alert alert-success alert-dismissable"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>Categoria criada com successo.</div>');
              $("#create").trigger('reset');
              
              $.each(dataObject, function() {
                 $('tbody').append('<tr><td>'+ this.id + '</td><td>' 
                  + this.nome + '</td><td>'
                  + '<img src="' + '<?php $this->asset("storage/categorias/") ?>' + this.icon + '" width="100px">' + '</td></tr>');
               });
            }
       })
    });

</script>
