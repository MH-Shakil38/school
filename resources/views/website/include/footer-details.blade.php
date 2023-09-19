<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-box">
                    <div class="footer-title">
                        <h4>প্রয়োজনীয় লিংক</h4>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="http://www.shed.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> শিক্ষা মন্ত্রনালয়</a></li>
                            <li><a href="http://www.infokosh.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> জাতীয় ই-তথ্যকোষ</a></li>
                            <li><a href="http://www.nctb.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> জাতীয় শিক্ষাক্রম ও পাঠ্যপুস্তক বোর্ড</a></li>
                            <li><a href="http://www.educationboard.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> শিক্ষা বোর্ড</a></li>
                            <li><a href="http://www.bise-ctg.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> চট্টগ্রাম শিক্ষাবোর্ড</a></li>
                            <li><a href="http://www.dpe.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> প্রাথমিক শিক্ষা অধিদপ্তর</a></li>
                            <li><a href="http://www.dshe.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> মাধ্যমিক ও উচ্চশিক্ষা অধিদপ্তর</a></li>
                            <li><a href="https://bangladesh.gov.bd/index.php" target="_blink"><i class="fa fa-external-link"></i> বাংলাদেশ জাতীয় তথ্য বাতায়ন</a></li>
                            <li><a href="https://www.teachers.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> শিক্ষক বাতায়ন</a></li>
                            <li><a href="http://konnect.edu.bd/" target="_blink"><i class="fa fa-external-link"></i> কিশোর বাতায়ন</a></li>
                            <li><a href="http://dhakaeducationboard.portal.gov.bd/" target="_blink"><i class="fa fa-external-link"></i> ঢাকা শিক্ষা বোর্ড</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-box">
                    <div class="footer-title">
                        <h4>মানচিত্র</h4>
                    </div>
                    <div class="map">
{{--                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7393.56266876395!2d92.04627349204154!3d22.09616631933561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad116deaaaaaab%3A0x1f1da62d0457fcdf!2sIchamoti%20Yakub%20Morium%20High%20School!5e0!3m2!1sbn!2sbd!4v1693637562014!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
                        <iframe src="{{setting()->map ?? ''}}" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="footer-box">
                    <div class="footer-title">
                        <h4>যোগাযোগ</h4>
                    </div>
                    <div class="footer-list">
                        <ul>
                            <li><a href="#">{{setting()->bn_name}},</a></li>
                            <li><a href="#"> {{setting()->full_address}}</a></li>
                            <li><a href="tel:{{setting()->phone}}">Phone: {{setting()->phone}},</a></li>
                            <li><a href="mailto:{{setting()->email}}">Email: {{setting()->email}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="footer-bottom">
                    <p><small>&copy; Copyright 2018, <a href="https://www.facebook.com/maynuddin.shakil" target="_blank">Maynuddin Hasan Shakil</a></small> </p>
                </div>
            </div>
        </div>
    </div>
</footer>


