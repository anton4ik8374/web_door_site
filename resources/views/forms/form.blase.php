<div class="pop-up-create none" id="pop-up-create-tech">
    <div class="container">
        <div class="col-md-8">
            <h2>Create tech</h2>
            <form id="form-create-tech">
                <input type="hidden" name="_token" value="RGkVphsiRKdq25ngn6Ptuq3SUvCZextWNs2dMvqf">                <div class="form-group">
                    <label for="technology">Name technology:</label>
                    <input type="text" class="form-control"name="technology" id="technology" placeholder="Enter technology">
                </div>
                <button type="submit" class="btn btn-success create" data-create="pop-up-create-tech">Сохранить</button>
                <button type="button" class="btn btn-warning clear" data-clear="form-create-tech">Очистить</button>
                <button type="button" class="btn btn-danger closed" data-closed="pop-up-create-tech">Закрыть</button>
            </form>
        </div>
    </div>
</div>

<div class="pop-up-create none" id="pop-up-create-razdel">
    <div class="container">
        <div class="col-md-8">
            <h2>Create razdel</h2>
            <form id="form-create-razdel">
                <input type="hidden" name="_token" value="RGkVphsiRKdq25ngn6Ptuq3SUvCZextWNs2dMvqf">                <div class="form-group">
                    <label for="razdel">Name razdel:</label>
                    <input type="text" class="form-control" id="razdel" name="razdel" placeholder="Enter razdel">
                </div>
                <div class="form-group">
                    <label for="technology_id">Name technology:</label>
                    <select class="browser-default custom-select" required="required" name="technology_id" id="technology_id">
                        <option selected>Open this select menu</option>
                        <option value="2">Laravel</option>
                        <option value="3">JS</option>
                        <option value="4">GIT</option>
                        <option value="5">Composer</option>
                        <option value="6">BASH</option>
                        <option value="7">SQL</option>
                        <option value="8">Bitrix</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success create" data-create="pop-up-create-razdel">Сохранить</button>
                <button type="button" class="btn btn-warning clear" data-clear="form-create-razdel">Очистить</button>
                <button type="button" class="btn btn-danger closed" data-closed="pop-up-create-razdel">Закрыть</button>
            </form>
        </div>
    </div>
</div>

<div class="pop-up-create none" id="pop-up-create-post">
    <div class="container">
        <div class="col-md-8">
            <h2>Create post</h2>
            <form id="form-create-post">
                <input type="hidden" name="_token" value="RGkVphsiRKdq25ngn6Ptuq3SUvCZextWNs2dMvqf">                <div class="form-group">
                    <label for="namespace">namespace:</label>
                    <input type="text" class="form-control" id="namespace" placeholder="Enter namespace" name="namespace">
                </div>
                <div class="form-group purple-border">
                    <label for="header">header:</label>
                    <textarea class="form-control" id="header" rows="3" name="header"></textarea>
                </div>
                <div class="form-group purple-border">
                    <label for="body">body:</label>
                    <textarea class="form-control" id="body" rows="3" name="body"></textarea>
                </div>
                <div class="form-group purple-border">
                    <label for="comment">comment:</label>
                    <textarea class="form-control" id="comment" rows="3" name="comment"></textarea>
                </div>
                <div class="form-group purple-border">
                    <label for="code">code:</label>
                    <textarea class="form-control" id="code" rows="3" name="code"></textarea>
                </div>
                <div class="form-group">
                    <label for="razdel_id">what technology:</label>
                    <select class="browser-default custom-select" required="required" name="razdel_id" id="razdel_id">
                        <option selected>select technology</option>
                        <option value="1">Миграции</option>
                        <option value="2">Artisan</option>
                        <option value="3">DB</option>
                        <option value="4">SEEDER</option>
                        <option value="5">Models</option>
                        <option value="6">Blade</option>
                        <option value="7">Обработка запросов</option>
                        <option value="8">Работа с файлами</option>
                        <option value="9">Валидация форм</option>
                        <option value="10">Работа с роутингом</option>
                        <option value="11">МОДЕЛИ:ОТНОШЕНИЯ</option>
                        <option value="12"> Ресурс Контроль</option>
                        <option value="13">Авторизация</option>
                        <option value="14">Работа с сессиями</option>
                        <option value="15">Intervention</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success create" data-create="pop-up-create-post">Сохранить</button>
                <button type="button" class="btn btn-warning clear" data-clear="form-create-post">Очистить</button>
                <button type="button" class="btn btn-danger closed" data-closed="pop-up-create-post">Закрыть</button>
            </form>
        </div>
    </div>
</div>
