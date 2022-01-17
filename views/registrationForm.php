<div class="d-flex flex-column justify-content-center align-item-center">
    <h1>Зарегистрироваться</h1>
    <form action="/user/add" method="post">
        <div class="form-group">
            <label>Имя пользователя</label>
            <input type="text" class="form-control" name="reg[name]">
        </div>
        <div class="form-group">
            <label>Логин</label>
            <input type="text" class="form-control" name="reg[login]">
        </div>
        <div class="form-group">
            <label>Телефон</label>
            <input type="text" class="form-control" name="reg[phone]">
        </div>
        <div class="form-group">
            <label>Пароль</label>
            <input type="password" class="form-control" name="reg[password]">
        </div>
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>