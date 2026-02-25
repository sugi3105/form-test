@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<div class="confirm-container">

    <h1 class="confirm-title">Confirm</h1>

    <form class="form" action="/thanks" method="post">
        @csrf

        <table class="confirm-table">

            <tr>
                <th>お名前</th>
                <td>
                    {{ $data['name'] }}
                    <input type="hidden" name="name" value="{{ $data['name'] }}">
                </td>
            </tr>

            <tr>
                <th>性別</th>
                <td>
                    @if($data['gender'] == 1)
                        男性
                    @elseif($data['gender'] == 2)
                        女性
                    @else
                        その他
                    @endif
                    <input type="hidden" name="gender" value="{{ $data['gender'] }}">
                </td>
            </tr>

            <tr>
                <th>メールアドレス</th>
                <td>
                    {{ $data['email'] }}
                    <input type="hidden" name="email" value="{{ $data['email'] }}">
                </td>
            </tr>

            <tr>
                <th>電話番号</th>
                <td>
                    {{ $data['tel'] }}
                    <input type="hidden" name="tel" value="{{ $data['tel'] }}">
                </td>
            </tr>

            <tr>
                <th>住所</th>
                <td>
                    〒{{ $data['postcode'] }}<br>
                    {{ $data['address'] }}
                    <input type="hidden" name="postcode" value="{{ $data['postcode'] }}">
                    <input type="hidden" name="address" value="{{ $data['address'] }}">
                </td>
            </tr>

            <tr>
                <th>建物名</th>
                <td>
                    {{ $data['building'] ?? '' }}
                    <input type="hidden" name="building" value="{{ $data['building'] ?? '' }}">
                </td>
            </tr>

            <tr>
                <th>お問い合わせの種類</th>
                <td>
                    {{ $data['category_id'] }}
                    <input type="hidden" name="category_id" value="{{ $data['category_id'] }}">
                </td>
            </tr>

            <tr>
                <th>お問い合わせ内容</th>
                <td>
                    {!! nl2br(e($data['detail'])) !!}
                    <input type="hidden" name="detail" value="{{ $data['detail'] }}">
                </td>
            </tr>

        </table>

        <div class="confirm-buttons">
            <button type="submit" class="btn-submit">送信</button>

            <button type="button" class="btn-back" onclick="history.back()">
                修正
            </button>
        </div>

    </form>

</div>
@endsection