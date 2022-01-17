<div class="d-flex flex-column justify-content-center align-item-center">
    <h1>Авторизоваться</h1>
    <form action="/user/authentication" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Имя пользователя</label>
            <input type="text" class="form-control" name="auth[login]" id="exampleInputEmail1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Пароль</label>
            <input type="password" class="form-control"  name="auth[password]" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">отправить</button>
    </form>
</div>