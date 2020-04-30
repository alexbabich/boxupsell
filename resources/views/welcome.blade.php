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
        <div class="df-page-welcome">
            <section>
                <div class="df-container">
                    <!-- class df-pass-first-step and df-pass-second-step is showing progress-->
                    <div class="df-row df-justify-between df-steps-nav df-pass-first-step">
                        <div class="df-steps-item df-active">
                            <span class="df-steps-point"></span>
                            <p class="df-steps-title">Order submitted</p>
                        </div>
                        <div class="df-steps-item df-active df-current">
                            <span class="df-steps-point"></span>
                            <p class="df-steps-title">SPECIAL OFFER</p>
                        </div>
                        <div class="df-steps-item">
                            <span class="df-steps-point"></span>
                            <p class="df-steps-title">ORDER RECEIPT</p>
                        </div>
                    </div>
                    <div class="df-row df-justify-center df-direction-column df-align-center">
                        <h2 class="df-page-title">Wait!</h2>
                        <h4 class="df-page-subtitle">Your order is not complete.</h4>
                        <h4 class="df-page-subtitle">We have a <span class="df-text-blue df-underline">special offer for you</span>.</h4>
                    </div>
                    <div class="df-row df-justify-center">
                        <p class="df-mt-40 df-page-description">You want to achieve your target weight as soon as possible, right? Well, fasting requires patience. However, there’s something you can do <b class="df-text-purple">RIGHT NOW</b> to make that wait a little shorter<br/><i>(and 10x times more enjoyable!)</i></p>
                    </div>
                    <div class="df-row df-justify-around df-align-center df-order-points">
                        <div class="df-flex df-align-center">
                            <div class="df-icon">
                                @svg('stars.svg', 'df-stars')
                            </div>
                            <h5>Multiply your results</h5>
                        </div>
                        <div class="df-flex df-align-center">
                            <div class="df-icon">
                                @svg('health.svg', 'df-health')
                            </div>
                            <h5>Improve your health</h5>
                        </div>
                        <div class="df-flex df-align-center">
                            <div class="df-icon">
                                @svg('head.svg', 'df-head')
                            </div>
                            <h5>Defeat hunger pans</h5>
                        </div>
                    </div>
                    <div class="df-row df-justify-center df-align-center df-mb-40">
                        <h5>with a <span class="df-text-blue df-underline">100% natural, science-based</span> solution</h5>
                    </div>
                    <div class="df-row df-justify-center df-align-center df-mb-30">
                        <div class="df-image">
                            @svg('house.svg', 'df-house')
                        </div>
                    </div>

                    <div class="df-row df-justify-center df-align-center">
                        <h2>The Essential Fiber Complex</h2>
                    </div>

                    <div class="df-row">
                        <ul class="df-list df-list-essential-fiber df-m-auto df-mt-30 df-mb-30">
                            <li class="df-list-item">
                                <p>Helps to prolong your fasts and speed up the weight loss process – without the uncomfortable hunger pangs.</p>
                            </li>
                            <li class="df-list-item">
                                <p>Naturally lowers both “bad” LDL and overall cholesterol.</p>
                            </li>
                            <li class="df-list-item">
                                <p>Cleanses the colon lowering the risk of developing colon cancer.</p>
                            </li>
                            <li class="df-list-item">
                                <p>Lowers the risk of diabetes by slowing down the absorption of sugar.</p>
                            </li>
                            <li class="df-list-item">
                                <p>Improves your skin health and gives you that healthy glow.</p>
                            </li>
                        </ul>
                    </div>

                    <div class="df-row df-justify-center df-align-center df-text-block df-mb-50">
                        <h5>Just use one glass of this hunger-crushing solution and you will be amazed at the benefits it provides.</h5>
                        <h5>There is <span class="df-text-purple">NO SUGAR</span> and just <span class="df-text-purple">3 CALORIES</span> per serving.</h5>
                        <h4 class="df-text-blue">It will not break your fast!</h4>
                    </div>
                </div>
            </section>

            <section class="df-grey-bg df-pb-50 df-pt-50">
                <div class="df-container">
                    <div class="df-row df-justify-center df-align-center df-text-block df-mb-50 df-offer-text">
                        <h5>This is an exclusive offer</h5>
                        <h5>On this page only</h5>
                    </div>

                    <div class="df-row df-justify-center df-direction-column df-align-center df-mb-50">
                        <h2 class="df-page-title">Get a <span class="df-text-blue">30-pack BOX</span> of natural</h2>
                        <h2 class="df-page-title df-text-purple">Essential Fiber Complex</h2>
                        <p class="df-bold">with a detailed guide formulated by nutrition experts</p>
                        <a href="" tabindex="" class="df-link df-link-purple df-mt-30">FULL 30-DAY SATISFACTION GUARANTEE</a>
                    </div>

                    <div class="df-row df-justify-center df-align-center df-mb-30">
                        <div class="df-image">
                            @svg('house.svg', 'df-house')
                        </div>
                    </div>

                    <div class="df-row df-justify-center df-align-center df-mb-40 df-product-list">
                        <div class="df-product-item df-most-popular">
                            <div class="">
                                MOST POPULAR
                            </div>
                        </div>
                        <div class="df-product-item"></div>
                        <div class="df-product-item"></div>
                    </div>

                    <div class="df-row df-justify-center df-align-center df-mb-30">
                        <a href="" class="df-unsbscribe">No, thank you, I’m not interested in this offer</a>
                    </div>
                </div>
            </section>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
