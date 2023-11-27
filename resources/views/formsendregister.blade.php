@extends('layouts.master')
@section('formSendRegister')
@section('title', 'Send Contact')
<div class="light-wrapper">
    <div class="container inner">
        <div class="thin">
            <h2 class="post-title">Get in Touch</h2>
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Fusce dapibus, tellus ac cursus commodo, tortor
                mauris condimentum nibh, ut fermentum massa justo sit amet risus. Integer posuere erat a ante venenatis
                dapibus posuere velit aliquet. Maecenas faucibus.</p>
            <div class="divide10"></div>
            <div class="form-container">
                <form action="{{ route('formsendregister.store.index') }}" method="post" class="form"
                    novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="text" name="name" placeholder="Your name" required="required">
                                    <i class="icon-user"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="email" name="email" placeholder="Your e-mail" required="required">
                                    <i class="icon-mail-alt"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="tel" name="phone" placeholder="Phone">
                                    <i class="icon-phone"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label class="custom-select">
                                    <select name="department" required="required">
                                        <option value="">Select Department</option>
                                        <option value="Sales">Sales</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Support">Customer Support</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <i class="icon-ok"></i><span><!-- fake select handler --></span> </label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <textarea name="message" placeholder="Type your message here..."></textarea>
                    <!--/.radio-set -->
                    <input type="submit" class="btn" value="Send" data-error="Fix errors"
                        data-processing="Sending..." data-success="Thank you!">
                    <footer class="notification-box"></footer>
                </form>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <!--/.vanilla-form -->
            </div>
            <!--/.form-container -->
        </div>
    </div>
    <!-- /.container -->
</div>

<!-- /.light-wrapper -->
@endsection
