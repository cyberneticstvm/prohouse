@extends("base")
@section("content")
<!-- start hero with parallax section -->
<section class="wow animate__fadeIn p-0 parallax sm-background-image-center" data-parallax-background-ratio="0.5" style="background-image:url('{{ asset('/assets/images/prohouse/bg/bg5.webp') }}');">
    <div class="container full-screen position-relative">
        <div class="row m-0 h-100 align-items-center">
            <div class="col-xl-12 text-center text-lg-start bg-white-opacity padding-six-all lg-padding-eight-all">
                <h1 class="alt-font text-extra-dark-gray text-uppercase font-weight-700 letter-spacing-minus-2 title-large">Empowering Your Growth</h1>
                <div class="separator-line-horrizontal-full w-100 margin-35px-tb md-margin-25px-tb sm-margin-20px-tb bg-extra-dark-gray"></div>
                <span class="text-dark-gray text-extra-large font-weight-300 margin-35px-bottom d-block md-margin-25px-bottom sm-margin-15px-bottom">Our understanding of diverse cultures and global business practices positions us as a reliable partner for those seeking services beyond their borders.</span>
                <a href="#why" class="btn btn-dark-gray btn-medium">Know More</a>
            </div>
            <div class="down-section text-center">
                <a href="#why" class="section-link up-down-ani"><i class="ti-mouse icon-small bounce text-deep-pink"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- end hero banner with parallax section -->
<!-- start section -->
<section class="wow animate__fadeIn md-no-padding-bottom sm-padding-50px-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <h2 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">About PRO House</h2>
                <p class="mx-auto mb-0 text-justify">The PRO House emerged out of the burning need to power business solutions for organizations hungering to thrive in the globalised world. Our guidance, secured by substantial experience and a well-established reputation, ensures the security of your business interests.We propel your business ideas to new heights through our trusted expertise and scalable solutions.</p>
                <br />
                <p class="mx-auto mb-0 text-justify">Our acclaimed expertise is spread across Business Incorporation, Banking Solutions, Corporate & Financial Solutions, Loan Syndication and Investment programs. Take the opportunity to navigate the intricacies of regulations, compliance, and paperwork to drive your organization right here. We are here to hand hold you till you attain your designated goals.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 text-center ps-0 lg-padding-15px-left md-no-padding wow animate__fadeIn">
                <img src="{{ asset('/assets/images/prohouse/bg/first.webp') }}" alt="Business Incorporation - PRO House" class="w-100">
            </div>
            <div class="col-xl-3 col-sm-6 text-center ps-0 lg-padding-15px-left md-no-padding wow animate__fadeIn" data-wow-delay="0.2s">
                <img src="{{ asset('/assets/images/prohouse/bg/second.webp') }}" alt="Corporate Banking - PRO House" class="w-100">
            </div>
            <div class="col-xl-6 ps-0 lg-margin-15px-top md-no-margin-top md-no-padding-right wow animate__fadeIn" data-wow-delay="0.4s">
                <div class="d-flex flex-column align-content-center justify-content-center md-padding-ten-all text-center text-lg-start sm-padding-five-lr sm-padding-fifteen-tb w-100 h-100">
                    <h3 class="text-extra-large text-medium-gray font-weight-300 text-justify">We always stay with our clients and respect their business. We deliver 100% and provide instant response.</h3>
                    <p class="text-justify">At The PRO House, we want to invest in tomorrow, by staying ahead of what's next in creativity, and we are equipped with the scale to give our clients an advantage in their larger purpose. We do not confine our services through the limitation of options. For anyone with a business dream anywhere, we remain at your service to perpetually transform to meet your business requirements.</p>
                    <p class="text-justify">We have opted proactive ways and have outdone our competition time and again. We also understand that we're in a business where relationships are the main foundation and we go out of our way to foster them. This is how we've been able to win and keep businesses</p>
                    <a href="{{ route('index') }}" class="text-uppercase alt-font text-extra-small">Our Services <i class="fa-solid fa-arrow-right-long margin-5px-left text-deep-pink text-medium position-relative top-2" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start feature box section  -->
