</div>
<footer>
    <p>© iℳangerℳieux all rights reserved - Thomas Vinchon - Clément Mercier</p>
    <button class="changeuser">Changer d'utilisateur...</button>
    <script>
        $(document).ready( function () {
            $("footer").on('click','.changeuser',function() {
                document.location.href="connexion.php";     
                });
            })
    </script>
</footer>
</body>
</html>