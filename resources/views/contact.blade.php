@extends('layouts.userapp')

@section('content')
    <div>
        <section class="contact_us">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="contact_inner">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="contact_form_inner">
                                        <div class="contact_field">
                                            <h3>Contatc Us</h3>
                                            <p>Feel Free to contact us any time. We will get back to you as soon as we
                                                can!.</p>
                                            <input type="text" class="form-control form-group" placeholder="Name" />
                                            <input type="text" class="form-control form-group" placeholder="Email" />
                                            <textarea class="form-control form-group" placeholder="Message"></textarea>
                                            <button class="contact_form_submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contact_info_sec">
                                <h4>Contact Info</h4>
                                <div class="d-flex info_single align-items-center">
                                    <i class='bx bxs-phone-call'></i>
                                    <span>+855 12345678</span>
                                </div>
                                <div class="d-flex info_single align-items-center">
                                    <i class='bx bx-envelope' ></i>
                                    <span>bbus@gmail.com</span>
                                </div>
                                <div class="d-flex info_single align-items-center">
                                    <i class='bx bx-map' ></i>
                                    <span>#123, St 123, Toul Tompong, Phnom Penh, Cambodia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
