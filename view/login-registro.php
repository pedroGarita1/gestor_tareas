<div class="cont_centrar">
    <div class="cont_login">
        <div class="cont_info_log_sign_up">
            <div class="col_md_login">
                <div class="cont_ba_opcitiy">
                    <h2>LOGIN</h2>  
                    <p></p> 
                    <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                    </div>
                    </div>
                    <div class="col_md_sign_up">
                    <div class="cont_ba_opcitiy">
                    <h2>SIGN UP</h2>            
                    <p></p>
                    <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                </div>
            </div>
        </div>
        <div class="cont_back_info">
            <div class="cont_img_back_grey">
                <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
            </div>
        </div>
        <div class="cont_forms" >
            <div class="cont_img_back_">
                <img src="https://www.gtagangwars.de/suite/images/styleLogo-6bd77433ddf78bd8477ea7306e804f677bc925d0.png" alt="" />
            </div>
            <div class="cont_form_login">
                <a href="#" onclick="ocultar_login_sign_up()" ><i class="fa-solid fa-circle-xmark"></i></a>
                <h2>LOGIN</h2>
                    <form action="procesos/usuarios/login.php" method="POST">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" class="form-control mb-3" placeholder="Usuario" name="username" />
                                    <input type="password" class="form-control mb-3" placeholder="Contraseña" name="password" />
                                    <button class="btn_login">LOGIN</button>
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
            <div class="cont_form_sign_up">
                <a href="#" onclick="ocultar_login_sign_up()"><i class="fa-solid fa-circle-xmark"></i></a>
                <h2>SIGN UP</h2>
                <form action="procesos/usuarios/registrar.php" method="POST">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="form-control mb-3" placeholder="Usuario" name="username"/>
                                <input type="password" class="form-control mb-3" placeholder="contraseña" name="password"/>
                                <input type="text" class="form-control mb-3" placeholder="Nombre" name="name"/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-3" placeholder="Apellido Paterno" name="firsname1"/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control mb-3" placeholder="Apellido Materno" name="firsname2"/>
                                    </div>
                                </div>
                                <button class="btn_sign_up" >SIGN UP</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>