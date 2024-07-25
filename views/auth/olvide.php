<main class="auth">
    <h2 class="auth__heading"><?php echo $titulo;?></h2>
    <p class="auth__texto">Recupera tu acceso a DevWebCamp</p>

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


        <input type="submit" class="formulario__submit" value="Enviar Instrucciones">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesion</a>
        <a href="/registro" class="acciones__enlace">¿Aun no tienes una cuenta? Obtener una</a>
    </div>
</main>