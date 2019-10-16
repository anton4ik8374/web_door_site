<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <script type="text/javascript" src="/vendor/jquery/jquery.min.js"></script>
    {{--<script type="text/javascript" src="/js/vue.js"></script>--}}
    <script type="text/javascript" src="/js/vue.js"></script>
    <script>
        $(document).ready(function () {
                let vu = new Vue({
                    el: "#container",
                    data: {
                        text: '',
                        document: '',
                        backgrounds: '#ffffff',
                        showContent:false,
                        top:'0px',
                        left:'0px',
                        codes:'',
                        date:'',

                    },
                    methods: {
                        pastText: function () {
                            this.document += this.text;
                            this.text = '';
                        },
                        saveVu: function () {
                            localStorage.setItem('vue', vu)
                        },
                        loadVu: function () {
                            let lod = localStorage.getItem('vue');
                            console.log(lod);
                            this.backgrounds = lod.backgrounds;
                        },
                        closeContent:function(){
                            this.showContent = false;
                        },
                        getMenu:function(e){
                            this.codes = e.button;
                            this.date = new Date();
                            this.top = e.y + 'px';
                            this.left = e.x + 'px';
                            this.showContent = true;
                        },
                        keyCodes:function(e){

                            if(this.codes === 0){
                                alert('Нажата левая клавиша мыши');
                            }else if(this.codes === 1){
                                alert('Нажата центральная клавиша мыши');
                            }else{
                                alert('Нажата правая клавиша мыши');
                            }
                            this.close();
                        },
                        time:function (e) {
                            alert('Время события: '+ this.date);
                            this.close();
                        },
                        close:function(){
                            this.showContent = false;
                        }
                    },
                    watch:{

                    }

                });
                let beer = new Vue({
                    el:"#beer",
                    data:{
                        csrf: {_token:$('meta[name=csrf-token]').attr('content')},
                        vaters:[
                            {name:'Coca Cola',price:60},
                            {name:'Fanta',price:70},
                            {name:'Sprite',price:40},
                            {name:'Pepsi',price:50},
                            {name:'7up',price:68},
                        ],
                        basket:{
                            items:[],
                            total:0.00,
                        },
                        prices:50,
                        percent:0,
                        message:'',
                        canConnect: false,
                    },
                    filters:{
                        convert:function(value){
                            if(!value){
                                return '';
                            }
                            return value +'.00'
                        }
                    },
                    //Свойство watch содержи в себе наблюдателей события за изменениями данных.
                    //Наблюдаемые элементы - определены через свойство data
                    watch:{
                        //вызов функции наблюдения за изменениями. Функции вызывается каждый раз, когда происходят изменения в массиве
                        basket:{
                            handler:function(old,now){
                                this.updateTotal();
                                this.calculateSaleTax();
                            },
                            deep:true
                        },
                    },
                    //свойство created позволяет определять поведение, которое будет запущено после создания экземпляра Vue
                    created:function(){
                        this.updateTotal();
                        fetch('/getall',{
                            method:'POST',
                            headers: {'Content-Type': 'application/json;charset=utf-8'},
                            body:JSON.stringify(this.csrf),
                        })
                            .then(function(res){
                                beer.canConnect = true;
                            })
                            .catch(function(err){
                                beer.canConnect = true;
                            })
                    },
                    methods:{
                        updateTotal:function(){
                            let length = this.basket.items.length;
                            let t = 0;
                            for(let i = 0;i < length; i++){
                                t += this.basket.items[i].price;
                            }
                            this.basket.total = t;
                        },
                        buy:function(tel){
                            this.basket.items.push(tel);
                        },
                        calculateSaleTax:function(){
                            let taxRate = 0.20;
                            this.percent = Math.round(this.basket.total * taxRate);
                        }
                    },
                    //Вычисляет свойство.Зависит от значения message
                    //Функция, функция используемая как getter (получатель) свойства reverseMessage
                    //Вычисляемые свойства кешируются,  основываясь на своих зависимостях
                    //Вычисляемое свойство будет пересчитано только тогда, когда изменится одна из его зависемостей
                    computed:{
                        reverseMessage:function(){
                            return this.message.split('').reverse().join('');
                        }
                    }
                });
        });
    </script>
</head>
<body>

<div class="container" id="container" v-bind:style="{background:backgrounds}"  v-on:mousedown.prevent.once="getMenu" v-cloak>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Message</label>
            <textarea class="form-control" rows="10" v-model="text"></textarea>
            <input type="color" v-model="backgrounds">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <button type="submit" v-on:click.prevent="pastText" class="btn btn-primary">Submit</button>
    </form>
    <div class="col-12 justify-content-center border">
        <h2 class="justify-content-center">Dcument</h2>
        <p v-text="document"></p>
    </div>
    <ul v-if="showContent" v-on:blur="closeContent" class="ul list-unstyled"
        v-bind="{top:top,left:left}">
        <li><a href="" v-on:click.prevent="keyCodes">Какая клавиша</a></li>
        <li><a href="" v-on:click.prevent="time">Время</a></li>
    </ul>
</div>
<div class="container" id="beer" v-cloak>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Максимальное количество оборотов:</label>
            <p><input type="range" step="10" class="form-control" min="10" max="100" v-model="prices"></p>
            <span class="text-muted" v-text="prices"></span>
        </div>
        <div class="list-unstyled">
            <li><strong>Лимонад:</strong></li>
            <li v-if="vater.price < prices" v-for="vater in vaters">
                <a href="#" v-on:click.prevent="buy(vater)">@{{vater.name}}: @{{ vater.price }}$</a>
            </li>
        </div>
        <p>Итого: <i>@{{ basket.total | convert }}</i>$</p>
        <p>Налог: <i v-text="percent"></i>$</p>
    </form>
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Computed</label>
            <p><input type="text" class="form-control" v-model="message"></p>
            <span class="text-muted" v-text="reverseMessage"></span>
        </div>
    </form>
    
</div>
</body>
</html>