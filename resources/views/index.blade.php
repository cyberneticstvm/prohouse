@extends("base")
@section("content")
<!-- start hero section -->
<section class="wow animate__fadeIn p-0 position-relative parallax sm-background-image-center" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('/assets/images/prohouse/bg/1.webp') }}');">
    <div class="container position-relative one-fourth-screen">
        <div class="row h-100 align-items-center">
            <div class="col-xl-12 col-lg-12 col-sm-12 mx-auto">
                <span class="mt-5 text-extra-small alt-font letter-spacing-2 text-uppercase margin-20px-bottom d-inline-block text-deep-pink">We work hard, We provide solutions</span>
                <h2 class="font-weight-600 alt-font margin-40px-bottom md-margin-20px-bottom text-extra-dark-gray letter-spacing-minus-1">Our understanding of diverse cultures and global business practices positions us as a reliable partner for those seeking services beyond their borders.</h2>
                <div class="social-icon-style-8">
                    <ul class="small-icon">
                        <li><a class="twitter text-extra-dark-gray margin-5px-lr" href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="dribbble text-extra-dark-gray margin-5px-lr" href="https://instagram.com/" target="_blank"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="down-section text-center">
            <a href="#about" class="inner-link"><i class="ti-arrow-down icon-small text-deep-pink"></i></a>
        </div>
    </div>
</section>
<!-- end hero section -->
<section class="wow animate__fadeIn overflow-hidden cover-background md-no-background-img bg-medium-light-gray" style="background-image: url('{{ asset('/assets/images/prohouse/bg/2.webp') }}')" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-6 wow animate__fadeIn">
                <div class="row m-0">
                    <div class="col-12 text-center text-lg-start sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom">
                        <span class="text-medium text-deep-pink alt-font margin-10px-bottom d-inline-block">Know who we are</span>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600">Empowering Your Growth</h5>
                        <p class="w-90 md-w-100 text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">T</span>he inception of The PRO House emerged to power business solutions for organizations to thrive. Our guidance, secured by substantial experience and a well-established reputation, ensures the security of your business interests. We propel your business ideas to new heights through our trusted expertise and scalable solutions.</p>
                        <p class="w-90 md-w-100 text-justify">Our acclaimed expertise is spread across Business Incorporation, Banking Solutions, Corporate & Financial Solutions, and Investment programs. Take the opportunity right here to navigate the intricacies of regulations, compliance, and paperwork to drive your organization right here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="overflow-hidden wow animate__fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 margin-eight-bottom last-paragraph-no-margin">
                <span class="text-medium text-deep-pink alt-font margin-10px-bottom d-inline-block">What we do</span>
                <h5 class="alt-font text-extra-dark-gray font-weight-600">Beautiful and easy to use UI, professional animations and drag & drop feature</h5>
            </div>
        </div>
        <div class="row">
            <!-- start column -->
            <div class="col-12">
                <div class="bg-light-gray padding-40px-all sm-padding-30px-all last-paragraph-no-margin">
                    <p class="text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">L</span>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
            <!-- end column -->
        </div>
    </div>
</section>
@endsection