<!DOCTYPE html>
<html
  lang="pt-br"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
>
<!-- Login -->
  <?php
    include('conexao.php');
  ?>
<!-- / Login -->

<!-- Head -->
  <?php
    $titulo_pagina = "Projetos";
    include('head.php');
  ?>
<!-- / Head -->

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php
          include('menu.php');
        ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php
            include('nav.php');
          ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <div class="row">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="card-body">
                                <div align="left">
                                    <button
                                    type="button"
                                    class="btn btn-primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#backDropModal"
                                  >
                                    Cadastrar
                                  </button>
                                </div>
                                  <table id="tabela" class="table">
                                    <thead>
                                      <tr>
                                        <th>Projeto</th>
                                        <th>Status</th>
                                        <th>Criado</th>
                                        <th width="4px"></th>
                                      </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                      <tr>
                                        <td><strong>Angular Project</strong></td>
                                        <td><span class="badge bg-label-primary me-1">ATIVO</span></td>
                                        <td>Albert Cook</td>
                                        <td>
                                          <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-edit-alt me-1"></i> Editar</a
                                              >
                                              <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-trash me-1"></i> Deletar</a
                                              >
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><strong>React Project</strong></td>
                                        <td><span class="badge bg-label-success me-1">COMPLETO</span></td>
                                        <td>Barry Hunter</td>
                                        <td>
                                          <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-edit-alt me-2"></i> Editar</a
                                              >
                                              <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-trash me-2"></i> Deletar</a
                                              >
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><strong>VueJs Project</strong></td>
                                        <td><span class="badge bg-label-info me-1">EXECUTANDO</span></td>
                                        <td>Trevor Baker</td>
                                        <td>
                                          <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-edit-alt me-2"></i> Editar</a
                                              >
                                              <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-trash me-2"></i> Deletar</a
                                              >
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td><strong>Bootstrap Project</strong></td>
                                        <td><span class="badge bg-label-warning me-1">REVISÃO</span></td>
                                        <td>Jerry Milton</td>
                                        <td>
                                          <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                              <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                              <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-edit-alt me-2"></i> Editar</a
                                              >
                                              <a class="dropdown-item" href="javascript:void(0);"
                                                ><i class="bx bx-trash me-2"></i> Deletar</a
                                              >
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php
              include('footer.php')
            ?>
            <!-- / Footer -->

            <!-- Modal -->
            <div class="modal fade" id="backDropModal" data-bs-backdrop="static" tabindex="-1">
              <div class="modal-dialog">
                <form class="modal-content" id="formProjeto" action='#'>
                  <div class="modal-header">
                    <h5 class="modal-title" id="backDropModalTitle">Cadastrar Projeto</h5>
                    <button
                      type="button"
                      class="btn-close"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    ></button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input
                          type="text"
                          id="nome"
                          name="nome"
                          class="form-control"
                          placeholder="Entre com o Nome"
                        />
                      </div>
                    </div>
                    <div class="row">
                      <div class="col mb-3">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea 
                          id="descricao"
                          name="descricao"
                          placeholder="Entre com a decrição"
                          class="form-control" ></textarea>
                      </div>
                    </div>
                    <div class="row g-2">
                      <div class="col mb-0">
                        <label for="empresa" class="form-label">Empresa</label>
                        <select id="empresa" name="empresa" required class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option selected="" value="">Selecione uma Empresa</option>
                          <option value="AG">AG</option>
                          <option value="EAG">EAG</option>
                          <option value="EG">EG</option>
                          <option value="ESJ">ESJ</option>
                          <option value="GF">GF</option>
                          <option value="LMS">LMS</option>
                          <option value="NB">NB</option>
                          <option value="SHOP">SHOP</option>
                          <option value="SJ">SJ</option>
                          <option value="T19">T19</option>
                          <option value="VM">VM</option>
                          <option value="Outros">Outros</option>
                        </select>
                      </div>
                      <div class="col mb-3">
                        <label for="data" class="form-label">Data final</label>
                        <input id='data' name='data' class="form-control" type="datetime-local" value="<?php echo $data_atual;?>">
                      </div>
                    </div>                    
                    <div class="row">
                      <div class="col mb-0">
                        <label for="tags" class="form-label">Tags</label>
                        <input
                          type="text"
                          id="tags"
                          name="tags"
                          class="form-control"
                          placeholder="PHP-SQL"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                      Cancelar
                    </button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Salvar</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- / Modal -->


            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Scripts -->
    <?php
      include('scripts.php')
    ?>
    <!-- / Scripts -->
    <script>
     $(document).ready(function() {
        $('#tabela').DataTable({          
            paging: false,
            info: false,
            fixedHeader: {
                 headerOffset: 30,
                 header: true
             },
             "oLanguage": {
                 "sEmptyTable":   "Não foi encontrado nenhum registro",
                 "sLoadingRecords": "A carregar...",
                 "sProcessing":   "A processar...",
                 "sLengthMenu":   "Mostrar _MENU_ registros",
                 "sZeroRecords":  "Não foram encontrados resultados",
                 "sInfoEmpty":    "-",
                 "sInfoFiltered": "(filtrado de _MAX_ registros no total)",
                 "sInfoPostFix":  "",
                 "sSearch":       "Procurar:",
                 "sUrl":          "",
                 "oPaginate": {
                     "sFirst":    "Primeiro",
                     "sPrevious": "Anterior",
                     "sNext":     "Próxima",
                     "sLast":     "Último"
                 },
                 "oAria": {
                     "sSortAscending":  ": Ordenar colunas de forma ascendente",
                     "sSortDescending": ": Ordenar colunas de forma descendente"
                 }
             },
             "columnDefs": [ {
                   "targets": 'no-sort',
                   "orderable": false,
             } ]
        });
         
        $('#formProjeto').submit(function() {
              event.preventDefault();
              var nome_post = $("#nome").val();
              var descricao_post = $("#descricao").val();
              var empresa_post = $("#empresa").val();
              var data_post = $("#data").val();
              var tags_post = $("#tags").val();
              $.ajax({
                  type: "POST",
                  url: 'cadastrar-projeto.php',
                  data: {
                      nome: nome_post,
                      descricao: descricao_post,
                      empresa: empresa_post,
                      data: data_post,
                      tags: tags_post
                  },
                  success: function(data)
                  {
                    var html = $('#tabela tbody').html();
                      if (data == "Cadastrado com sucesso") {
                          alerta(data,'sucesso');
                          html += '<tr>'
                                    +'<td><strong>'+nome_post+'</strong></td>'
                                    +'<td><span class="badge bg-label-primary me-1">ATIVO</span></td>'
                                    +'<td><?php echo $_COOKIE['username'];?></td>'
                                    +'<td>'
                                      +'<div class="dropdown">'
                                        +'<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">'
                                          +'<i class="bx bx-dots-vertical-rounded"></i>'
                                        +'</button>'
                                        +'<div class="dropdown-menu">'
                                          +'<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Editar</a>'
                                          +'<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Deletar</a>'
                                        +'</div>'
                                      +'</div>'
                                    +'</td>'
                                +'</tr>'
                          $('#tabela tbody').html(html);
                          
                        $("#nome").val("");
                        $("#descricao").val("");
                        $("#empresa").val("");
                        $("#data").val("<?php echo $data_atual;?>");
                        $("#tags").val("");
                      }
                      else {
                        alerta(data,'erro');
                      }
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) {
                      alerta(errorThrown,'erro');
                  }
              });
            });
     });
    </script> 
  </body>
</html>
