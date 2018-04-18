@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="d-flex flex-row-reverse">
                      <div class="p-2 text-light bg-dark">Flex item 1</div>
                      <div class="p-2">Flex item 2</div>
                      <div class="p-2">Flex item 3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
