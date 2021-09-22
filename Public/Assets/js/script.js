//define codigo jquery selecionando no documento(página) id de formulário de cadastro de usuário bloquando sua ação
$(document).ready(function(){
  $("#formCadastroUser").on("submit",function(event){
      event.preventDefault();
      //seleciona elemento HTML form através do metodo DOM
      let form = document.querySelector("#formCadastroUser");
      let nome = $("#nome").val();
      let email = $("#email").val();
      let senha = $("#senha").val();
      let data_nascimento = $("#data_nascimento").val();

      if(nome == "") {
        window.alert("Por favor informe um nome valido");
        return false;
      }

      if(email == "" || email.indexOf("@") == -1) {
        window.alert("Por favor informe um endereço de e-mail valido");
        return false;
      }

      if(data_nascimento == "") {
        window.alert("Por favor informe uma data de nascimento valida");
        return false;
      }

      //realiza requisição interna ajax
      $.ajax({
        type:"POST",
        url:"http://localhost/login_mvc/ajaxcadastrouser/salvarCadastro",
        dataType:"html",
        data:{
          nome:nome,
          email:email,
          senha:senha,
          data_nascimento:data_nascimento
        },
        success:function(html) {
          $("#resultCadastroUser").html(html);
          $("#resultCadastroUser").css("color", "#006400");
        },
        error:function(html) {
          $("#resultCadastroUser").html(html);
          $("#resultCadastroUser").css("color", "#FF0000");
        }
      });
  });
});
