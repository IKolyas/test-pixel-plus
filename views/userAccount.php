<div class="d-flex flex-column justify-content-center align-items-center">
    <h2>Личный кабинет</h2>
    <div class="d-flex">
        <h3><?= /** @var \models\User $user */
            $user['login'] ?> </h3>
        <form action="\user\out" method="post" class="mx-3">
            <button type="submit" class="btn btn-danger">Выйти</button>
        </form>
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h2>Данные пользователя</h2>
        <div class="d-flex">
            <p class="mx-2">id: <span><?= $data->id?></span></p>
            <p class="mx-2">имя: <span><?= $data->name ?></span></p>
            <p class="mx-2">телефон: <span><?= $data->phone ?></span></p>
            <p class="mx-2">login: <span><?= $data->login ?></span></p>
            <p class="mx-2">password: <span><?= $data->password ?></span></p>
        </div>
        <form action="/user/update" method="post" class="d-flex flex-column">
            <label>
                имя
                <input type="text" name="params[name]" value="<?= $data->name ?>">
            </label>
            <label>
                телефон
                <input type="text" name="params[phone]" value="<?= $data->phone ?>">
            </label>
            <label>
                login
                <input type="text" name="params[login]" value="<?= $data->login ?>">
            </label>
            <label>
                password
                <input type="text" name="params[password]" value="<?= $data->password ?>">
            </label>
            <input type="hidden" name="params[id]" value="<?= $data->id ?>">
            <button type="submit">Обновить</button>
        </form>
    </div>
</div>