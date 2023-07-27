@extends('adminlte::page')

@section('title', "Detalhes do Plano {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"></a>Dashboard</li>
        <li class="breadcrumb-item"><a href="{{ route('plans.index') }}" class=""></a>Planos</li>
        <li class="breadcrumb-item"><a href="{{ route('plans.show', $plan->url) }}" class=""></a>{{$plan->name}}</li>
        <li class="breadcrumb-item active"><a href="{{ route('details.plans.index', $plan->url) }}" class="active"></a>Detalhes</li>
    </ol>


    <h1>Detalhes do Plano {{ $plan->name }} <a href="{{ route('plans.create')}}" class="btn btn-dark">Adicionar <i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach ($details as $detail)
                    <tr>
                        <td>
                            {{ $detail->name }}
                        </td>
                        <td>
                            {{ number_format($plan->price, 2, ',', '.') }}
                        </td>
                        <td style="width=10px;">
                            <a href="{{ route('plans.edit', $plan->url)}}" class="btn btn-info">Edit</a>
                            <a href="{{ route('plans.show', $plan->url)}}" class="btn btn-warning">VER</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $details->appends($filters)->links() !!}
            @else
                {!! $details->links() !!}
            @endif
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
