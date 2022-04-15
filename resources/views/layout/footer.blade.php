</div>
</div>

{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
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
@stack('script')
</body>
</html>