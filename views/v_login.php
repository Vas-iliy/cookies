

<div>
    <form  class="card w-25 mx-auto p-2" method="post">
        <div class="form-group">
            <label for="login">Email address</label>
            <input type="text" name="login" placeholder="Введите логин или email" class="form-control" id="login">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input id='password' class="form-control" type="password" name="password" placeholder="Пароль">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="login-remember" name="remember">
            <label class="form-check-label" for="login-remember">
                Запомнить меня
            </label>
        </div>
        <hr>
        <input class="btn btn-primary" type="submit">
        <?if ($authArr):?>
        <div class="alert alert-danger">
            Шо за поц?
        </div>
        <?endif;?>
    </form>
</div>