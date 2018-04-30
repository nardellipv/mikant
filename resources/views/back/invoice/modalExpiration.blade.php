<!-- Modal with invoice -->
<div id="ExpirationModal-{{$invoice->id}}" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-full">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            {!! Form::open(['method' => 'POST','route' => ['expirationsend'],'style'=>'display:inline']) !!}
            {{ csrf_field() }}
            <style type="text/css">

                /* Default CSS */
               a {
                    color: #09c;
                }

                a img {
                    border: none;
                    text-decoration: none;
                }

                table, table td {
                    border-collapse: collapse;
                }

                td, h1, h2, h3, p {
                    font-family: arial, helvetica, sans-serif;
                    color: #313a42;
                }

                h1, h2, h3, h4 {
                    color: #313a42 !important;
                    font-weight: normal;
                    line-height: 1.2;
                }

                h1 {
                    font-size: 24px;
                }

                h2 {
                    font-size: 18px;
                }

                h3 {
                    font-size: 16px;
                }

                p {
                    margin: 0 0 1.6em 0;
                }

                /* Force Outlook to provide a "view in browser" menu link. */
                #outlook a {
                    padding: 0;
                }

                /* Preheader and webversion */
                .preheader {
                    background-color: #f6f6f6;
                }

                .preheaderContent, .webversion, .webversion a {
                    color: #999999;
                    font-size: 10px;
                }

                .preheaderContent {
                    width: 440px;
                }

                .preheaderContent, .webversion {
                    padding: 5px 10px;
                }

                .webversion {
                    width: 200px;
                    text-align: right;
                }

                .webversion a {
                    text-decoration: underline;
                    color: #999999;
                    font-size: 10px;
                }

                /* Logo (branding) */
                .logoContainer {
                    padding: 20px 0 10px 0px;
                    width: 320px;
                }

                .logoContainer a {
                    color: #ffffff;
                }

                /* Whitespace (imageless spacer) */
                .whitespace {
                    font-family: 0px;
                    line-height: 0px;
                }

                /* Button */
                .buttonContainer {
                    padding: 10px 20px 10px 20px;
                }

                .button {
                    padding: 10px 5px 10px 5px;
                    text-align: center;
                    background-color: #ff6b6b;
                    border-radius: 4px;
                }

                .button a {
                    color: #ffffff;
                    text-decoration: none;
                    display: block;
                    text-transform: uppercase;
                }

                /* Featured content */
                .featuredHeader {
                    background: #556270;
                }

                #featuredImage img {
                    display: block;
                    margin: 0 auto;
                }

                .featuredTitle {
                    color: #ffffff;
                    font-size: 26px;
                    padding: 0px 0px 10px 0px;
                    font-weight: bold;
                }

                .featuredContent {
                    color: #ffffff;
                }

                /* One horizontal section of content: e.g. */
                .section {
                    padding: 20px 0px 0px 0px;
                }

                .sectionOdd {
                    background-color: #f1f1f1;
                }

                .sectionEven {
                    background-color: #ffffff;
                }

                .sectionOdd, .sectionEven {
                    padding: 30px 0px 30px 0px;
                }

                /* An article */
                .sectionArticleTitle, .sectionArticleContent {
                    text-align: center;
                }

                .sectionArticleTitle {
                    font-size: 18px;
                    padding: 10px 0px 5px;
                    0px;
                }

                .sectionArticleContent {
                    font-size: 13px;
                    line-height: 18px;
                }

                .sectionArticleImage {
                    text-align: center;
                }

                .sectionArticleImage img {
                    padding: 0px 0px 0px 0px;
                    -ms-interpolation-mode: bicubic;
                }

                .sectionTitle, .sectionSubTitle {
                    text-align: center;
                }

                .sectionTitle {
                    font-size: 26px;
                    padding: 0px 10px 10px 10px
                }

                .sectionSubTitle {
                    padding: 0px 10px 20px 10px;
                }

                /* Footer and social media */
                .footNotes {
                    padding: 0px 20px 0px 20px;
                }

                .footNotes a {
                    color: #556270;
                    font-size: 13px;
                }

                .socialMedia {
                    background: #556270;
                }

                /* CSS for specific screen width(s) */
                @media only screen and (max-width: 480px) {
                    body, table, td, p, a, li, blockquote {
                        -webkit-text-size-adjust: none !important;
                    }

                    body[yahoofix] table {
                        width: 100% !important;
                    }

                    body[yahoofix] .webversion {
                        display: none;
                        font-size: 0;
                        max-height: 0;
                        line-height: 0;
                        mso-hide: all;
                    }

                    body[yahoofix] .logoContainer, body[yahoofix] .featuredTitle, body[yahoofix] .featuredContent {
                        text-align: center;
                    }

                    body[yahoofix] .sectionArticleImage img {
                        height: auto !important;
                        max-width: 100% !important;
                    }

                    body[yahoofix] .preheaderContent {
                        text-align: center;
                    }

                    body[yahoofix] .buttonContainer {
                        padding: 0px 20px 0px 20px;
                    }

                    body[yahoofix] .column {
                        float: left;
                        width: 100%;
                    }

                    body[yahoofix] #featuredImage {
                        text-align: center;
                    }

                    body[yahoofix] .featuredTitle {
                        line-height: 24px;
                        font-weight: normal !important;
                        padding: 0px 10px 25px 10px;
                    }

                    body[yahoofix] .featuredContent {
                        padding: 0px 10px 20px 10px;
                    }

                    body[yahoofix] .sectionArticleTitle {
                        padding: 0px 10px 0px 10px !important;
                    }

                    body[yahoofix] .sectionArticleContent {
                        padding: 0px 10px 30px 10px !important;
                    }
                }
            </style>
            <table border="0" cellpadding="0" cellspacing="0" class="topHeader" summary="" width="100%">
                <tbody>
                <tr>
                    <td>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" summary="" width="640">
                            <tbody>
                            <tr>
                                <td align="center" class="logoContainer">
                                    <a href="http://www.mikant.com" title="MikAnt">
                                        <img alt="logo" class="logo"
                                             src="{{asset('images/imglogoSinfondoPequenia.png')}}">
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <p><span style="display: block;"><span style="display: block;"><!-- End topHeader -->
                        <!-- featuredHeader --></span></span></p>
            <table border="0" cellpadding="0" cellspacing="0" class="featuredHeader" summary="" width="100%">
                <tbody>
                <tr>
                    <td class="section" style="text-align: center;">
                        <h1><span style="color: #ffffff;">Aviso de vencimiento</span></h1>
                    </td>
                </tr>
                </tbody>
            </table>
            <p><span style="display: block;"><span style="display: block;"><span style="color: #ffffff;"><!-- End featuredHeader --></span>
                        <!-- Section --></span></span></p>
            <table border="0" cellpadding="0" cellspacing="0" summary="" width="100%">
                <tbody>
                <tr>
                    <td class="sectionEven" style="width: 710px;">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" summary="" width="640">
                            <tbody>
                            <tr style="height: 33px;">
                                <td class="sectionTitle" style="height: 33px;">
                                    Estimado,<strong>{{ $invoice->client->name }}</strong></td>
                                <input name="name" value="{{ $invoice->client->name }}" hidden>
                                <input name="email" value="{{ $invoice->client->email }}" hidden>
                            </tr>
                            <tr style="height: 106px;">
                                <td class="sectionSubTitle" style="height: 106px;">
                                    <p>Queremos informarle que el d&iacute;a <strong>{{ $invoice->date_end }}</strong>
                                        vencer&aacute; el servicio&nbsp;<strong>{{ $invoice->description }}
                                            &nbsp;</strong></p>
                                    <p>Cualquier duda o inconveniente puede contactarnos a:</p>
                                    <input name="date_end" value="{{ $invoice->date_end }}" hidden>
                                    <input name="description" value="{{ $invoice->description }}" hidden>
                                    <table style="height: 172px; width: 296px; margin-left: auto; margin-right: auto;">
                                        <tbody>
                                        <tr>
                                            <td style="width: 36px; text-align: center;"><img alt="logo" class="logo"
                                                                                              src="{{asset('images/icono/email.png')}}">
                                            </td>
                                            <td style="text-align: center; width: 244px;"><strong><a
                                                            href="mailto:info@mikant.com">info@mikant.com</a></strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 36px; text-align: center;"><img alt="logo" class="logo"
                                                                                              src="{{asset('images/icono/skype.png')}}">
                                            </td>
                                            <td style="width: 244px; text-align: center;"><strong><a
                                                            href="mailto:neri022@hotmail.com">neri022@hotmail.com</a></strong>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="width: 36px; text-align: center;"><img alt="logo" class="logo"
                                                                                              src="{{asset('images/icono/phone.png')}}">
                                            </td>
                                            <td style="text-align: center; width: 244px;"><strong>2615965966</strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <br/>
                                    <p><strong>Muchas gracias por confiar en MikAnt</strong></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
            <p><span style="display: block;"><span style="display: block;"><!-- End Section -->
                        <!-- Social media --></span></span></p>
            <table border="0" cellpadding="0" cellspacing="0" class="socialMedia" summary="" width="100%">
                <tbody>
                <tr>
                    <td class="whitespace" height="20">&nbsp;</td>
                </tr>
                <tr>
                    <td style="text-align: center;">
                        <a href="https://www.facebook.com/mikanthost/" rel="noopener" target="_blank"><img
                                    src="https://ci6.googleusercontent.com/proxy/2pE3THDuYgqJQ9i3X0aXo59kq4SwGSEDorfJLs4HlQk7uODq7vkwpOpvw0PDrkUxfTxcg6iUOKRnXhfFNpCKwwVIZYYFNUftSetXRW81GXEwp3iZ2_QCGOCyDEMB_MyBoXWAZ-S-y-J6RPXWeq6EdGRmioWIGlyVDaD2F7OUCJNFN1rgllHBn-Gm_ggoF_Wl703GzuaDqvYOvYw=s0-d-e1-ft#https://docs.google.com/uc?export=download&amp;id=0B08urs3B_dZvMjNLQWtyalVVZEk&amp;revid=0B08urs3B_dZvZXJrQW1TcjEwNDhXTitLNjQ2azRkODVZUWwwPQ"></a>&nbsp;<a
                                href="https://twitter.com/mikantweb" rel="noopener" target="_blank"><img
                                    src="https://ci3.googleusercontent.com/proxy/5tEl1v7EN4x8AOt0FjXaSHmpWaDQEQEy54j-1kLHoXHwknDtoO5NU5u-caNWk9igS5kZ3hfb3QTM1sIdLzl6R07bv-DrMdYybpjgbhqw1b-SnRmolcNsjNEQydXU6UaX6_9FUgTZs-7YQlaFSKsdLi2LGtxBwJm0bGWzUmjNPPr--zCCp6x2z_olgVN_-lg1RmhGGYyW8drzCuc=s0-d-e1-ft#https://docs.google.com/uc?export=download&amp;id=0B08urs3B_dZvV0FwZl9jTWZiWWM&amp;revid=0B08urs3B_dZvb2tDeDFmd0J2RXZ2ZU9VSGxDdCtZT1Nsdzd3PQ"></a>
                    </td>
                </tr>
                <tr>
                    <td class="whitespace" height="10">&nbsp;</td>
                </tr>
                </tbody>
            </table>
            <div class="text-right">
                <button type="submit"
                        class="btn btn-primary btn-labeled"><b><i class="icon-paperplane"></i></b>
                    Send email
                </button>
            </div>
            {!! Form::Close() !!}
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>