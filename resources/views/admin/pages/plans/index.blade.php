@extends('adminlte::page')

@section('title', 'Planos')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"></a>Dashboard</li>
        <li class="breadcrumb-item active"><a href="{{ route('plans.index') }}" class=""></a>Planos</li>
    </ol>


    <h1>Planos <a href="{{ route('plans.create')}}" class="btn btn-dark">Adicionar <i class="fas fa-plus"></i></a></h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <form action=" {{ route('plans.search') }} " method="POST" class="form form-inline">
                @csrf
                <input type="text" name="filter" placeholder="Nome" class="form form-control" value="{{
                    $filters['filter'] ?? ''
                }}">
                <button type="submit" class="btn btn-dark">Filtrar <i class="fas fa-search"></i></button>
        </div>
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Preços</th>
                        <th width="100">Ações</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach ($plans as $plan)
                    <tr>
                        <td>
                            {{ $plan->name }}
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
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
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
