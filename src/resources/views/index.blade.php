<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rogin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css')}}" />
</head>

<body>
    @if(session('success'))
    <header class="session">
        <div class="session-message">
            {{ session('success')}}
        </div>
    </header>
    @endif
    <div class="header">
        <h2 class="header-content">システムへのご意見をお聞かせください</h2>
    </div>
    <form class="rogin-form" action="/rogins/confirm" method="POST">
        @csrf
        <div class="form-group">
            <div class="rogin-form__item">
                <span class="rogin-form__item-label">名前</span>
                <span class="rogin-form__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="rogin-form__inner">
                    <input class="rogin-form__text" type="text" name="name" placeholder="入力してください">
                </div>
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->get('name') as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="rogin-form__item">
                <span class="rogin-form__item-label" for="gender">性別</span>
                <span class="rogin-form__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="rogin-form__inner">
                    <ul class="rogin-form__list">
                        <li class="rogin-form__list-inner">
                            <input class="rogin-form__radio" type="radio" name="gender" value="男性" checked="checked">男性
                        </li>
                        <li class="rogin-form__list-inner">
                            <input class="rogin-form__radio" type="radio" name="gender" value="女性">女性
                        </li>
                    </ul>
                </div>
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->get('gender') as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="rogin-form__item">
                <span class="rogin-form__item-label" for="generation">年代</span>
                <span class="rogin-form__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="rogin-form__inner">
                    <select class="rogin-form__select" name="generation">
                        <option value="" disabled selected>選択してください</option>
                        <option>10代以下</option>
                        <option>20代</option>
                        <option>30代</option>
                        <option>40代</option>
                        <option>50代</option>
                        <ption>60代 </option>
                    </select>
                </div>
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->get('generation') as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="rogin-form__item">
                <span class="rogin-form__item-label" for="email">メールアドレス</span>
                <span class="rogin-form__required">※</span>
            </div>
            <div class="form-group__content">
                <div class="rogin-form__inner">
                    <input class="rogin-form__text" type="email" name="email" placeholder="入力してください">
                </div>
                <div class="alert-danger">
                    <ul>
                        @foreach($errors->get('email') as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="rogin-form__item">
                <span class="rogin-form__item-label" for="email">
                    メール送信可否
                </span>
            </div>
            <div class="form-group__content">
                <div class="rogin-form__inner">
                    <div class="rogin-form__checkbox">
                        <p class=" rogin-form__checkbox-p">登録したメールアドレスにメールマガジンをお送りしてもよろしいですか？</p>
                        <label class="rogin-form__item-checkbox-label">
                            <div class="rogin-form__item-inner">
                                <input class="rogin-form__check" type="checkbox" name="message" value="送信許可" checked="checked">送信を許可します
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="rogin-form__item">
                <span class="rogin-form__item-label" for="opinion">
                    ご意見
                </span>
            </div>
            <div class="form-group__content">
                <div class="rogin-form__inner">
                    <textarea class="rogin-form__textarea" name="content" rows="4" cols="50" placeholder="入力してください"></textarea>
                </div>
            </div>
        </div>
        <div class="rogin-form__button">
            <button class="rogin-form__button-input" type="submit">確認</button>
        </div>
    </form>
</body>

</html>