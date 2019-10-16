<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <script type="text/javascript" src="/vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js/phon.js"></script>
    <script type="text/javascript" src="/js/jquery.maskedinput.js"></script>
    <script type="text/javascript" src="/js/vue.js"></script>
    <script>
        $(document).ready(function () {
            let sample = new Vue({
                el: "#app",
                data: {
                    flag: false,
                    none: false,
                    counter: 0,
                    phone: '',
                    search: '',
                    isEnable: false,
                    isSelect: '',
                    message: '',
                    result: '',
                    resultType: '',
                    lazy: '',
                },
                methods: {
                    updateClick: function () {
                        this.counter = this.counter + 1;
                    },
                    sendForm: function (id, url) {
                        $.ajax({
                            type: 'post',
                            url: '/' + url,
                            data: $("#" + id).serialize(),
                            success: function (dat) {
                                console.log(sample.phone);
                                sample.message = dat
                            },
                            error: function (xhr, str) {
                                console.log(xhr.responseJSON.errors);
                                sample.message = xhr.responseJSON.errors.phon[0]
                            }
                        });
                    },
                    sendPhon: function () {
                        let $idForm = $('#button').data('id');
                        let $url = $('#button').data('url');

                        this.sendForm($idForm, $url);
                        $("#" + $idForm).trigger('reset');
                    }
                },
                watch: {
                    result: function () {
                        let t = typeof this.result;
                        this.resultType = t;
                    }
                }
            });
            let form = new Vue({
                el: "#form",
                data: {
                    email: '',
                    message: '',
                    history: '',
                    search: '',
                },
                methods: {
                    showHelp: function (e) {
                        e.preventDefault();
                        this.history += "Вывод новой строки";
                    },
                    clickForm: function (v, e) {
                        alert(this.email + " " + this.message + " " + e.target.innerText + " " + v)
                    },
                    executeSearch: function () {
                        this.history += 'Нажатие "Поиск". "Запрос".' + this.search + ' \n';
                    },
                    parentClick: function () {
                        this.history += 'Нажатие родительского элемента кнопки "поиска". \n';
                    },
                    grandParentClick: function () {
                        this.history += 'Нажатие прародительский элемента кнопки "поиска". \n';
                    }
                },
                watch: {},
            });
            Vue.config.keyCodes = {
                f1: 112,
            };
            let form2 = new Vue({
                el: "#form2",
                data: {
                    code: '',
                    history: '',
                    showContent: false,
                    top: '0px',
                    left: '0px',
                    text: 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.',
                    buffer: '',
                },
                methods: {
                    keyCodes: function (e) {

                        let code = e.keyCode;
                        this.history += 'Нажата кнопка: ' + e.key + '(' + code + ') \n';
                    },
                    searchGo: function (e) {
                        this.history += 'Поиск запущен: ' + this.code;
                    },
                    mouseEvent: function (e) {
                        this.history += e.button
                    },
                    myMenu: function (e) {
                        this.showContent = true;
                        this.top = e.y + 'px';
                        this.left = e.x + 'px';
                        console.log(e);
                    },
                    copyClick: function () {
                        this.buffer = this.text;
                        this.closeContent();
                    },
                    pastClick: function (e) {
                        this.text = this.buffer;
                        this.closeContent();
                    },
                    closeContent: function () {
                        this.showContent = false;
                    },
                    clearContent: function () {
                        this.text = '';
                        this.closeContent();
                    }
                }
            });
        });
    </script>
    <style>
        .list-unstyled {
            width: 200px;
            padding: 5px;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .color {
            color: gold;
        }

        .size {
            font-size: 2em;
        }

        .none {
            display: none !important;
        }

        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="container-fluid">
        <div class="container" id="app">
            <div class="row">
                <div class="col-5 justify-content-center">
                    <p>Счетчик количества обнавлений: @{{ counter }}</p>
                    <button class="btn btn-success" v-on:click="updateClick">Обновить</button>
                </div>
            </div>
            <div class="row" v-bind:class='{"none":none}'>
                <div class="col-5 justify-content-center">
                    <div class="content">
                        <form id="set-phon">
                            @csrf
                            <div class="form-group">
                                <label for="phon">Телефон</label>
                                <input type="test" class="form-control" v-model="phone" name="phon" id="phon"
                                       placeholder="+7(___)___-__-__">
                                <p v-text="message"></p>
                            </div>
                            <div class="form-group">
                                <input type="test" class="form-control" v-model="search" name="search"
                                       placeholder="Search...">
                                <div class="col-3" v-text="search"></div>
                            </div>
                            <div class="form-group">
                                <input type="test" class="form-control" v-model.number="result" name="result"
                                       placeholder="number">
                                <div class="col-3" v-text="result"></div>
                                <div class="col-3" v-text="resultType"></div>
                            </div>
                            <div class="form-group">
                                <input type="test" class="form-control" v-model.lazy="lazy" name="lazy"
                                       placeholder="lazy">
                                <div class="col-3" v-text="lazy"></div>
                            </div>

                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" v-model="isEnable">
                                    <div class="col-12">Элкмент выбран: @{{ isEnable }}</div>
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
                                <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect"
                                        v-model="isSelect">
                                    <option selected>Choose...</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-success" data-id="set-phon" v-on:click="sendPhon"
                                        data-url="form"
                                        id="button">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="container" id="form" v-on:keydown.f1="showHelp">
            <div class="row">
                <div class="col-5">
                    <form>
                        <div class="form-group" v-on:click="grandParentClick">
                            <div v-on:click="parentClick">
                                <label for="exampleInputEmail1">Search...</label>
                                <input type="type" class="form-control" v-model="search"
                                       aria-describedby="text" placeholder="Search..." v-model="history">
                                <button type="submit" class="btn btn-primary" v-on:click.stop.prevent="executeSearch">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jornal event</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" v-model="history"
                                      placeholder="message" rows="15"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <hr>
        <div class="container" id="form2">
            <div class="row">
                <div class="col-5">
                    <form>
                        <div class="form-group">
                            <div>
                                <label for="exampleInputEmail1">Search...</label>
                                <input type="type" class="form-control"
                                       aria-describedby="text" placeholder="Search..." v-model="code"
                                       v-on:keydown="keyCodes">
                                <button type="submit" class="btn btn-primary" v-on:click.prevent="searchGo">
                                    Submit
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Jornal event</label>
                            <textarea type="text" class="form-control" id="exampleInputPassword1" v-text="history"
                                      placeholder="message" rows="15"></textarea>
                        </div>
                    </form>
                    <form>
                        <div v-on:mousedown.prevent="mouseEvent">Нажмите копку мыши</div>
                        <p v-text="history"></p>
                        <div class="form-group">
                        <textarea rows="10" v-on:contextmenu.right.prevent="myMenu" v-text="text">
                        </textarea>
                        </div>
                        <ul v-if="showContent" v-on:blur="closeContent" class="ul list-unstyled"
                            v-bind="{top:top,left:left}">
                            <li><a href="" v-on:click.prevent="copyClick">Copy</a></li>
                            <li><a href="" v-on:click.prevent="pastClick">Past</a></li>
                            <li><a href="" v-on:click.prevent="clearContent">Clear</a></li>
                            <li><a href="" v-on:click.prevent="closeContent">Exit</a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>

</script>
</body>
</html>
