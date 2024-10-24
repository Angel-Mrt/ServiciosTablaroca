<footer class="footer">
    <div class="footer__grid">
        <div class="footer__contenido">
            <a href="/">
                <h2 class="footer__logo">
                    Serv.<span class="footer__logo footer__logo--bold">TBR</span>
                </h2>
            </a>
            <p class="footer__texto">
                Creamos espacios únicos a la medida.
                Contactanos y pide tu cotizacion gratis,
                adaptamos cada proyecto a tus necesidades y visión.
            </p>
        </div>
        <nav class="menu-redes">
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://facebook.com/C%C3%B3digo-Con-Juan-103341632130628">
                <span class="menu-redes__ocultar">Facebook</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://twitter.com/codigoconjuan">
                <span class="menu-redes__ocultar">Twitter</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://youtube.com/codigoconjuan">
                <span class="menu-redes__ocultar">YouTube</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://instagram.com/codigoconjuan">
                <span class="menu-redes__ocultar">Instagram</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://tiktok.com/@codigoconjuan">
                <span class="menu-redes__ocultar">Tiktok</span>
            </a>
            <a class="menu-redes__enlace" rel="noopener noreferrer" target="_blank" href="https://github.com/codigoconjuan">
                <span class="menu-redes__ocultar">Github</span>
            </a>
        </nav>
    </div>

    <p class="footer__copyright">
        Serv.TBR
        <span class="footer__copyright--regular">
            - @Todos los derechos reservados <?php echo date('Y'); ?>
        </span>
    </p>
</footer>

<script src="../build/js/bundle.min.js"></script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

<!-- DataTables JS -->
<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

<!-- DataTables Buttons JS -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#propiedades').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#propiedades_wrapper .col-md-6:eq(0)');
    });

    $(document).ready(function() {
        var table = $('#vendedores').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print']
        });

        table.buttons().container()
            .appendTo('#vendedores_wrapper .col-md-6:eq(0)');
    });
</script>