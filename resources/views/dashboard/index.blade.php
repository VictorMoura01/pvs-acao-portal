@extends('dashboard.layout')

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="Victor Moura">--}}
{{--    <title>Dashboard Template · Bootstrap</title>--}}

{{--    <!-- Bootstrap core CSS -->--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"--}}
{{--          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">--}}
{{--    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">--}}

{{--    <script src="https://kit.fontawesome.com/f4bfea855b.js" crossorigin="anonymous"></script>--}}
{{--</head>--}}
{{--<body>--}}
{{--<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">--}}
{{--    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PVS Ação</a>--}}
{{--    <ul class="navbar-nav px-3">--}}
{{--        <li class="nav-item text-nowrap">--}}
{{--            <a href="#" class="nav-link">Sair</a>--}}
{{--        </li>--}}
{{--    </ul>--}}
{{--</nav>--}}

{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <nav class="col-md-2 d-none d-md-block bg-light sidebar">--}}
{{--            <div class="sidebar-sticky">--}}
{{--                <ul class="nav flex-column">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link active" href="#">--}}
{{--                            <i class="fas fa-home"></i>--}}
{{--                            Dashboard <span class="sr-only">(current)</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            <i class="far fa-file"></i>--}}
{{--                            Gerenciar Equipe--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">--}}
{{--                    <span>Saved reports</span>--}}
{{--                    <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">--}}
{{--                        <span data-feather="plus-circle"></span>--}}
{{--                    </a>--}}
{{--                </h6>--}}

{{--                <ul class="nav flex-column mb-2">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="#">--}}
{{--                            Current month--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">--}}
{{--            <div--}}
{{--                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">--}}
{{--                <h1 class="h2">Dashboard</h1>--}}
{{--                <div class="btn-toolbar mb-2 mb-md-0">--}}
{{--                    <div class="btn-group mr-2">--}}
{{--                        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>--}}
{{--                        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>--}}
{{--                    </div>--}}
{{--                    <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">--}}
{{--                        <span data-feather="calendar"></span>--}}
{{--                        This week--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <h2>Section title</h2>--}}
{{--            <div class="table-responsive">--}}
{{--                <table class="table table-striped table-sm">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th>#</th>--}}
{{--                        <th>Header</th>--}}
{{--                        <th>Header</th>--}}
{{--                        <th>Header</th>--}}
{{--                        <th>Header</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td>1,001</td>--}}
{{--                        <td>Lorem</td>--}}
{{--                        <td>ipsum</td>--}}
{{--                        <td>dolor</td>--}}
{{--                        <td>sit</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,002</td>--}}
{{--                        <td>amet</td>--}}
{{--                        <td>consectetur</td>--}}
{{--                        <td>adipiscing</td>--}}
{{--                        <td>elit</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,003</td>--}}
{{--                        <td>Integer</td>--}}
{{--                        <td>nec</td>--}}
{{--                        <td>odio</td>--}}
{{--                        <td>Praesent</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,003</td>--}}
{{--                        <td>libero</td>--}}
{{--                        <td>Sed</td>--}}
{{--                        <td>cursus</td>--}}
{{--                        <td>ante</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,004</td>--}}
{{--                        <td>dapibus</td>--}}
{{--                        <td>diam</td>--}}
{{--                        <td>Sed</td>--}}
{{--                        <td>nisi</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,005</td>--}}
{{--                        <td>Nulla</td>--}}
{{--                        <td>quis</td>--}}
{{--                        <td>sem</td>--}}
{{--                        <td>at</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,006</td>--}}
{{--                        <td>nibh</td>--}}
{{--                        <td>elementum</td>--}}
{{--                        <td>imperdiet</td>--}}
{{--                        <td>Duis</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,007</td>--}}
{{--                        <td>sagittis</td>--}}
{{--                        <td>ipsum</td>--}}
{{--                        <td>Praesent</td>--}}
{{--                        <td>mauris</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,008</td>--}}
{{--                        <td>Fusce</td>--}}
{{--                        <td>nec</td>--}}
{{--                        <td>tellus</td>--}}
{{--                        <td>sed</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,009</td>--}}
{{--                        <td>augue</td>--}}
{{--                        <td>semper</td>--}}
{{--                        <td>porta</td>--}}
{{--                        <td>Mauris</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,010</td>--}}
{{--                        <td>massa</td>--}}
{{--                        <td>Vestibulum</td>--}}
{{--                        <td>lacinia</td>--}}
{{--                        <td>arcu</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,011</td>--}}
{{--                        <td>eget</td>--}}
{{--                        <td>nulla</td>--}}
{{--                        <td>Class</td>--}}
{{--                        <td>aptent</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,012</td>--}}
{{--                        <td>taciti</td>--}}
{{--                        <td>sociosqu</td>--}}
{{--                        <td>ad</td>--}}
{{--                        <td>litora</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,013</td>--}}
{{--                        <td>torquent</td>--}}
{{--                        <td>per</td>--}}
{{--                        <td>conubia</td>--}}
{{--                        <td>nostra</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,014</td>--}}
{{--                        <td>per</td>--}}
{{--                        <td>inceptos</td>--}}
{{--                        <td>himenaeos</td>--}}
{{--                        <td>Curabitur</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>1,015</td>--}}
{{--                        <td>sodales</td>--}}
{{--                        <td>ligula</td>--}}
{{--                        <td>in</td>--}}
{{--                        <td>libero</td>--}}
{{--                    </tr>--}}
{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </main>--}}
{{--    </div>--}}
{{--</div>--}}

{{--@include('templates.footer')--}}


{{--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"--}}
{{--        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"--}}
{{--        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"--}}
{{--        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--</body>--}}
{{--</html>--}}
