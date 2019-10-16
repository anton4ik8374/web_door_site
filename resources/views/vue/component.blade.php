<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vue component</title>
    <link rel="icon" sizes="image/png" href="/images/icons/vue_60x60.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <script type="text/javascript" src="/vendor/jquery/jquery.min.js"></script>
    {{--<script type="text/javascript" src="/js/vue.js"></script>--}}
    <script type="text/javascript" src="/js/vue.js"></script>
</head>
<body>

<div class="container" id="container">
    <p class="container-fluid" v-text="total"></p>
    <button-counter class="btn btn-info" v-on:increment="incrementTotal"></button-counter>
</div>
<div class="container" id="ref">
    <input ref="profile" type="text">
    <input type="button" value="Показать" v-on:click="show">
</div>
<div class="container" id="slot">
    <my-slot></my-slot>
</div>
</body>
<script type="text/javascript" src="/js/component.vue.js"></script>
</html>