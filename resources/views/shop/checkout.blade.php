<x-shop-layout>

    <section class="section section-bg" id="call-to-action"
        style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Easy <em>Checkout</em></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <section class="section">
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-form">
                        <form id="contact" action="{{ route('save-order') }}" method="post">
                            @csrf <!-- Add CSRF token for security -->
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Title:</label>
                                    <select name="title" required>
                                        <option value="">-- Choose --</option>
                                        <option value="dr">Dr.</option>
                                        <option value="miss">Miss</option>
                                        <option value="mr">Mr.</option>
                                        <option value="mrs">Mrs.</option>
                                        <option value="ms">Ms.</option>
                                        <option value="other">Other</option>
                                        <option value="prof">Prof.</option>
                                        <option value="rev">Rev.</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" name="name" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Email:</label>
                                    <input type="email" name="email" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Phone:</label>
                                    <input type="text" name="phone" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Address 1:</label>
                                    <input type="text" name="address1" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Address 2:</label>
                                    <input type="text" name="address2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>City:</label>
                                    <input type="text" name="city" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>State:</label>
                                    <input type="text" name="state" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Zip:</label>
                                    <input type="text" name="zip" required>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Country:</label>
                                    <input type="text" name="country" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label>Payment method:</label>
                                    <select name="payment_method" required>
                                        <option value="">-- Choose --</option>
                                        <option value="bank">Bank account</option>
                                        <option value="cash">Cash</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label>Captcha:</label>
                                    <input type="text" name="captcha" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="main-button">
                                        <div class="float-left">
                                         
                                        </div>
                                        <div class="float-right">
                                            <button type="submit">Pay</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <br>
                </div>

                <div class="col-md-4">
                    <ul class="list-group list-group-no-border">
                        @php
                            $total = 0;
                        @endphp

                        @foreach ($cartItem as $item)
                            @php
                                $total += $item->product->price * $item->quantity;
                            @endphp
                        @endforeach

                        <li class="list-group-item" style="margin:0 0 -1px">
                            <div class="row">
                                <div class="col-6">
                                    <h4><strong>Total Amount:</strong></h4>
                                </div>

                                <div class="col-6">
                                    <h4><strong>{{ $total }}</strong></h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <br>
                </div>
            </div>
        </div>
    </section>

</x-shop-layout>
