<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo;?></h2>
    <p class="auth__texto">Inicia Sesion en DevWebCamp</p>

    <form action="" class="formulario">
        <div class="formulario__campo">
            <label class="formulario__label">Email</label>
            <input 
                type="email"
                class="formulario__input"
                name="email"
                id="email"
                placeholder="Tu Email"
            />
        </div>

        <div class="formulario__campo">
            <label class="formulario__label">Password</label>
            <input 
                type="password"
                class="formulario__input"
                name="password"
                id="password"
                placeholder="Tu Password"
            />
        </div>

        <input type="submit" class="formulario__submit" value="Iniciar Sesion">
    </form>

    <div class="acciones">
        <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta? Obtener una</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>