<section id="why" class="wow animate__fadeIn wow animate__fadeIn lg-padding-two-lr sm-no-padding-lr">
    <div class="container">
        <h5 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase text-center">WHAT WE DO</h5>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <!-- start accordion -->
                <div class="panel-group accordion-event accordion-style2" id="accordion-main" data-active-icon="fa-angle-up" data-inactive-icon="fa-angle-down">
                    <!-- start tab content -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-parent="#accordion-main" href="#collapseOne">
                                <div class="panel-title">
                                    <h4 class="text-extra-large text-extra-dark-gray alt-font font-weight-600"><span class="alt-font font-weight-600 text-deep-pink tab-tag">01</span>Business Incorporation</h4>
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
                                    <h4 class="text-extra-large text-extra-dark-gray alt-font font-weight-600"><span class="alt-font font-weight-600 text-deep-pink tab-tag">02</span>Corporate Banking</h4>
                                    <i class="fa-solid fa-angle-down text-extra-dark-gray"></i>
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
                                    <h4 class="text-extra-large text-extra-dark-gray alt-font font-weight-600"><span class="alt-font font-weight-600 text-deep-pink tab-tag">03</span>Auditing & Accounting</h4>
                                    <i class="fa-solid fa-angle-down text-extra-dark-gray"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" data-bs-parent="#accordion-main">
                            <div class="panel-body">
                                <p class="text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">W</span>ith significant experience in providing fully outsourced and co-sourced accounting services we have deployed high-quality deliverables, on time and within your budget. Our unparalleled customer centric approach is starkly evident in our on-site or off-site services that are customized according to your requirements and expectations. Here we promote transparency, accountability, and efficiency in the books of accounts of our clients to extract the best out of your financial and managerial resources. With a highly qualified team that has varied industry experience we have successfully been able to serve all types of industries by following a single set of high-quality, global accounting standards, known as IFRS Standards.</p>
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
                                    <h4 class="text-extra-large text-extra-dark-gray alt-font font-weight-600"><span class="alt-font font-weight-600 text-deep-pink tab-tag">04</span>Study Abroad & Migration</h4>
                                    <i class="fa-solid fa-angle-down text-extra-dark-gray"></i>
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
                                    <h4 class="text-extra-large text-extra-dark-gray alt-font font-weight-600"><span class="alt-font font-weight-600 text-deep-pink tab-tag">05</span>Real Estate: Mortgage (UK & UAE) & Will Writing</h4>
                                    <i class="fa-solid fa-angle-down text-extra-dark-gray"></i>
                                </div>
                            </a>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" data-bs-parent="#accordion-main">
                            <div class="panel-body">
                                <p class="text-justify"><span class="first-letter sm-padding-two-lr text-extra-dark-gray">T</span>alk to us and you will find a diligent, diverse and vibrant team, ready to cater to your every need in the property market. We are with you, ever willing, with the services we provide. We worked hard to ensure that our clients could trust our services thus, gaining us a reputation that didn't happen overnight. Get real-time market knowledge through us to help you make informed investment choices.</p>
                                <p class="text-justify">Our extensive knowledge of the home loan market and property transaction processes makes getting your mortgage hassle free. We help you buy your dream home, ensuring limited documentation exclusive mortgage offers. Our tailor-made mortgage plans have earned their mettle and trust in the residential real estate market. Pre-approval-disbursal, we have it all covered.</p>
                                <p class="text-justify">Unlike other jurisdictions, the UAE does not practice 'right of survivorship' in the law of inheritance. ie. when an expat dies without a will, it may lead to immediate freezing of bank accounts and investments made in the form of shares or other investment options. Therefore, it is necessary to have a registered will at hand to ensure that your property and assets are divided among the deserving beneficiaries. Our Advisory Services offer professional will writing services in UAE and expert legal advice ensuring your wealth is in safe hands.</p>
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
<!-- end feature box section -->
@endsection