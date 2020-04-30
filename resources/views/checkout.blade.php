<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
        <div class="df-page-checkout">
            <section class="df-grey-bg df-pb-50 df-pt-50">
                <div class="df-container">
                    <div class="df-row df-justify-center df-align-center">
                        <h2 class="df-page-title">Checkout</h2>
                    </div>
                </div>
                <div class="df-order-details">
                    <div class="df-order-title">
                        <p>Order details</p>
                    </div>
                    <div class="df-order-info">
                        <div class="df-product-image">
                            @svg('box6.svg')
                        </div>
                    </div>

                    <div class="df-order-title">
                        <p>SHIPPING DETAILS</p>
                    </div>

                    <div class="df-order-contact">
                        
                    </div>
                </div>
            </section>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
