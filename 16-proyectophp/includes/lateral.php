
<!-- Sidebar -->
<aside id="sidebar">

    <?php if(isset($_SESSION['usuario'])): ?>
        <div class="bloque" id="usuario_logeado">
            <h3>Bienvenid@! <?= $_SESSION['usuario']['nombre'] . ' ' . $_SESSION['usuario']['apellidos'] ; ?></h3>
            <!-- botones -->
            <a href="crearEntradas.php" class="boton boton-verde">Crear Entradas</a>
            <a href="crearCategoria.php" class="boton">Crear Categoria</a>
            <a href="cerrar.php" class="boton boton-naranja">Mis Datos</a>
            <a href="cerrar.php" class="boton boton-rojo">Cerrar Sesion</a>
        </div>
    <?php endif; ?>


    <?php if(!isset($_SESSION['usuario'])): ?>

        <div id="login" class="bloque">
            <h3>Identificate</h3>

            <?php if(isset($_SESSION['error_login'])): ?>
                <div class="alerta alerta-error">
                     <?= $_SESSION['error_login'] ; ?>
                </div>
            <?php endif; ?>


            <form action="login.php" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="">

                <label for="password">Password</label>
                <input type="password" name="password" id="">

                <input type="submit" value="Entrar">
            </form>
        </div>

        <div id="register" class="bloque">

            <!-- <?php if(isset($_SESSION['errores'])): ?>
                <?php var_dump($_SESSION['errores']) ; ?>
            <?php endif; ?> -->

            <h3>Registrate</h3>

            <!-- mostrar errores -->
            <?php if(isset($_SESSION['completado'])):?>
                <div class="alerta alerta-exito">
                    <?= $_SESSION['completado']; ?>
                </div>
            <?php  elseif(isset($_SESSION['errores']['general'])): ?>
                <div class="alerta alerta-error">
                    <?= $_SESSION['errores']['general']; ?>
                </div>
            <?php endif; ?>

            <form action="registro.php" method="post">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'nombre') : ''; ?>

                <label for="apellidos">Apellidos</label>
                <input type="text" name="apellidos" id="">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'apellidos') : ''; ?>

                <label for="email">Email</label>
                <input type="email" name="email" id="">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'email') : ''; ?>
                
                <label for="password">Password</label>
                <input type="password" name="password" id="">
                <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'],'password') : ''; ?>
                
                <input type="submit" value="Registrar" name="submit">
            </form>

            <?php borrarErrores(); ?>
        </div>
        <?php endif; ?>
    </aside>