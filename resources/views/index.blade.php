<<<<<<< HEAD
<?php

declare(strict_types=1);

?>
@extends('gdpr::layouts.master')
=======
nds('gdpr::layouts.master')
>>>>>>> 7f200e9 (.)

@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('gdpr.name') !!}
    </p>
@endsection
