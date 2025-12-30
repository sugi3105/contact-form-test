<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ ('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ ('css/index.css') }}" />
    

</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Contact Form
            </a>
        </div>
    </header>
    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form class="form">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__lavel--item">お名前</span>
                        <span class="form__lavel--reqired">必須</span>
                    </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="テスト太郎" />
                    </div>
                    <div class="form__error">
                    </div>
                </div>
           </div>
        </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__lavel--item">メールアドレス</span>
                        <span class="form__lavel--reqired">必須</span>
                    </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="email" placeholder="test@example.com" />
                    </div>
                    <div class="form__error">
                    </div>
                </div>
           </div>
        </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__lavel--item">電話番号</span>
                        <span class="form__lavel--reqired">必須</span>
                    </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="tel" placeholder="09012345678" />
                    </div>
                    <div class="form__error">
                    </div>
                </div>
           </div>
        </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__lavel--item">お問い合わせ内容</span>
                    </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="content"  placeholder="資料をいただきたいです"></textarea>
                    </div>
            </form>   
        </div> 
    </main>
</body>
</html>