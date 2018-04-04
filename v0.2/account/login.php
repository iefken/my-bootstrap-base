<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.03.18
 * Time: 01:04
 */
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-6"><?php echo $_SESSION["message"]; ?></h1>
        </div>
        <div class="col-lg-4 col-sm-1 text-center">

            <p>...</p>

        </div>
        <div class="col-lg-4 col-sm-8 text-center">
            <div class="row">
                <div class="col-6">

                    <button type="button" class="btn btn-block" id="loginTabButton">LOGIN</button>

                </div>
                <div class="col-6">

                    <button type="button" class="btn btn-block" id="registerTabButton">REGISTER</button>

                </div>

                <div class="col-lg-12">

                    <form class="mt-3 text-center" method="post">
                        <div class="row">
                            <div class="col-2">
                                <button class="form-control" type="button" disabled><i class="fa fa-user"></i></button>
                            </div>
                            <div class="col-10">
                                <input class="form-control" type="text" name='username' placeholder="username"/>
                            </div>

                            <div class="col-2">
                                <button class="form-control" type="button" disabled><i class="fa fa-lock"></i></button>
                            </div>
                            <div class="col-10">
                                <input class="form-control" type="password" name='password' placeholder="password"/>
                            </div>
                        </div>
                        <!--
                        <div>
                            <i class="fa fa-lock"></i>
                            <input class="" type="password" name='password' placeholder="password"/>
                        </div>
                        -->
                        <input class="btn btn-block mt-3" type="submit" value="Login!">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-1 text-center">

            <p>...</p>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 text-center">
            <h1 class="mt-5">Home page column 2.1</h1>
        </div>
        <div class="col-lg-6 text-center">
            <h1 class="mt-5">Home page column 2.2</h1>
        </div>
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Home page column 2.3</h1>
        </div>
    </div>
</div>

<!--
<main role="main" class="container">

    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a
            mostly barebones HTML document.</p>
    </div>

</main><!-- /.container -->