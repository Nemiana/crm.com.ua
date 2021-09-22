<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $title }}</title>
        <meta name="keywords" content="{{ $keywords }}">
        <meta name="description" content="{{ $description }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/normalize.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}">
                <span>{{ $title }}</span>
                <div class="login_reg">
                    <button>{{ $sign_in }}</button>
                    <button>{{ $sign_up }}</button>
                </div>
            </div>
        </header>
        <article>{!! $article_home_page !!}</article>
        <div class="feedback">
            <form method="POST" action="">
                {{ csrf_field() }}
                <table>
                    <tr><td>
                        @if (!empty($message))
                            {{ $message }}
                        @endif
                    </td></tr>
                    <tr><th colspan="2">{{ $feedback_title }}</th></tr>
                    <tr>
                        <td><label for="feedback_nickname">{{ $feedback_nickname }}</label></td>
                        <td><input type="text" name="feedback_nickname" size="50" required></td>
                    </tr>
                    <tr>
                        <td><label for="feedback_message">{{ $feedback_message }}</label></td>
                        <td><textarea name="feedback_message" cols="53" rows="8" required></textarea></td>
                    </tr>
                    <tr><td colspan="2"><button type="submit">{{ $submit }}</button></td></tr>
                </table>
            </form>
        </div>
        <footer>
            <p class="copyright">&copy; {{ date('Y') }} Nemiana, new-nemiana@ukr.net</p>
        </footer>
    </body>
</html>