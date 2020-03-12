@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif            
        </div>
        <div class="col-12">
            <iframe src="https://app.powerbi.com/view?r=eyJrIjoiMjUxYzY3MTItY2M1OC00MDNjLWJkNjQtYjVlOGNiYzFjODY2IiwidCI6Ijg4MGRkN2YxLWQwMmMtNGUxOS04MTVmLTQ2NDlkMzNmNWM2MyJ9" scrolling="no" frameborder="no"></iframe>
        </div>
    </div>
</div>
@endsection
