
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://web-door.net/css/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://web-door.net/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://web-door.net/css/admin.css" rel="stylesheet">
    <title>web_door</title>
    <link data-n-head="true" rel="icon" type="image/png" size="16" data-hid="favicon-16" href="/images/logo/logo4.png">
    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-text mx-3">Web_door</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Admin Pages:</h6>
                    <a class="collapse-item" href="/admin">Admin</a>
                    <a class="collapse-item" href="/technology">Technology</a>
                    <a class="collapse-item" href="/user">User</a>
                    <a class="collapse-item" href="/exit">Exit</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="/">Home</a>
                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">admin</span>
                            <img class="img-profile rounded-circle" src="/storage/user/9IKx38KAODsV4X6B9q3uPmIHCnwpIjGblIhiOm1J.jpeg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="https://web-door.net/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="https://web-door.net/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="RGkVphsiRKdq25ngn6Ptuq3SUvCZextWNs2dMvqf">                            </form>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->
            <div class="container-fluid">

                <div class="container-fluid" >
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" id="card-header">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-toggle="dropdown">Laravel
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#" class="link-technology-ajax" data-name="1">Миграции</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="2">Artisan</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="3">DB</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="4">SEEDER</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="5">Models</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="6">Blade</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="7">Обработка запросов</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="8">Работа с файлами</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="9">Валидация форм</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="10">Работа с роутингом</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="11">МОДЕЛИ:ОТНОШЕНИЯ</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="12"> Ресурс Контроль</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="13">Авторизация</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="14">Работа с сессиями</a></li>
                                            <li><a href="#" class="link-technology-ajax" data-name="15">Intervention</a></li>
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-toggle="dropdown">JS
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-toggle="dropdown">GIT
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-toggle="dropdown">Composer
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-toggle="dropdown">BASH
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-toggle="dropdown">SQL
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button"
                                                data-toggle="dropdown">Bitrix
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </div>
                                    <button type="button" class="btn btn-info dropdown" id="show-pop-up-create-tech">Create Tech</button>
                                    <button type="button" class="btn btn-info dropdown" id="show-pop-up-create-razdel">Create Razdel</button>
                                    <button type="button" class="btn btn-info dropdown" id="show-pop-up-create-post">Create Post</button>
                                </div>

                                <div class="card-body">
                                    <i id="preloader" class="preloader-img none"></i>
                                    <div class="col-md-12" id="result-post"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>

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
    <script src="https://web-door.net/vendor/jquery/jquery.min.js" defer></script>
    <script src="https://web-door.net/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <script src="https://web-door.net/vendor/jquery-easing/jquery.easing.min.js" defer></script>
    <script src="https://web-door.net/js/js/sb-admin-2.min.js" defer></script>
    <script src="https://web-door.net/js/admin.js" defer></script>
</body>
</html>