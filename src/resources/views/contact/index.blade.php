@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="contact-wrapper">

  <h1 class="page-title">Contact</h1>

  <form class="form" action="/confirm" method="post">
    @csrf

    <div class="form-row">
      <label>お名前<span>※</span></label>
      <div>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <label>性別<span>※</span></label>
      <div class="radio-group">
        <label>
          <input type="radio" name="gender" value="1" {{ old('gender') == '1' ? 'checked' : '' }}>
          男性
        </label>
        <label>
          <input type="radio" name="gender" value="2" {{ old('gender') == '2' ? 'checked' : '' }}>
          女性
        </label>
        <label>
          <input type="radio" name="gender" value="3" {{ old('gender') == '3' ? 'checked' : '' }}>
          その他
        </label>
      </div>
      @error('gender')
        <p class="error">{{ $message }}</p>
      @enderror
    </div>

    <div class="form-row">
      <label>メールアドレス<span>※</span></label>
      <div>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <label>電話番号<span>※</span></label>
      <div>
        <input type="text" name="tel" value="{{ old('tel') }}">
        @error('tel')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <label>住所<span>※</span></label>
      <div>
        <input type="text" name="address" value="{{ old('address') }}">
        @error('address')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <label>郵便番号<span>※</span></label>
      <div>
        <input type="text" name="postcode" value="{{ old('postcode') }}">
        @error('postcode')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
    </div>


    <div class="form-row">
      <label>建物名</label>
      <div>
        <input type="text" name="building" value="{{ old('building') }}">
      </div>
    </div>

    <div class="form-row">
      <label>お問い合わせの種類<span>※</span></label>
      <div>
        <select name="category_id">
          <option value="">選択してください</option>
          <option value="1" {{ old('category_id') == '1' ? 'selected' : '' }}>商品のお届けについて</option>
          <option value="2" {{ old('category_id') == '2' ? 'selected' : '' }}>商品の交換について</option>
          <option value="3" {{ old('category_id') == '3' ? 'selected' : '' }}>商品トラブル</option>
          <option value="4" {{ old('category_id') == '4' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
          <option value="5" {{ old('category_id') == '5' ? 'selected' : '' }}>その他</option>
        </select>
        @error('category_id')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-row">
      <label>お問い合わせ内容<span>※</span></label>
      <div>
        <textarea name="detail">{{ old('detail') }}</textarea>
        @error('detail')
          <p class="error">{{ $message }}</p>
        @enderror
      </div>
    </div>

    <div class="form-submit">
      <button type="submit">確認画面</button>
    </div>

  </form>
</div>
@endsection