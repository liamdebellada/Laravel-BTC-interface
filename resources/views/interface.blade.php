<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cryptocurrency interface</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="content-wrapper nav-container">
                <div class="content-container navigation-container">
                    <div class="nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Price</a></li>
                            <li><a href="#">App</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <button class="sign-in-btn">Sign in</button>
                        </ul>
                    </div> 
                </div>
            </div>
            <div class="content-wrapper top-container">
                <div class="content-container responsive-top" style="height: 25rem;">
                    <div class="left-content">
                        <h1 class="primary-text">Buy and sell cryptocurrency</h1>
                        <p class="sub-text">
                            Fast and secure way to purchase or exchange 150+ cryptocurrencies
                        </p>
                        <div class="subscribe-container">
                            <input placeholder="Subscribe Now" class="subscribe-input"/>
                            <button class="subscribe-button"><img class="icon-image" src="{{ url('/images/white_arrow.svg') }}"/></button>
                        </div>
                    </div>
                    <div class="right-content">
                        <div class="send-container">
                            <label>Send</label>
                            <div class="hinted-input">
                                <div class="hint">
                                    <text class="hint-text">USD</text>
                                </div>
                                <input placeholder="0.0214 BTC" class="currency-input"/>
                            </div>
                            <label style="padding-top: 10px;">Recieve</label>
                            <div class="hinted-input">
                                <div class="hint">
                                    <text class="hint-text">BTC</text>
                                </div>
                                <input placeholder="0.0214 BTC" class="currency-input"/>
                            </div>
                            <p class="explaination-text">1 USD - {{$btcValue}} BTC <a href="https://blockchain.info/" class="info-text">Expected rate No extra fees</a></p>
                            <button class="buy-button">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-wrapper bottom-container no-bottom-margin">
                <div class="centered-heading">
                    <label>Ask Question</label>
                    <h1 class="heading-text">Let us hear from you directly!</h1>
                </div>
            </div>
            <div class="content-wrapper bottom-container">
                <div class="content-container list-responsive" style="align-items: flex-start; height: 18rem;">
                    <div class="left-content list-content">
                        <h4>Address</h4>
                        <div class="icon-list-item">
                            <img class="address-icons" src="{{ url('/images/blue_pin.svg') }}"/>
                            <text>Dartford, Kent</text>
                        </div>
                        <div class="icon-list-item">
                            <img class="address-icons" src="{{ url('/images/blue_phone.svg') }}"/>
                            <text>0203 633 1775</text>
                        </div>
                        <div class="icon-list-item">
                            <img class="address-icons" src="{{ url('/images/blue_envelope.svg') }}"/>
                            <text>hello@example.com</text>
                        </div>
                    </div>
                    <div class="message-wrapper">
                        <div class="right-content message-parent">
                        <form style="width:100%;" action="/api/contact" method="post">
                            <div class="message-container">
                                <div class="message-field" style="margin-right: 1rem;">
                                    <label>Full name</label>
                                    <input name="name" class="message-input" placeholder="Full name" required/>
                                </div>
                                <div class="message-field">
                                    <label>Email</label>
                                    <input name="email" class="message-input" placeholder="hello@domain.com" required/>
                                </div>
                            </div>
                            <div class="message-textarea">
                                <textarea name="question" placeholder="Tell us what we can help you with!" class="help-text-area" required></textarea>
                                <button class="send-button">Send message</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <!-- <div>Icons made by <a href="https://www.flaticon.com/authors/bqlqn" title="bqlqn">bqlqn</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
    <!-- <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div> -->
</html>

