<!DOCTYPE html>
<html lang="en">
@include('partials.head')

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQRWPZB" height="0" width="0"
            style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @include('partials.script')

    @yield('custom-script')
    <script>
        $(document).ready(function() {
            $("#mc-embedded-subscribe-form").submit(function(event) {
                event.preventDefault();
                var $form = $(this);
                $.ajax({
                    type: $form.attr('method'),
                    url: $form.attr('action'),
                    data: $form.serialize(),
                    dataType: "json",
                    contentType: "application/x-www-form-urlencoded; charset=UTF-8",
                    beforeSend: function() {
                        $('#news-subscriber-message').html(
                            `<span style="color: green">Processing ..</span>`);
                    },
                    success: function(responseData, textStatus, jqXHR) {
                        if (responseData.error) {
                            $('#news-subscriber-message').html(
                                `<span style="color: red">${responseData.error.email}</span>`
                            );
                        } else {
                            $('#news-subscriber-message').html(
                                `<span style="color: green">${responseData.message}</span>`);
                        }
                        console.log('ajax done');
                    },
                    error: function(responseData) {
                        console.log('ajax err');

                        console.log(responseData);
                    }
                });
            });
        });
    </script>
    {{-- whatsapp button --}}
    <a href="https://api.whatsapp.com/send?phone=19256959888&text=Hi,%20I%20am%20interested%20in%20your%20services."
        class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
</body>

</html>
