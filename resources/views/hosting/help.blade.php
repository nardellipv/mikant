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

    <!-- ::::::::::::::::::: Faq area start ::::::::::::::::::: -->
    <section class="knowledgebase_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="section_heading text-left">
                        <h3>Here are some common questions</h3>
                        <p>If you don't find your answer please submit a query.</p>
                    </div>

                    <!-- FAQ Area Start -->
                    <div class="accordions" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                <a role="button" aria-expanded="true" aria-controls="ad_one" data-toggle="collapse" data-parent="#accordion"  href="#ad_one">How can I apply for a job?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                </a>
                            </h5>
                            <div id="ad_one" class="accordion-content collapse in">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="ad_two" data-parent="#accordion" data-toggle="collapse"  href="#ad_two">Where can I find out about events?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                </a>
                            </h5>
                            <div id="ad_two" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                <a role="button" aria-expanded="true" aria-controls="ad_three" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#ad_three">Who can use this offer?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                </a>
                            </h5>
                            <div id="ad_three" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                <a role="button" aria-expanded="true" aria-controls="ad_four" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#ad_four">Are there campus tours for visitors?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                </a>
                            </h5>
                            <div id="ad_four" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                        <!-- single accordian area start -->
                        <div class="panel single-accordion">
                            <h5>
                                <a role="button" aria-expanded="true" aria-controls="ad_five" class="collapsed" data-parent="#accordion" data-toggle="collapse"  href="#ad_five">What is the phone number for the company?
                                    <span class="accor-open"><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-sort-asc" aria-hidden="true"></i></span>
                                </a>
                            </h5>
                            <div id="ad_five" class="accordion-content collapse">
                                <p>Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Support Mail Area Start -->
                <div class="col-xs-12 col-sm-6">
                    <div class="section_heading text-left">
                        <h3>Submit a query now!</h3>
                        <p>We are very supportive. You will get reply within 2 Business Days.</p>
                    </div>

                    <div class="support_form">
                        <form action="#">
                            <div class="row">
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <input type="e-mail" class="form-control" name="name" id="name" placeholder="Your E-mail *" required>
                                    </div>
                                </div>
                                <!-- Single Input Area Start -->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="#">Your Query Subject?</option>
                                            <option value="host">Hosting</option>
                                            <option value="domain">Domain Register</option>
                                            <option value="SSL">SSL Certificate</option>
                                            <option value="Web">Web security</option>
                                            <option value="others">Others</option>
                                        </select>
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
                                    <button type="submit" class="btn btn-default">Submit your Query</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- Support Mail Area End -->
            </div>
        </div>
    </section>
@endsection