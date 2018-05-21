<div class container> --> 12 colunas
container-fluid --> fluido, toma a tela toda, fica responsivo
<div class row> --> coloca conteúdos dentro de uma linha para não desfigurar caso precise de menos blocos

<aside class="col-md-4 col-lg-10">

text-uppercase

<div class="col-md-8">

<ul class="list-unstyled">
<ul class="list-inline">

montando listas no code --> ul>li{item}*5
<DIV CLASS="col-md-6 col-md-offset-3"> --> da um espaçamento dos lados, no caso aí, centraliza

<table class="table">
<table class="table table-striped"> --> uma tabela zebrada
<table class="table table-condensed"> --> um table diminuido, geralmente não use

table-hover --> quando passa o mouse me cima ele adiciona um hover nas cores
.table-hover > tbody > tr:hover {
	background-color: #333;
	color:#fff;
}

table-bordered --> bota borda na table

tr class="danger"> --> deixa a linha avermelhada
tr class="sucess"> --> deixa a linha esverdeada

table-responsive --> deixa a tabela com o scroll para visualização no celular

<input type="text" class="form-control" />  -->deixa um input mais bonitinho
<select class="form-control">
<text-area class="form-control">


<form class="form-inline"> --> conteúdos ficam em linha
<form class="form-horizontal"> --> deixa um debaixo do outro

<class form-group> --> bota uma margim bottom de 20px


<div class="checkbox-inline">
	<input type="checkbox" /> Valor
</div>

<div class="radio-inline">
	<input type="radio" /> Valor
</div>

input[type="text"].form-control --> forma rápida e invocar um input


Estética de erro

<div class="container">
	<form class="form-horizontal">
		<div class="has-warning">
			<label for="warning" c lass="control-label">E-mail</label>
			<input type="text" class="form-control" id="warning">
		</div>
	</form>
</div>

Se substituir os warnings pelo sucess o formulário fica verde

BOTÕES

componente base --> .btn

Modificador de componente --> .btn-sm

Estilo de componente --> .btn-primary

div btn-groups

div btn-toolbar

dropdown-toggle --> faz um botão que aciona um menu dropdown
data-toggle="dropdown"



<!-- Faz colunas sem padding -->

<div class="container" style="margin-top:30px;">
    <h5>No Gutters</h5>
    <div class="row no-gutters">
        <div class="col">column</div>
        <div class="col">column</div>
    </div>
</div>

<nav class="navbar navbar-light bg-light">
    <a href="#" class="navbar-brand">My Website</a>
    <ul class="navbar-nav">
        <li class="navbar-item">
            <a href="#" class="nav-link">Homepage</a>
        </li>
    </ul>
</nav>

<!-- Menu navbar com colapse mobile -->
<nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
            <a href="#" class="navbar-brand">My Website</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Homepage</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Blog</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">About Me</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>


        https://scrimba.com/p/pD5KUE/ck2ypHN


<div class="jumbotron">
    <div class="container">
    
        <div class="moda fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times</span></button>
                        <h4 class="modal-title">Modal title</h4>
                    </div>
                    <div class="modal-body">
                        <p>One fine body&hellip;</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    </div>
</div>

    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">abra tsesamo</button>

    <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>

$('#myModal').on('hide.bs.modal', function (e){
    // quando o modal for fechado
})

$('#myModal').on('hidden.bs.modal', function (e){
    // quando o modal já estiver fechado
})

$('#myModal').on('show.bs.modal', function (e){
    // quando o modal for aberto
})

$('#myModal').on('shown.bs.modal', function (e){
    // quando o modal já estiver aberto
})
</script>