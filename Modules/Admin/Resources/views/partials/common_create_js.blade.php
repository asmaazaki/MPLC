
<script src="{{ asset('/') }}admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{ asset('/') }}admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="{{ asset('/') }}admin/plugins/select2/js/select2.full.min.js"></script>
<script src="{{ asset('/') }}admin/plugins/summernote/summernote-bs4.min.js"></script>

<script>


    $('#summernote').summernote();
    $('#summernote1').summernote();

</script>
<script>
    $(function () {
        bsCustomFileInput.init();
        //Initialize Select2 Elements
        $('.select2').select2();
    });
</script>
<script>
    $(function () {
        $.validator.setDefaults();
        $('#my-form').validate({
            rules: {
                title_ar: {
                    required: true,
                },
                title_en: {
                    required: true,
                }
            },
            messages: {
                title_ar: {
                    required: "Please enter arabic title",
                },
                title_en: {
                    required: "please enter english title",
                }
            },
        });
    });
</script>
