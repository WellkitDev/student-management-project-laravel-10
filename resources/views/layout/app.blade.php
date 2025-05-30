<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/apps.css') }}">
    <title>Document</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
    <!-- Main HTML -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Student Management Project</a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="page-wrapper chiller-theme toggled">
                    <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                    <nav id="sidebar" class="sidebar-wrapper">
                        <div class="sidebar-content">
                            <div class="sidebar-brand">
                                <a href="#">pro sidebar</a>
                                <div id="close-sidebar">
                                    <i class="fas fa-times"></i>
                                </div>
                            </div>
                            <div class="sidebar-header">
                                <div class="user-pic">
                                    <img class="img-responsive img-rounded"
                                        src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
                                        alt="User picture">
                                </div>
                                <div class="user-info">
                                    <span class="user-name">Jhon
                                        <strong>Smith</strong>
                                    </span>
                                    <span class="user-role">Administrator</span>
                                    <span class="user-status">
                                        <i class="fa fa-circle"></i>
                                        <span>Online</span>
                                    </span>
                                </div>
                            </div>
                            <div class="sidebar-menu">
                                <ul>
                                    <li class="header-menu">
                                        <span>General</span>
                                    </li>
                                    <li class="sidebar-dropdown">
                                        <a href="#">
                                            <i class="fa fa-tachometer-alt"></i>
                                            <span>Dashboard</span>
                                            <span class="badge badge-pill badge-warning">New</span>
                                        </a>
                                        <div class="sidebar-submenu">
                                            <ul>
                                                <li>
                                                    <a href="#">Dashboard 1
                                                        <span class="badge badge-pill badge-success">Pro</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Dashboard 2</a>
                                                </li>
                                                <li>
                                                    <a href="#">Dashboard 3</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-dropdown">
                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>E-commerce</span>
                                            <span class="badge badge-pill badge-danger">3</span>
                                        </a>
                                        <div class="sidebar-submenu">
                                            <ul>
                                                <li>
                                                    <a href="#">Products

                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">Orders</a>
                                                </li>
                                                <li>
                                                    <a href="#">Credit cart</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-dropdown">
                                        <a href="#">
                                            <i class="far fa-gem"></i>
                                            <span>Components</span>
                                        </a>
                                        <div class="sidebar-submenu">
                                            <ul>
                                                <li>
                                                    <a href="#">General</a>
                                                </li>
                                                <li>
                                                    <a href="#">Panels</a>
                                                </li>
                                                <li>
                                                    <a href="#">Tables</a>
                                                </li>
                                                <li>
                                                    <a href="#">Icons</a>
                                                </li>
                                                <li>
                                                    <a href="#">Forms</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-dropdown">
                                        <a href="#">
                                            <i class="fa fa-chart-line"></i>
                                            <span>Charts</span>
                                        </a>
                                        <div class="sidebar-submenu">
                                            <ul>
                                                <li>
                                                    <a href="#">Pie chart</a>
                                                </li>
                                                <li>
                                                    <a href="#">Line chart</a>
                                                </li>
                                                <li>
                                                    <a href="#">Bar chart</a>
                                                </li>
                                                <li>
                                                    <a href="#">Histogram</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="sidebar-dropdown">
                                        <a href="#">
                                            <i class="fa fa-globe"></i>
                                            <span>Maps</span>
                                        </a>
                                        <div class="sidebar-submenu">
                                            <ul>
                                                <li>
                                                    <a href="#">Google maps</a>
                                                </li>
                                                <li>
                                                    <a href="#">Open street map</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="header-menu">
                                        <span>Extra</span>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-book"></i>
                                            <span>Documentation</span>
                                            <span class="badge badge-pill badge-primary">Beta</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-calendar"></i>
                                            <span>Calendar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-folder"></i>
                                            <span>Examples</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- sidebar-menu  -->
                        </div>
                        <!-- sidebar-content  -->
                        <div class="sidebar-footer">
                            <a href="#">
                                <i class="fa fa-bell"></i>
                                <span class="badge badge-pill badge-warning notification">3</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span class="badge badge-pill badge-success notification">7</span>
                            </a>
                            <a href="#">
                                <i class="fa fa-cog"></i>
                                <span class="badge-sonar"></span>
                            </a>
                            <a href="#">
                                <i class="fa fa-power-off"></i>
                            </a>
                        </div>
                    </nav>
                    <!-- sidebar-wrapper  -->
                    <main class="page-content">
                        <div class="container-fluid">
                            <h2>Pro Sidebar</h2>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <p>This is a responsive sidebar template with dropdown menu based on bootstrap 4
                                        framework.</p>
                                    <p> You can find the complete code on <a
                                            href="https://github.com/azouaoui-med/pro-sidebar-template"
                                            target="_blank">
                                            Github</a>, it contains more themes and background image option</p>
                                </div>
                                <div class="form-group col-md-12">
                                    <iframe
                                        src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=star&count=true&size=small"
                                        frameborder="0" scrolling="0" width="90px" height="30px"></iframe>
                                    <iframe
                                        src="https://ghbtns.com/github-btn.html?user=azouaoui-med&repo=pro-sidebar-template&type=fork&count=true&size=small"
                                        frameborder="0" scrolling="0" width="90px" height="30px"></iframe>
                                </div>
                                <div class="form-group col-md-12">
                                    <div class="alert alert-success" role="alert">
                                        <h4 class="alert-heading">New !</h4>
                                        <p>New react pro sidebar library is now available on <a
                                                href="https://www.npmjs.com/package/react-pro-sidebar"
                                                target="_blank">npm</a> <a
                                                href="https://github.com/azouaoui-med/react-pro-sidebar"
                                                target="_blank">
                                                <img alt="GitHub stars"
                                                    src="https://img.shields.io/github/stars/azouaoui-med/react-pro-sidebar?style=social" />
                                            </a></p>
                                        <a href="https://github.com/azouaoui-med/react-pro-sidebar" target="_blank"
                                            class="btn btn-sm btn-primary mr-2">
                                            Github</a>
                                        <a href="https://azouaoui-med.github.io/react-pro-sidebar" target="_blank"
                                            class="btn btn-sm btn-success">
                                            Demo</a>

                                    </div>

                                </div>
                            </div>
                            <h5>More templates</h5>
                            <hr>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="card rounded-0 p-0 shadow-sm">
                                        <img src="https://user-images.githubusercontent.com/25878302/58369568-a49b2480-7efc-11e9-9ca9-2be44afacda1.png"
                                            class="card-img-top rounded-0" alt="Angular pro sidebar">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">Angular Pro Sidebar</h6>
                                            <a href="https://github.com/azouaoui-med/angular-pro-sidebar"
                                                target="_blank" class="btn btn-primary btn-sm">Github</a>
                                            <a href="https://azouaoui-med.github.io/angular-pro-sidebar/demo/"
                                                target="_blank" class="btn btn-success btn-sm">Preview</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="card rounded-0 p-0 shadow-sm">
                                        <img src="https://user-images.githubusercontent.com/25878302/58369258-33f20900-7ef8-11e9-8ff3-b277cb7ed7b4.PNG"
                                            class="card-img-top rounded-0" alt="Angular pro sidebar">
                                        <div class="card-body text-center">
                                            <h6 class="card-title">Angular Dashboard</h6>
                                            <a href="https://github.com/azouaoui-med/lightning-admin-angular"
                                                target="_blank" class="btn btn-primary btn-sm">Github</a>
                                            <a href="https://azouaoui-med.github.io/lightning-admin-angular/demo/"
                                                target="_blank" class="btn btn-success btn-sm">Preview</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <footer class="text-center">
                                <div class="mb-2">
                                    <small>
                                        © 2020 made with <i class="fa fa-heart" style="color:red"></i> by - <a
                                            target="_blank" rel="noopener noreferrer"
                                            href="https://azouaoui.netlify.com">
                                            Mohamed Azouaoui
                                        </a>
                                    </small>
                                </div>
                                <div>
                                    <a href="https://github.com/azouaoui-med" target="_blank">
                                        <img alt="GitHub followers"
                                            src="https://img.shields.io/github/followers/azouaoui-med?label=github&style=social" />
                                    </a>
                                    <a href="https://twitter.com/azouaoui_med" target="_blank">
                                        <img alt="Twitter Follow"
                                            src="https://img.shields.io/twitter/follow/azouaoui_med?label=twitter&style=social" />
                                    </a>
                                </div>
                            </footer>
                        </div>
                    </main>
                    <!-- page-content" -->
                </div>
            </div>
        </div>

        <!-- End Main HTML -->



        <!-- Separate Popper and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/apps.js') }}"></script>
</body>

</html>
