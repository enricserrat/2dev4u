<div id="cookie-banner" class="cookie-banner" style="z-index: 9998">
    <div class="cookie-content">
        <p class="cookie-text p-4">
            Utilitzem cookies pròpies i de tercers per oferir-te un millor servei. <a href="politica-cookies" target="_blank" style="text-decoration: underline; font-weight: bold;">Més informació sobre les cookies</a>
        </p>
        <div class="cookie-buttons">
            <button id="reject-cookie" class="cookie-btn">Continuar sense acceptar</button>
            <button id="accept-cookie" class="cookie-btn accept">Acceptar-ho tot</button>
        </div>
    </div>
</div>

<script>
    // oculta el banner de cookies después de aceptar
    document.getElementById('accept-cookie').addEventListener('click', function() {
        fetch('/accept-cookies')
            .then(response => response.json())
            .then(data => {
                if (data.status === 'accepted') {
                    document.getElementById('cookie-banner').style.display = 'none';
                }
            });
    });

    // oculta el banner de cookies después de denegar
    document.getElementById('reject-cookie').addEventListener('click', function() {
        fetch('/reject-cookies')
        .then(response => response.json())
        .then(data => {
                if (data.status === 'rejected') {
                    document.getElementById('cookie-banner').style.display = 'none';
                }
            });
    });
</script>