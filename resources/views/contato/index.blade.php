@extends('templates.layout')

@section('conteudo')
    <h1 class="display-4">Fale Conosco</h1>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <form action="">
                    <div class="form-group">
                        <label for="nome" class="required-field">Nome</label>
                        <input type="text" class="form-control" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="required-field">E-mail</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <label for="mensagem" class="required-field">Mensagem</label>
                        <textarea id="mensagem" rows="5" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>

            <div class="col-sm">
                <div class="mapouter">
                    <div class="gmap_canvas">
                        <iframe width="500" height="430" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=pr%C3%A9-vestibular%20social%20a%C3%A7%C3%A3o&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
