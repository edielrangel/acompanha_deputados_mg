@extends('layouts.dashboard.master')

@section('menu')
    @include('dashboard.menu')
@endsection

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Formulário</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Formulário</li>
    </ol>
    <div class="card mb-4">
        <div class="card-body">
            Para os formulários, basta seguir a documentação sobre os mesmos disponível no 
            site do Projeto BootStrap <a target="_blank" href="https://getbootstrap.com/docs/4.1/components/forms/"> >> BootStrap Forms.</a>
            .
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-align-justify"></i>
            Exemplo de Formulário
        </div>
        <div class="card-body">
            <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">First name</label>
                    <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name</label>
                    <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustomUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                      <div class="invalid-feedback">
                        Please choose a username.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom03">City</label>
                    <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                    <div class="invalid-feedback">
                      Please provide a valid city.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom04">State</label>
                    <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationCustom05">Zip</label>
                    <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                    <div class="invalid-feedback">
                      Please provide a valid zip.
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
              </form>
              
              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';
                window.addEventListener('load', function() {
                  // Fetch all the forms we want to apply custom Bootstrap validation styles to
                  var forms = document.getElementsByClassName('needs-validation');
                  // Loop over them and prevent submission
                  var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                      if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                      }
                      form.classList.add('was-validated');
                    }, false);
                  });
                }, false);
              })();
              </script>
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-body">
            Usar Máscaras no formulário é de grande valia. Usaremos para o isso o 
            <a target="_blank" href="https://igorescobar.github.io/jQuery-Mask-Plugin/"> >> jQuery Mask Plugin.</a><br>
            Para o exemplo de formulário abaixo, foi ultilizado o seguite código:
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-body">
            <pre><code>
                &lt;script&gt;
                    $(document).ready(function(){
                        $('#fone').mask('(00) 00000-0000');
                        $('#cpf').mask('000.000.000-00');
                    });      
                &lt;/script&gt;
            </code></pre>
        </div>
    </div>
    <div class="card mb-4">
        
        <div class="card-header">
            <i class="fas fa-align-justify"></i>
            Usando Máscaras no Formulário
        </div>
        <div class="card-body">
            <form>
                <div class="row">
                  <div class="col">
                    <label for="inputEmail4">Telefone (33)3333-3333</label>
                    <input type="text" class="form-control" id="fone" name="fone">
                  </div>
                  <div class="col">
                    <label for="inputEmail4">CPF (000.000.000-00)</label>
                    <input type="text" class="form-control cpf" id="cpf">
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection

@section('js')

<script>
    $(document).ready(function(){
        $('#fone').mask('(00) 00000-0000');
        $('#cpf').mask('000.000.000-00');
    });      
</script>
    
@endsection