<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login do sistema</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: url('https://cdn.pixabay.com/photo/2013/12/17/20/10/bubbles-230014_960_720.jpg');
            background-size: cover;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 40px;
            background: rgba(0, 0, 0, .8);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, .5);
            border-radius: 10px;
        }

        .box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .box .inputBox {
            position: relative;
        }

        .box .inputBox input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .box .inputBox label {
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .box .inputBox input:focus~label,
        .box .inputBox input:valid~label {
            top: -18px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }

        .box input[type="submit"] {
            background: transparent;
            border: none;
            outline: none;
            color: #fff;
            background: #03a9f4;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
        }

        .form-check-input-custom {
            width: auto !important;
            margin-top: 22px;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2>Login</h2>
        <form method="post" action="{{ route('authenticate') }}">
            @csrf
            <div class="inputBox">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="">E-mail</label>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" style="color: red; padding: 0 5px;" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="inputBox">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                <label for="">Senha</label>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" style="color: red; padding: 0 5px;" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="inputBox" style="margin-top: 5%">
                <input class="form-check-input form-check-input-custom" type="checkbox" name="remember" id="remember"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Lembrar minha senha') }}
                </label>
            </div>
            <input type="submit" name="" value="Entrar">
        </form>
    </div>
</body>

</html>
