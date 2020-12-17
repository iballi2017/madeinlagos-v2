        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="../assets/plugins/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="../assets/plugins/bootstrap-4.2.1/js/bootstrap.min.js">

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons@4.10.0/dist/feather.min.js"></script>
    <script src="../assets/plugins/feather.min.js"></script>
    <script>
        $(document).ready(function() {
            feather.replace();

            $('button').click(function() {
                $('.alert').html('<i data-feather="activity"></i>');
                feather.replace();
            });

        });
    </script>
    <!-- chartjs -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <!-- Custom javascript -->
        <script src="../javascript/main.js"></script>
</body>

</html>