<div class="center-align">
	<img src="<?= URL.'assets/img/Page404/page-curl.png'?>" class="img-fluid">
	<p class="text-danger">A página na qual você tentou acessar não existe.</p>
	<span id="text" class="text-danger"></span>
</div>

<script type="text/javascript">

	let p = document.getElementById("text");
        let i = 5;
        let href = "<?= URL ?>";


        p.innerHTML = "Está página não existe. Você será redirecionado em " + i + " segundos...";

        setInterval(() => {
            p.innerHTML = "Está página não existe. Você será redirecionado em " + i + " segundos...";
            i--;
        }, 1000);

        setTimeout(() => {
            location.href = href;
        }, 6000);

</script>

</body>
</html>