@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        {{ __('You are logged in!') }}
                    </p>

                        <x-secondary-button>
                            Click Me if you think components are fucking stupid
                        </x-secondary-button>

                        <x-secondary-button>
                            Click Me again if you think components are fucking stupid
                        </x-secondary-button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
