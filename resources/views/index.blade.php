@extends("base")
@section("content")
<!-- start hero section -->
<section class="wow animate__fadeIn p-0 position-relative parallax sm-background-image-center" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('/assets/images/prohouse/bg/5.png') }}');">
    <div class="container position-relative one-fourth-screen">
        <div class="row h-100 align-items-center">
            <div class="col-xl-12 col-lg-12 col-sm-12 mx-auto">
                <!--<span class="mt-5 text-extra-small alt-font letter-spacing-2 text-uppercase margin-20px-bottom d-inline-block text-deep-pink">We work hard, We provide solutions</span>
                <h2 class="font-weight-600 alt-font margin-40px-bottom md-margin-20px-bottom text-extra-dark-gray letter-spacing-minus-1"></h2>-->
                <div class="social-icon-style-8">
                    <ul class="small-icon">
                        <li><a class="twitter text-extra-dark-gray margin-5px-lr" href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a class="facebook text-extra-dark-gray margin-5px-lr" href="https://facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
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
                    <div class="col-12 text-lg-start sm-no-padding-lr last-paragraph-no-margin margin-60px-bottom md-margin-30px-bottom">
                        <span class="text-medium text-deep-pink alt-font margin-10px-bottom d-inline-block">Know who we are</span>
                        <h5 class="alt-font text-extra-dark-gray font-weight-600">Empowering Your Growth</h5>
                        <p class="w-90 md-w-100 text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">T</span>he PRO House emerged out of the burning need to power business solutions for organizations hungering to thrive in the globalised world. Our guidance, secured by substantial experience and a well-established reputation, ensures the security of your business interests.We propel your business ideas to new heights through our trusted expertise and scalable solutions.</p>
                        <p class="w-90 md-w-100 text-justify">Our acclaimed expertise is spread across Business Incorporation, Banking Solutions, Corporate & Financial Solutions, Loan Syndication and Investment programs. Take the opportunity to navigate the intricacies of regulations, compliance, and paperwork to drive your organization right here. We are here to hand hold you till you attain your designated goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="overflow-hidden wow animate__fadeIn secThird">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 last-paragraph-no-margin">
                <span class="text-medium text-deep-pink alt-font margin-10px-bottom d-inline-block">What we do</span>
                <!--<h5 class="alt-font text-extra-dark-gray font-weight-600">We believe “Service works as good as gold”, each company under The PRO House works towards it.</h5>-->
                <h5 class="alt-font text-extra-dark-gray font-weight-600">Our understanding of diverse cultures and global business practices positions us as a reliable partner for those seeking services beyond their borders.</h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- start accordion -->
                <div class="panel-group accordion-event accordion-style2" id="accordion-main" data-active-icon="fa-angle-up" data-inactive-icon="fa-angle-down">
                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseOne">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 text-deep-pink tab-tag">01</span>
                                    <span class="text-extra-large text-extra-dark-gray alt-font font-weight-600">Business Incorporation</span>
                                    <i class="fa-solid fa-angle-up text-extra-dark-gray"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse show" data-bs-parent="#accordion-main">
                            <div class="panel-body">
                                <p class="text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">T</span>he PRO House is the starting point of your business entity! Through our streamlined process, registering your business happens effortlessly regardless of whether it is a Mainland, Free Zone, or Offshore company. Our tailored solutions steer its development through analyzing, assessing, and implementing the right approach, tailored and personalized to your specifications. A structure that suits the venture type unfolds before the business enthusiasts to set up businesses in UAE, Europe & UK, Asia, Australia and New Zealand.</p>
                                <ul class="p-0 list-style-10">
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Issuing Trade License/ Renewal</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Setup of Foreign Company Franchise</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Business Residence Permit in Europe</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Offshore Company in Global Business Hubs</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Government Approvals for Regulated Businesses</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseTwo">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 text-deep-pink tab-tag">02</span>
                                    <span class="text-extra-large text-extra-dark-gray alt-font font-weight-600">Corporate Banking</span>
                                    <i class="fa-solid fa-angle-up text-extra-dark-gray"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" data-bs-parent="#accordion-main">
                            <div class="panel-body">
                                <p class="text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">W</span>ant to open an account in a foreign bank for individuals or legal entities? We are here to help companies and individuals open multiple corporate bank accounts with multiple currencies. An international bank account enables the ability to manage multiple currencies which is especially useful for those having financial commitments in different countries. Our supervision is your guidebook to steer the perplexity of the banking processes amidst the rigorous rules, AML policies and tax compliance requirements that come your way. Our groundwork and study of different banks and jurisdictions has equipped us with the competence to find the best fit for your specific needs.</p>
                                <ul class="p-0 list-style-10">
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Personal & Corporate Account Opening (Multi-Currency)</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Offshore Investment Opportunities - Foreign Banks</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Annual CDD (Customer Due Diligence) </span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Credit Card & Corporate Business Loan</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseThree">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 text-deep-pink tab-tag">03</span>
                                    <span class="text-extra-large text-extra-dark-gray alt-font font-weight-600">Auditing & Accounting</span>
                                    <i class="fa-solid fa-angle-up text-extra-dark-gray"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" data-bs-parent="#accordion-main">
                            <div class="panel-body">
                                <p class="text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">W</span>ith significant experience in providing fully outsourced and co-sourced accounting services we have deployed high-quality deliverables, on time and within your budget. Our unparalleled customer centric approach is starkly evident in our on-site or off-site services that are customized according to your requirements and expectations. Here we promote transparency, accountability, and efficiency in the books of accounts of our clients to extract the best out of your financial and managerial resources. With a highly qualified team that has varied industry experience we have successfully been able to serve all types of industries.</p>
                                <p>Follow a single set of high-quality, global accounting standards, known as IFRS Standards.</p>
                                <ul class="p-0 list-style-10">
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Internal & Third-Party Audit & Assurance Services</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Accounting, Book-keeping & Financial Reporting </span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Accounting Software Solutions</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>VAT Registration & Implementation</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>Corporate Tax</span></li>
                                    <li><i class="fa-solid fa-arrow-right text-deep-pink" aria-hidden="true"></i><span>In-Country Certificate (ADNOC)</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseFour">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 text-deep-pink tab-tag">04</span>
                                    <span class="text-extra-large text-extra-dark-gray alt-font font-weight-600">Study Abroad & Migration</span>
                                    <i class="fa-solid fa-angle-up text-extra-dark-gray"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" data-bs-parent="#accordion-main">
                            <div class="panel-body">
                                <p class="text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">O</span>ur Higher Education and Recruitment Plan is a comprehensive and globally oriented service that caters to the diverse needs of individuals and organizations seeking top-notch higher education (U.G, P.G, Ph.D programmes), skill development, and talent acquisition. We have positioned ourselves as a provider of innovative solutions in the education sector.</p>
                                <p class="text-justify">We collaborate with reputed educational institutions domestically and worldwide to facilitate access to quality higher education at the level of UG/PG/Ph.D., and Pathways. Whether it's pursuing undergraduate or postgraduate studies, we assist in finding the right academic path that aligns with your goals and aspirations. Our international network ensures that students have access to diverse educational opportunities in prestigious institutions in any field of study. With a well-established network, we seamlessly extend our services to clients in different countries, across the globe.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseFive">
                                <div class="panel-title">
                                    <span class="alt-font font-weight-600 text-deep-pink tab-tag">05</span>
                                    <span class="text-extra-large text-extra-dark-gray alt-font font-weight-600">Real Estate: Mortgage (UK & UAE) & Will Writing</span>
                                    <i class="fa-solid fa-angle-up text-extra-dark-gray"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" data-bs-parent="#accordion-main">
                            <div class="panel-body">
                                <p class="text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">T</span>alk to us and you will find a diligent, professional, diverse and vibrant team, ready to cater to your every need in the property market. We are with you, ever willing, with the services we provide. Our reputation as the leading real estate agency in Dubai didn't happen overnight. We worked hard to ensure that our clients could trust the services we offered by hiring the best people for the job.</p>
                                <p class="text-justify">Our extensive knowledge of the home loan market and property transaction processes makes getting your mortgage hassle free. We help you buy your dream home, ensuring limited documentation exclusive mortgage offers. Our tailor-made mortgage plans have earned their mettle and trust in the residential real estate market. Pre-approval-disbursal, we have it all covered.</p>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- end accordion -->
            </div>
        </div>
    </div>
</section>
@endsection