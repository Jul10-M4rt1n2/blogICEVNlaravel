<html>
<head>
    <meta charset="utf-8"/>
    <title>Crie seu flip book</title>


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/starter-template.css') }}" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="container">
    <div class="starter-template">
        <h1>Criar flipbook</h1>
        <p class="lead">criar flipbook adicionando imagens.</p>
    </div>


    <!-- SCRIPTS -->


    <form class="register-form" method="POST" action="{{ route('flipbook.store') }}" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-lg-3">
                <label><span class="required">*</span>Nome do Livro</label></div>
            <div class="col-lg-9">
                <input class="input-block-level" type="text" placeholder="* Flip Book Name" name="book_name" value="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <label><span class="required">*</span>Descrição do livro</label></div>
            <div class="col-lg-9"><input class="input-block-level" type="text" placeholder="* Flip Book Desc"
                                         name="desc" value=""></div>
        </div>

        <div id="browse_file">
            <div class="row">
                <div class="col-lg-3"><label><span class="required">*</span> Selecione a Imagem do Flipbook </label>
                </div>
                <div class="col-lg-9"><input type="file" name="flip_img_1"/></div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-offset-6">
                <button id="add_files" class="btn btn-medium btn-general input-block-level" type="button">Adicionar mais
                    imagem
                </button>
            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-lg-offset-3 pull-right">
                <button id="add_files" class="btn btn-lg btn-primary" type="submit">Criar flipbook</button>
            </div>

        </div>

    </form>

</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>

</body>

<script type="text/javascript">

    $(document).ready(function () {
        var i = 2;
        $("#add_files").on('click', function () {
            var data = '<div class="row"><div class="col-lg-3"><label><span class="required">*</span> Selecione a Imagem do Flipbook </label></div><div class="col-lg-9"><input type="file" name="flip_img_' + i + '" /></div></div>';
            // var data = '<div><label><span class="required">*</span> Select Flipbook Image </label><input type="file" name="flip_img_'+ i +'" /></div>';
            i++;
            $('#browse_file').append(data);
        });
    });

</script>
</html>
