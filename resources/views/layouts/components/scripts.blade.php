<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/slick-animation.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/counterup.min.js"></script>
<script src="assets/js/waypoints.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.nice-select.js"></script>
<script src="assets/js/script.js"></script>

<script>
    $(document).ready(function() {
        function loadContent(url) {
            $.ajax({
                url: url,
                type: 'GET',
                success: function(response) {
                    $('.subMaintenance').html(response);
                },
                error: function(xhr, status, error) {
                    console.error('An error occurred while loading the content:', error);
                }
            });
        }

        loadContent('/cctvMaintenance');
        $('#cctvMaintenanceLink').addClass('active');

        $('#cctvMaintenanceLink').click(function(e) {
            e.preventDefault();
            loadContent('/cctvMaintenance');
            $('.service-link').removeClass('active');
            $(this).addClass('active');
        });

        $('#alarmMaintenanceLink').click(function(e) {
            e.preventDefault();
            loadContent('/alarmMaintenance');
            $('.service-link').removeClass('active');
            $(this).addClass('active');
        });

        $('#accessControlMaintenanceLink').click(function(e) {
            e.preventDefault();
            loadContent('/accessControlMaintenance');
            $('.service-link').removeClass('active');
            $(this).addClass('active');
        });

        $('#intercomSystemMaintenanceLink').click(function(e) {
            e.preventDefault();
            loadContent('/intercomSystemMaintenance');
            $('.service-link').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>