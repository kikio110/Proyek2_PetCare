@extends('petowner.app.app')

@section('section', 'dashboard')
<base href="{{ asset('petowner-banner') }}">
<link rel="stylesheet" href="\petowner-banner\assets\style.css">
@section('content')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="container">
                <div class="wrapper">
                    <img src="{{ asset('petowner-banner\assets\img\cat1.png') }}" alt="Cat 1">
                    <img src="{{ asset('petowner-banner\assets\img\cat2.png') }}" alt="Cat 2">
                    <img src="{{ asset('petowner-banner\assets\img\cat3.png') }}" alt="Cat 3">
                    <img src="{{ asset('petowner-banner\assets\img\cat4.png') }}" alt="Cat 4">
                    <img src="{{ asset('petowner-banner\assets\img\cat5.png') }}" alt="Cat 5">
                    <img src="{{ asset('petowner-banner\assets\img\cat6.png') }}" alt="Cat 6">
                </div>
            </div>
        </section>
    </main>
@endsection
