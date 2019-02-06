@extends('hosting.layouts.web')
@section('content')
    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcumb_section">
                        <!-- Breadcumb page title start -->
                        <div class="page_title">
                            <h3>Ayuda</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ::::::::::::::::::: Breadcumb area End ::::::::::::::::::: -->

    <!-- ::::::::::::::::::: Message Now Area Start ::::::::::::::::::: -->
    <section class="message_now_area section_padding_100_70">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <!-- Message Title -->
                    <div class="message_title">
                        <h3>Send us a message now!</h3>
                    </div>
                </div>
            </div>
            <!-- .end row -->
            <div class="row">
                <div class="col-xs-12">
                    <form action="mail.php" method="post" id="main_contact_form">
                        <!-- Message Input Area Start -->
                        <div class="contact_input_area">
                            <div id="success_fail_info"></div>
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Your Subject *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="number" id="number" placeholder="Your Number *" required>
                                    </div>
                                </div>

                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message *" required></textarea>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- Message Input Area End -->
                    </form>
                </div>
            </div>
            <!-- .end row -->
        </div>
        <!-- .end container -->
    </section>
    <!-- ::::::::::::::::::: Map and Contact Area Start ::::::::::::::::::: -->
    <div class="map_contact_address_area">
        <!-- Map Area Start -->
        <div class="map_area" id="googleMap"></div>
    </div>
    <!-- ::::::::::::::::::: Map and Contact Area End ::::::::::::::::::: -->
@endsection