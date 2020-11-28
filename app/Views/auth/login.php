



    <div id="login">

        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="<?= current_url(); ?>" method="POST">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username</label><br>
                                <input type="text" name="username" id="username" value="<?= old('username') ?>" required="" placeholder="Masukkan Username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password</label><br>
                                <input type="password" name="password" id="password" value="<?= old('password') ?>" required="" placeholder="Masukkan Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <br>

                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Sign In">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="<?= base_url('/auth/registration'); ?> " class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    
