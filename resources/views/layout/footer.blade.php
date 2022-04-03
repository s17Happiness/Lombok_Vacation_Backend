</div>
</div>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    function myFunction() {
        var x = document.getElementById("myInput")
        var y = document.getElementById("hide1")
        var z = document.getElementById("hide2")
        if (x.type == "password") {
            x.type = "text";
            y.style.display = "inline"
            z.style.display = "none"
        } else {
            x.type = "password";
            y.style.display = "none"
            z.style.display = "inline"
        }
    }
</script>
</body>
</html>