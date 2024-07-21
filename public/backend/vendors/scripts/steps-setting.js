$(document).ready(function () {
    $(".tab-wizard").steps({
        headerTag: "h5",
        bodyTag: "section",
        transitionEffect: "fade",
        titleTemplate: '<span class="step">#index#</span> <span class="info">#title#</span>',
        labels: {
            finish: "Submit",
            next: "Next",
            previous: "Previous"
        },
        onStepChanged: function (event, currentIndex, priorIndex) {
            $('.steps .current').prevAll().addClass('disabled');
        },
        onFinished: function (event, currentIndex) {
            var form = $("#addEmployeeForm");

            if (form.valid()) {
                var formData = form.serialize();

                console.log("Form Data: ", formData); // Debugging

                $.ajax({
                    type: "POST",
                    url: form.attr('action'),
                    data: formData,
                    dataType: 'json',
                    success: function (response) {
                        console.log("Server Response: ", response); // Debugging
                        if (response.status === 'success') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: response.message
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: response.message
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log("AJAX Error: ", error); // Debugging
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'An error occurred. Please try again.'
                        });
                    }
                });
            }
        }
    });
});
