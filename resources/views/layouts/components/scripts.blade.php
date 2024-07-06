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

<!-- Sweet-alert js  -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


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

<script>
    var scriptURL = "{{ config('custom.appscript_quote_excel') }}";
    const form = document.forms['new-quote-form'];

    form.addEventListener('submit', e => {
        e.preventDefault();

        if (form.checkValidity()) {
            // Show loading spinner
            swal({
                title: "Quote is under review",
                text: "Please wait.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    swal("Thanks!", "Your quote has been successfully submitted.", "success");
                })
                .then(() => {
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    swal("wrong", "Some information is missing.", "error");
                });
        } else {
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>

<script>
    var scriptURL = "{{ config('custom.appscript_quote_excel') }}";
    const formCCTV = document.forms['new-cctv-form'];

    formCCTV.addEventListener('submit', e => {
        e.preventDefault();

        if (formCCTV.checkValidity()) {
            // Show loading spinner
            swal({
                title: "Application is under review",
                text: "Please wait.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(formCCTV)
                })
                .then(response => {
                    swal("Thanks!", "Your application has been successfully submitted.", "success");
                })
                .then(() => {
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    swal("wrong", "Some information is missing.", "error");
                });
        } else {
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>

<script>
    var scriptURL = "{{ config('custom.appscript_quote_excel') }}";
    const formAlarm = document.forms['new-alarm-form'];

    formAlarm.addEventListener('submit', e => {
        e.preventDefault();

        if (formAlarm.checkValidity()) {
            // Show loading spinner
            swal({
                title: "Application is under review",
                text: "Please wait.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(formAlarm)
                })
                .then(response => {
                    swal("Thanks!", "Your application has been successfully submitted.", "success");
                })
                .then(() => {
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    swal("wrong", "Some information is missing.", "error");
                });
        } else {
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>

<script>
    var scriptURL = "{{ config('custom.appscript_quote_excel') }}";
    const formAccessControl = document.forms['new-accessControl-form'];

    formAccessControl.addEventListener('submit', e => {
        e.preventDefault();

        if (formAccessControl.checkValidity()) {
            // Show loading spinner
            swal({
                title: "Application is under review",
                text: "Please wait.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(formAccessControl)
                })
                .then(response => {
                    swal("Thanks!", "Your application has been successfully submitted.", "success");
                })
                .then(() => {
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    swal("wrong", "Some information is missing.", "error");
                });
        } else {
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>

<script>
    var scriptURL = "{{ config('custom.appscript_quote_excel') }}";
    const formIntercom = document.forms['new-intercom-form'];

    formIntercom.addEventListener('submit', e => {
        e.preventDefault();

        if (formIntercom.checkValidity()) {
            // Show loading spinner
            swal({
                title: "Application is under review",
                text: "Please wait.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(formIntercom)
                })
                .then(response => {
                    swal("Thanks!", "Your application has been successfully submitted.", "success");
                })
                .then(() => {
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000);
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    swal("wrong", "Some information is missing.", "error");
                });
        } else {
            swal("wrong", "Some information is missing.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>