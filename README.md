# My Dashboard

[![Build Status](https://travis-ci.com/edielrangel/MyDashboar.svg?branch=gh-pages)](https://travis-ci.com/edielrangel/MyDashboar)

My Dashboard é um modelo de Dashboard para projetos Laravel baseado em Bootstrap 4 usando o modelo de Dashboard [SB Admin](https://startbootstrap.com/template/sb-admin), disponível gratuitamente em [Start BootStrap](https://startbootstrap.com/).

Este modelo é destinado a início de Projetos e não a projetos em andamento.

Estaremos providenciando um package do nosso MyDashboard para ser instalados em projetos já iniciados.

# Instalação

Para começar a usar o My Dashboard, basta clonar o projeto renomeando-o para o seu novo projeto:

```sh 
$ sudo git clone https://github.com/edielrangel/MyDashboard.git MeuProjeto
$ cd MeuProjeto
$ composer install
```

### Plugins

Os seguintes Plugins já estão inclusos no projeto

* [Sweet Alert](https://sweetalert2.github.io/) - Alertas Amigaveis!
* [JQuery Mask](https://igorescobar.github.io/jQuery-Mask-Plugin/) - Mascaras para inputs em formulários.
* [Livewire](https://laravel-livewire.com/docs/2.x/quickstart)

Ao longo do desenvolvimento do projeto, mais pacotes e funcionalidades serão instalados.

#### Usando o JQuery Mask

Para isso, siga o modelo do Código abaixo:

    <script>
        $(document).ready(function(){
            $('#fone').mask('(00) 00000-0000');
            $('#cpf').mask('000.000.000-00');
        });
    </script>

### Desenvolvimento

Contribua com esse projeto ajudando no seu desenvolvimento! 

License
----

MIT

Readme escrito com [Dillinger](https://dillinger.io/)
