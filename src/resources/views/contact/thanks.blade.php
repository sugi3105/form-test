@extends('layouts.app')

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
    <h2>お問い合わせありがとうございました</h2>
    </div>

    <div class="thanks__message">
        内容を確認のうえ、担当者よりご連絡いたします
    </div>

    <a href="{{ route('contact.index') }}"トップへ戻る</a>

</div>
@endsection