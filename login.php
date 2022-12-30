<!DOCTYPE html>
<html
  lang="pt-br"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
<?php
  unset($_COOKIE['username']);
  setcookie('username', '', -1); 
  unset($_COOKIE['password']);
  setcookie('password', '', -1); 
?>

<!-- Head -->
  <?php
    $titulo_pagina = "Login";
    include('head.php');
  ?>
<!-- / Head -->

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    
                    <i class='app-brand-text demo ms-2 bx bx-code-alt'></i>
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">DEV</span>
                </a>
              </div>
              <!-- /Logo -->
              <form id="formAuthentication" action='#' class="mb-3">
                <div class="mb-3">
                  <label for="email" class="form-label">Email ou Usuário</label>
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="email-username"
                    placeholder="Enter your email or username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Senha</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input checked class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Lembrar </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Entrar</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Scripts -->
    <?php
      include('scripts.php');
      
      if($_GET['mensagem'] == 'erro'){
        echo "<script>alerta('É Preciso Estar Logado','erro');</script>";    
      }
    ?>
    <script>    
        $(document).ready(function() {
            $('#formAuthentication').submit(function() {
              event.preventDefault();
              $.ajax({
                  type: "POST",
                  url: 'autenticacao.php',
                  data: {
                      username: $("#username").val(),
                      password: $("#password").val(),
                      lembrar: $("#remember-me").val()

                  },
                  success: function(data)
                  {
                      if (data == "Logado com sucesso") {
                          alerta(data,'sucesso');
                          window.location.replace('index.php');
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
    <!-- / Scripts -->
  </body>
</html>
