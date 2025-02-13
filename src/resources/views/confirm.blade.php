<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rogin-confirm</title>
</head>
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}" />

<body>
    <div class="confirm-page">
        <div class="confirm-header">
            <h2 class="header-text">内容確認</h2>
        </div>
        <form class="confirm-form" action="/rogins" method="post">
            @csrf
            <div class="confirm-content">
                <table class="confirm-table">
                    <tr>
                        <th class="confirm-table__header">氏名</th>
                        <td class="confirm-table__content">
                            <input class="confirm-table__input" type="text" name="name" value="{{ $rogin['name']}}" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__content">
                            <input class="confirm-table__input" type="text" name="gender" value="{{ $rogin['gender'] }}" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th class="confirm-table__header">年代</th>
                        <td class="confirm-table__content">
                            <input class="confirm-table__input" type="text" name="generation" value="{{ $rogin['generation']}}" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__content">
                            <input class="confirm-table__input" type="text" name="email" value="{{ $rogin['email']}}" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th class="confirm-table__header">メール送信可否</th>
                        <td class="confirm-table__content">
                            <input class="confirm-table__input" type="text" name="message" value="{{$rogin['message']}}" readonly>
                        </td>
                    </tr>
                    <tr>
                        <th class="confirm-table__header">ご意見</th>
                        <td class="confirm-table__content">
                            <input class="confirm-table__input" type="text" name="content" value="{{ $rogin['content'] }}" readonly>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-reenter" type="submit">再入力</button>
                <button class="form__button-submit" type="submit">送信</button>
            </div>
        </form>



    </div>


</body>

</html>