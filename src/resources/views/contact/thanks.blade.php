@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks-wrapper">
  <p class="thanks-message">お問い合わせありがとうございました</p>

  <a href="/" class="thanks-button">HOME</a>
</div>
@endsection
