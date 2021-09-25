<section>
  <div class="container loginUser">
    <div class="row">
      <div class="col-md-12 order-1 mt-5 mb-3">
        <div class="page-header">
          <h3 class="bd-lead text-dark text-center">Login.</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 order-1">
        <div id="resultLoginUser">
          <!-- HTML a ser requisitado perante requisição interna ajax -->
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 order-1">
        <div class="card shadow-sm">
          <div class="card-header">
            <small class="text-muted">Formulário de login</small>
          </div>
          <div class="card-body">
            <form id="formLoginUser" method="POST" action="http://localhost/login_mvc/loginuser/login">
              <div class="form-group">
                <label for="email" class="form-label">E-Mail</label>
                <input type="email" name="email" class="form-control" autocomplete="off" placeholder="exemplo@hotmail.com" id="email"/>
              </div>
              <div class="form-group">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" autocomplete="off" placeholder="Senha" id="senha"/>
              </div>
              <button type="submit" class="btn btn-success btn-block">Login</button>
            </form>
          </div>
          <div class="card-footer">
            <small class="text-muted mb-0">
              Ainda não possui cadastro ?
              <a class="link-striped text-primary" href="http://localhost/login_mvc/cadastrouser">Cadastre-se</a>
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
