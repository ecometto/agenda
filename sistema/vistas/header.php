<div class="fluid-container bg-secondary ">

    <div class="row">
        <div class="col-md-9 d-flex align-items-center justify-content-center">
            <h3 class="text-light">Sistema de Agenda de Contactos</h3>
        </div>
        <div class="col-md-3 text-center">

            <a href="../cerrar_session.php" class="link-light">
                <?php echo "$_SESSION[user_mail]"; ?> <br>

                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                </svg>
                LogOut
            </a>
        </div>
    </div>
</div>