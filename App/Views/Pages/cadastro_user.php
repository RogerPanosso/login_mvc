<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 order-1 mt-5 mb-3">
        <div class="page-header">
          <h3 class="bd-lead text-dark">Cadastre-se.</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 order-1">
        <div id="resultCadastroUser">
          <!-- HTML a ser requisitado perante requisição interna ajax -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 order-1">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <small class="text-muted mb-0">Formulário de cadastro de usuário</small>
            <a class="link-striped" href="#" data-toggle="modal" data-target="#ModalInfo">
              <i class="fa fa-info"></i><small class="ml-1">Obter Informações</small>
            </a>
          </div>
          <div class="card-body">
            <form name="formCadastroUser" id="formCadastroUser" method="POST" action="http://localhost/login_mvc/ajaxcadastrouser/salvarCadastro">
              <div class="form-group">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" autocomplete="off" autofocus placeholder="Nome" id="nome"/>
              </div>
              <div class="form-group">
                <label for="email" class="form-label">E-Mail</label>
                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="exemplo@hotmail.com" id="email"/>
              </div>
              <div class="form-group">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" autocomplete="off" placeholder="Senha" id="senha"/>
              </div>
              <div class="form-group">
                <label for="data_nascimento" class="form-label">Data de Nascimento</label>
                <input type="date" name="data_nascimento" class="form-control" autocomplete="off" id="data_nascimento"/>
              </div>
              <button type="submit" class="btn btn-primary btn-block p-2">Cadastrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Início modal Informações -->
<div class="modal fade" id="ModalInfo" tabindex="-1" role="dialog" aria-labelledby="MyModal">
  <div class="modal-dialog shadow-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mb-0">Informações</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div class="row">
            <div class="col-md-12 order-1 mb-0">
              <small class="text-muted mb-0">
                Preencha os campos abaixo corretamente perante o formulário realizando seu cadastro de usuário para login. Caso não seja definida uma senha específica
                diante seu cadastro por padrão sua data de nascimento será considerada como sua senha atual.
              </small>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
<!-- Fim -->
