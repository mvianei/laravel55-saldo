<!doctype html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Cadastro de {{ $tipo }}</title>

    <!-- Bootstrap CSS CDN -->
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style2.css">
    <link rel="stylesheet" href="../../css/hamburguer.css">
    <link rel="stylesheet" type="text/css" href="../../css/component.css" />
    <link rel="stylesheet" type="text/css" href="../../css/accordion.css" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script src="https://kit.fontawesome.com/9b7c31c8b1.js" crossorigin="anonymous"></script>
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <script language="JavaScript" type="text/javascript" src="../../js/MascaraValidacao.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        {{-- <nav id="sidebar" style="box-shadow: 0 0.5rem 1rem rgba(44, 240, 214,1.15)!important;"> --}}
        <nav id="sidebar">
            <div class="sidebar-header">
                @if (auth()->user()->image != null)
                <img src="{{ url('storage/logo2.png') }}">
                @endif
                {{-- <h3>1acordo.com.br</h3> --}}
            </div>
            <ul class="list-unstyled components">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                            class="fas fa-table"></i> Cadastros</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="cliente"><i class="fas fa-handshake"></i> Cliente</a>
                        </li>
                        <li>
                            <a href="devedor">
                                <i class="fas fa-thumbs-down"></i>
                                Devedor
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fas fa-dollar-sign"></i>
                        Financeiro
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu3">
                        <li>
                            <a href="#"><i class="fas fa-chart-area"></i> Saldo</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-history"></i> Histórico</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-tools"></i>
                        Administração
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu4">
                        <li>
                            <a href="#"><i class="fas fa-users"></i> Usuários</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">
            <nav class="navbar navbar-expand-lg bg-black">
                <div class="container-fluid">
                    <div class="menu btn15" data-menu="15" id="sidebarCollapse">
                        <div class="icon"></div>
                    </div>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">BlaBlaBla</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BlaBlaBla</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BlaBlaBla</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">BlaBlaBla</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            @yield('content')
        </div>
    </div>
    <a href="#" class="scrollToTop"></a>

    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.js"
        integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script> --}}
    {{--     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
 --}} <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js">
    </script>
    <script src="../../js/collapsible.js"></script>
    <script src="../../js/collapsible2.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
            myFunction();
        });
        $('.menu').click(function() {
            $(this).toggleClass('open');
        });
        //valida numero inteiro com mascara

        function myFunction() {
                      var tipo_pessoa = document.querySelector('input[name="radio_pessoa"]:checked').value;
                        if (tipo_pessoa == 'J') {
                            document.getElementById('lblnome').innerHTML = "Razão social";
                            document.getElementById('lblcpfcnpj').innerHTML = "CNPJ";
                            document.getElementById("cpfcnpj").setAttribute("placeholder", "CNPJ");
                            document.getElementById("nome").setAttribute("placeholder", "Razão social");
                            document.getElementById("cpfcnpj").setAttribute("onKeyPress", "MascaraCNPJ(cpfcnpj);");
                            document.getElementById("cpfcnpj").setAttribute("onblur", "ValidarCNPJ(cpfcnpj);");
                            document.getElementById("cpfcnpj").setAttribute("maxlength", "18");
                        }
                        else {
                            document.getElementById('lblnome').innerHTML = "Nome";
                            document.getElementById('lblcpfcnpj').innerHTML = "CPF";
                            document.getElementById("cpfcnpj").setAttribute("placeholder", "CPF");
                            document.getElementById("nome").setAttribute("placeholder", "Nome");
                            document.getElementById("cpfcnpj").setAttribute("onKeyPress", "MascaraCPF(cpfcnpj);");
                            document.getElementById("cpfcnpj").setAttribute("onblur", "ValidarCPF(cpfcnpj);");
                            document.getElementById("cpfcnpj").setAttribute("maxlength", "14");
                        }
                    }
                    //Check to see if the window is top if not then display button
                    $(window).scroll(function(){
                            if ($(this).scrollTop() > 100) {
                                    $('.scrollToTop').fadeIn();
                            } else {
                                    $('.scrollToTop').fadeOut();
                            }
                    });
                    //Click event to scroll to top
                    $('.scrollToTop').click(function(){
                            $('html, body').animate({scrollTop : 0},800);
                            return false;
                    });
    </script>
</body>

</html>
