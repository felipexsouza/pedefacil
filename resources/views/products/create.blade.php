@extends('app')

@section('content')
    <h1 class="page-heading">Novo produto</h1>

    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('product_name','Nome') !!}
            {!! Form::text('product_name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            Tamanho<br>
            {!!Form::radio('product_size', 0, true) !!}
            {!!Form::label('Único') !!}
            {!!Form::radio('product_size', 1) !!}
            {!!Form::label('Múltiplos') !!}
        </div>

        <div class="form-group">
            {!! Form::label('product_price','Preço') !!}
            {!! Form::text('product_price', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Produto', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection