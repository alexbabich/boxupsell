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
            <section class="df-grey-bg">
                <div class="df-container">
                    <div class="df-row df-justify-center df-align-center">
                        <h2 class="df-page-title df-mb-40">Checkout</h2>
                    </div>
                </div>
                <div class="df-order-details">
                    <div class="df-order-title">
                        <p>Order details</p>
                    </div>
                    <div class="df-order-info df-flex df-justify-around df-pt-30 df-pb-30">
                        <div class="df-product-image">
                            @svg('box6.svg')
                        </div>
                        <div class="df-product-price-info df-flex">
                            <div class="df-product-price-item df-flex df-direction-row df-justify-between">
                                <p class="df-product-title">6 boxes</p>
                                <p class="df-crossed-text">$420.00</p>
                            </div>
                            <div class="df-product-price-item df-flex df-direction-row df-justify-between">
                                <p>Discount <b>-46%</b></p>
                                <p class="df-bold df-text-red">- $151.00</p>
                            </div>
                            <div class="df-product-price-item df-order-total df-flex df-direction-row df-justify-between">
                                <h4>Total</h4>
                                <h4 class="df-bold">$269.00</h4>
                            </div>
                        </div>
                    </div>

                    <div class="df-order-title">
                        <p>SHIPPING DETAILS</p>
                    </div>

                    <form class="df-order-contact">
                        <div class="df-flex df-direction-column df-order-contact-item">
                            <label class="df-mb-10">Full name</label>
                            <input type="text" placeholder="Enter here" />
                        </div>
                        <div class="df-order-contact-item">
                            <label class="df-mb-10">Street address</label>
                            <input type="text" placeholder="Enter here" />
                        </div>
                        <div class="df-order-contact-item">
                            <label class="df-mb-10">Town / city</label>
                            <input type="text" placeholder="Enter here" />
                        </div>
                        <div class="df-order-contact-item">
                            <label class="df-mb-10">State</label>
                            <input type="text" placeholder="Enter here" />
                        </div>
                        <div class="df-order-contact-item">
                            <label class="df-mb-10">Zip code</label>
                            <input type="text" placeholder="Enter here" />
                        </div>
                        <div class="df-order-contact-item">
                            <label class="df-mb-10">Phone number</label>
                            <input type="text" placeholder="Enter here" />
                        </div>
                        <div class="df-order-contact-item df-justify-center">
                            <button type="submit" class="df-button df-button-confirm">Confirm</button>
                        </div>
                    </form>
                </div>
            </section>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
