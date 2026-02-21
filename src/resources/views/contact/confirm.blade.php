@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="confirm__content">
<div class="confirm__heading">
    <h2>お問い合わせ内容の確認</h2>

    <form class="form" action="/thanks" method="post">
        @csrf

        <div class="confirm__group">
            <lavel>お名前</lavel>
            <p>{{ $data['name'] }}</p>
            <input type="hidden" name="name" value="{{ $data['name'] }}">
            
        </div>
        <div class="confirm__group">
            <lavel>性別</lavel>
            <p>
                @if ($data['gender'] == 1) 男性
                @elself ($data['gender'] == 2) 女性
                @else その他
                @endif
            </p>
            <input type="hidden" name="gender" value="{{ $data['gender'] }}">
        </div>

        <div class="confirm__group">
            <lavel>メールアドレス</lavel>
            <p>{{ $data['email'] }}</p>
            <input type="hidden" name="email" value="{{ $data['email'] }}">
        </div>

        <div class="confirm__group">
            <lavel> 電話番号</lavel>
            <p>{{ $data['tel'] }}</p>
            <input type="hidden" name="tel" value="{{ $data['tel'] }}">
        </div>
        
        <div class="confirm__group">
            <lavel>郵便番号</lavel>
            <p>{{ $data['postcode'] }}</p>  
              <input type="hidden" name="postcode" value="{{ $data['postcode'] }}">
        </div>

        <div class="confirm__group">
            <lavel>住所</lavel>
            <p>{{ $data['address'] }}</p>
            <input type="hidden" name="address" value="{{ $data['address'] }}">
        </div>

        <div class="confirm__group">
            <lavel>建物名</lavel>
            <p>{{ $data['building'] }}</p>
            <input type="hidden" name="building" value="{{ $data['building'] }}">
        </div>

        <div class="confirm__group">
            <lavel>お問い合わせの種類</lavel>
            <p>{{ $data['category_id'] }}</p>
            <input type="hidden" name="category_id" value="{{  $data['category_id'] }}">
        </div>

        <div class="confirm__group">
            <lavel>お問い合わせの内容</lavel>
            <p>{{ $data['detail'] }}</p>
            <input type="hidden" name="detail" value="{{ $data['detail'] }}">
        </div>
        <div class="confirm-buttons">
            <button type="submit"class="submit-btn">送信</button>
        </div>
    </form>
    <form class="form" action="{{ route('contact.index') }}" method="get">
    
        <button type="submit"class="back-btn>修正</button>
    </form>
</div>
@endsection