@extends('layouts/main')
@section('content')
        <div class="wrap">
            
    <div class="wrap">
        @include('partials/navbar')
         @if(Session::has('info'))
                <div class="mb-3">
                    <div class="alert alert-danger">
                        {{ Session::get('info') }}
                    </div>
                </div>
            @endif
            
                    <!-- Carousel -->
                    <div class="hdCarousel">
                        <div class="owl-carousel owl-theme">
                            <!-- Owl -->
                            <div class="hdItem">
                                <img src="img/header_bg2.jpg" alt="" />
                                <div class="hdContent animated fadeIn">
                                    <div class="hdContentImg">
                                        <img src="img/txtbg.png" alt="" />
                                    </div>
                                    <h1>
                                        <span>"Giardino"</span><br />
                                        Classic food with quality ingredients
                                        and excellent service
                                    </h1>
                                </div>
                            </div>
                            <div class="hdItem">
                                <img src="img/header_bg1.jpg" alt="" />
                                <div class="hdContent animated fadeIn">
                                    <div class="hdContentImg">
                                        <img src="img/txtbg.png" alt="" />
                                    </div>
                                    <h1>
                                        <span>"Giardino"</span><br />
                                        Restaurant with great attitude,
                                        delicious dishes
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="wave">
                            <img src="css/bg.svg" alt="" draggable="false" />
                        </div>
                    </div>
            <!-- AboutUs Start -->
            <section class="companyOleo">
                <div class="companyBg">
                    <div class="container">
                        <div class="row">
                            <div class="company">
                                <div class="companyTitle">
                                    <h1>About Us</h1>
                                </div>
                                <div class="companyContent">
                                    <div class="roundedContent animated fadeIn">
                                        <div class="rondedImg">
                                            <img src="img/baraka1.png" alt="" />
                                        </div>
                                        <div class="companyItems">
                                            <div
                                                class="comp-item produce wow jackInTheBox"
                                                data-wow-duration="2s"
                                                data-wow-delay="0.2s"
                                            >
                                                <div class="produceImg">
                                                    <img
                                                        src="img/pro.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="titleContent">
                                                    <h4>Checked</h4>
                                                    <p>
                                                        Lorem ipsum dolor, sit
                                                        amet consectetur
                                                        adipisicing elit. Neque,
                                                        autem.
                                                    </p>
                                                </div>
                                            </div>
                                            <div
                                                class="comp-item offer wow jackInTheBox"
                                                data-wow-duration="2s"
                                                data-wow-delay="0.4s"
                                            >
                                                <div class="offerImg">
                                                    <img
                                                        src="img/offer.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="titleContent">
                                                    <h4>Offers</h4>
                                                    <p>
                                                        Lorem ipsum dolor sit
                                                        amet consectetur
                                                        adipisicing elit.
                                                        Aperiam quidem quaerat
                                                        autem eaque optio
                                                        ratione.
                                                    </p>
                                                </div>
                                            </div>
                                            <div
                                                class="comp-item pride wow jackInTheBox"
                                                data-wow-duration="2s"
                                                data-wow-delay="0.6s"
                                            >
                                                <div class="prideImg">
                                                    <img
                                                        src="img/prideof.png"
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="titleContent">
                                                    <h4>Pride</h4>
                                                    <p>
                                                        Lorem ipsum dolor sit
                                                        amet consectetur
                                                        adipisicing elit. Unde,
                                                        a!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="companyAbout">
                                        <div
                                            class="companyAboutContentLeft wow fadeInDown"
                                            data-wow-duration="2s"
                                            data-wow-delay="0.5s"
                                        >
                                            <p>
                                                <span
                                                    >Restaurant «Giordino»</span
                                                >
                                                Find more reasons to love life
                                                in Uzbekistan visiting To
                                                «Giordino», let the local
                                                sunrises and sunsets, delicious
                                                food and incredibly nice people
                                                enchant you.
                                            </p>
                                            <p>
                                                Great service, good food and the
                                                gorgeous views to the port will
                                                make your visit unforgettable,
                                                while the amiable climate will
                                                only add to the overall
                                                atmosphere.
                                            </p>
                                        </div>
                                        <div
                                            class="companyAboutContentRight wow fadeInDown"
                                            data-wow-duration="2s"
                                            data-wow-delay="1s"
                                        >
                                            <p>
                                                Get to know the local
                                                hospitality, sunshine and a nice
                                                chat with locals, who always
                                                have a lot to tell about their
                                                history, culture and tranquil
                                                lifestyle.
                                            </p>
                                            <p>
                                                During sunset, surrender to the
                                                dramatic views of the caldera,
                                                the deep blue Aegean sea and
                                                treat yourself with a glass of
                                                divine whine from local
                                                vineyards.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- AboutUs End -->

            <!-- Menu Start -->
            <section class="OurProducts">
                <div class="container">
                    <div class="row">
                        <div class="products">
                            <div class="companyTitle productsTitle">
                                <h1>Popular foods</h1>
                            </div>
                            <!-- foreach -->
                            <div class="productsButter">
                                <div
                                    class="col-md-6 col-sm-6 butter wow fadeInLeft"
                                    data-wow-duration="2s"
                                    data-wow-delay="0.5s"
                                >
                                    <div class="border-wrap">
                                        <div class="products-border">
                                            <img
                                                src="img/bg-11-copyright-155x85.jpg"
                                                class="creamy"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="butterContent">
                                        <h4>Bruschetta</h4>
                                        <h5>17$</h5>
                                        <p>
                                            Tomato Reduction base, Mozzarella,
                                            Torn Basil, Olive Oil
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="col-md-6 col-sm-6 margarine wow fadeInRight"
                                    data-wow-duration="2s"
                                    data-wow-delay="1s"
                                >
                                    <div class="border-wrap">
                                        <div class="products-border">
                                            <img
                                                src="img/bg-11-copyright-155x85.jpg"
                                                class="creamy"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="butterContent">
                                        <h4>Bruschetta</h4>
                                        <h5>17$</h5>
                                        <p>
                                            Tomato Reduction base, Mozzarella,
                                            Torn Basil, Olive Oil
                                        </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- endforeach -->
                            <div class="productsButter">
                                <div
                                    class="col-md-6 col-sm-6 butter wow fadeInLeft"
                                    data-wow-duration="2s"
                                    data-wow-delay="0.5s"
                                >
                                    <div class="border-wrap">
                                        <div class="products-border">
                                            <img
                                                src="img/bg-11-copyright-155x85.jpg"
                                                class="creamy"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="butterContent">
                                        <h4>Bruschetta</h4>
                                        <h5>17$</h5>
                                        <p>
                                            Tomato Reduction base, Mozzarella,
                                            Torn Basil, Olive Oil
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="col-md-6 col-sm-6 margarine wow fadeInRight"
                                    data-wow-duration="2s"
                                    data-wow-delay="1s"
                                >
                                    <div class="border-wrap">
                                        <div class="products-border">
                                            <img
                                                src="img/bg-11-copyright-155x85.jpg"
                                                class="creamy"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="butterContent">
                                        <h4>Bruschetta</h4>
                                        <h5>17$</h5>
                                        <p>
                                            Tomato Reduction base, Mozzarella,
                                            Torn Basil, Olive Oil
                                        </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="products-btn">
                                <a class="creative" href="products.html">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Menu</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Menu End -->

            <!-- Static Start -->
            <section>
                <div class="why">
                    <div class="container">
                        <div class="row">
                            <div class="whyTitle">
                                <h1>Daily Specials & Features</h1>
                            </div>
                            <div class="whyContent">
                                <h5>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. In dictum lectus ut ligula
                                    fringilla, eu euismod turpis pulvinar.
                                    Vestibulum eget urna ac dolor consequat
                                    aliquam.
                                </h5>
                            </div>
                            <div class="whyContentimg icon">
                                <div
                                    class="col-md-3 col-sm-6 wow fadeInDown shrimp"
                                    data-wow-duration="1s"
                                    data-wow-delay="0.3s"
                                >
                                    <svg
                                        id="Capa_1"
                                        enable-background="new 0 0 512 512"
                                        viewBox="0 0 512 512"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g>
                                            <path
                                                d="m332 90c-34.861 0-241.811 0-272 0-16.542 0-30-13.458-30-30s13.458-30 30-30h226c8.284 0 15-6.716 15-15s-6.716-15-15-15h-226c-33.084 0-60 26.916-60 60s26.916 60 60 60h30.697c.938 10.223 2.831 20.257 5.64 30h-51.337c-8.284 0-15 6.716-15 15s6.716 15 15 15h63.363c27.267 52.197 83.013 90 148.637 90h62.536c23.415 0 42.464 19.049 42.464 42.464 0 25.781-9.229 32.093-93.263 81.703-9.676 5.712-20.221 11.939-31.717 18.778-10.049-29.588-38.078-50.945-71.02-50.945h-30c-8.284 0-15 6.716-15 15 0 24.508 11.818 46.305 30.052 60-18.234 13.695-30.052 35.492-30.052 60 0 8.284 6.716 15 15 15h30c36.215 0 66.515-25.821 73.488-60.007 1.456.001 2.921.002 4.398.002 77.11 0 168.666-3.299 223.304-57.866 29.734-29.694 44.81-71.457 44.81-124.129 0-99.4-80.926-180-180-180zm-211.15 30h151.15c33.084 0 60 26.916 60 60s-26.916 60-60 60h-15c-70.397 0-128.553-52.594-136.15-120zm216.186 122.149c15.457-16.168 24.964-38.069 24.964-62.149 0-22.947-8.637-43.911-22.825-59.825 61.722 2.922 113.794 43.32 133.917 98.894-14.964 31.11-46.215 50.931-81.092 50.931-4.93 0-9.844-.405-14.675-1.195-9.852-13.009-23.987-22.597-40.289-26.656zm19.596 132.694c9.457 12.368 21.191 22.728 34.468 30.56-33.778 11.615-73.002 15.137-109.794 16.182.893-.527 1.802-1.064 2.682-1.583 33.533-19.797 56.654-33.447 72.644-45.159zm-203.062 17.157h12.43c19.556 0 36.239 12.539 42.43 30h-12.43c-19.556 0-36.239-12.539-42.43-30zm12.43 90h-12.43c6.191-17.461 22.874-30.02 42.43-30.02h12.43c-6.191 17.461-22.874 30.02-42.43 30.02zm279.992-109.098c-5.84 5.833-12.305 10.966-19.267 15.498-19.255-5.626-36.128-17.61-47.859-33.94 9.301-11.785 13.134-24.552 13.134-41.996 0-4.257-.39-8.422-1.098-12.48 35.554.308 68.22-14.758 90.748-40.111.225 3.348.35 6.723.35 10.127 0 45.044-11.778 78.704-36.008 102.902z"
                                            />
                                            <circle cx="226" cy="165" r="15" />
                                        </g>
                                    </svg>

                                    <h5>
                                        Seafood Lovers <br />
                                        Specials
                                    </h5>
                                </div>
                                <div
                                    class="col-md-3 col-sm-6 wow fadeInDown drink"
                                    data-wow-duration="1s"
                                    data-wow-delay="0.6s"
                                >
                                    <svg
                                        id="Capa_1"
                                        enable-background="new 0 0 509.963 509.963"
                                        viewBox="0 0 509.963 509.963"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <g>
                                            <path
                                                d="m339.86 156.861c.409-.353.822-.695 1.228-1.058 23.175-20.672 34.925-51.604 34.925-91.935v-15h-15c-22.542 0-42.144 3.674-58.663 10.958-6.53-16.828-17.773-33.284-33.709-49.22l-10.606-10.606-10.606 10.607c-26.834 26.834-40.423 55.14-40.461 84.219-11.627-5.853-24.739-9.17-38.619-9.17-47.534 0-86.206 38.671-86.206 86.205 0 44.356 33.679 80.983 76.805 85.683l16.592 252.42h229.072l23.209-353.103zm52.119 87.887c-8.445-4.315-17.657-6.594-27.216-6.594-18.63 0-35.964 8.602-48.816 24.231l-.315.383c-7.04 8.562-16.145 13.276-25.637 13.276s-18.597-4.715-25.63-13.267l-.331-.402c-12.845-15.62-30.179-24.222-48.81-24.222-9.5 0-18.658 2.249-27.059 6.511l-3.799-57.804h211.418zm-70.68-111.494c-15.443 13.883-35.368 17.739-48.315 18.661.932-12.903 4.768-32.777 18.482-48.151 12.153-13.625 30.202-21.71 53.777-24.125-2.404 23.472-10.429 41.464-23.944 53.615zm-63.264-89.738c8.949 10.991 15.05 22.018 18.297 33.006-2.54 2.286-4.964 4.705-7.254 7.272-12.69 14.226-19.39 30.55-22.856 45.055-4.701-8.541-8.501-18.804-9.154-30.247-1.041-18.229 6.004-36.708 20.967-55.086zm-145.892 128.345c0-30.992 25.214-56.205 56.206-56.205 25.797 0 47.575 17.475 54.156 41.205h-70.175l4.604 70.038c-25.538-5.29-44.791-27.957-44.791-55.038zm91.489 308.102-13.12-199.606c6.904-7.876 15.629-12.204 24.713-12.204 9.492 0 18.597 4.715 25.63 13.267l.331.402c12.845 15.62 30.179 24.222 48.81 24.222 18.63 0 35.964-8.602 48.802-24.214l.329-.4c7.04-8.562 16.145-13.276 25.637-13.276 9.154 0 17.941 4.396 24.864 12.377l-13.109 199.432z"
                                            />
                                        </g>
                                    </svg>
                                    <h5>
                                        Fresh <br />
                                        Drinks
                                    </h5>
                                </div>
                                <div
                                    class="col-md-3 col-sm-6 wow fadeInDown ani-cake"
                                    data-wow-duration="1s"
                                    data-wow-delay="0.9s"
                                >
                                    <svg
                                        version="1.1"
                                        id="Capa_1"
                                        x="0px"
                                        y="0px"
                                        viewBox="0 0 382.498 382.498"
                                        style="
                                            enable-background: new 0 0 382.498
                                                382.498;
                                        "
                                        xml:space="preserve"
                                    >
                                        <g>
                                            <g>
                                                <path
                                                    d="M372.65,229.378c0.023-0.346,0.023-0.694,0-1.04c-0.2-0.448-0.441-0.876-0.72-1.28l-0.72-0.96l-142.32-136
					 c-1.161-1.133-2.64-1.887-4.24-2.16c-12.195-1.702-24.487-2.611-36.8-2.72c-4.696-3.652-10.171-6.171-16-7.36
					 c-1.36-14.72,0.24-48,27.68-62.72c3.888-2.209,5.249-7.152,3.04-11.04c-2.209-3.888-7.152-5.249-11.04-3.04
					 c-35.6,19.28-37.92,59.44-37.12,76.72c-7.137,1.599-13.68,5.176-18.88,10.32c-58.48,8.8-101.68,34.88-125.12,75.68v0.4v0.48
					 c-0.4,0.937-0.617,1.942-0.64,2.96v142.88c-0.064,3.912,2.711,7.296,6.56,8l346.96,64h1.44c4.418,0,8-3.582,8-8v-143.36
					 c0,0,0,0,0-0.56C372.733,230.177,372.706,229.776,372.65,229.378z M163.69,92.498c12.725-0.044,23.076,10.235,23.12,22.96
					 c0.044,12.725-10.235,23.076-22.96,23.12c-12.725,0.044-23.076-10.235-23.12-22.96c0-0.027,0-0.053,0-0.08
					 C140.73,102.845,150.996,92.542,163.69,92.498z M126.01,105.938L126.01,105.938c-0.823,3.107-1.253,6.306-1.28,9.52
					 c-0.632,21.552,16.326,39.536,37.878,40.168c21.552,0.632,39.536-16.326,40.168-37.878c0.169-5.761-0.94-11.488-3.246-16.77
					 c9.04,0.48,16,1.28,19.2,1.68l121.44,116.08l-308.64-56.96C51.29,133.298,83.13,114.658,126.01,105.938z M26.01,303.778v-38.4
					 l330.96,59.6l0.08,39.92L26.01,303.778z M26.01,249.138v-24l330.96,59.6l0.08,24.16L26.01,249.138z M26.01,209.058v-32
					 l245.52,45.36l85.36,16l0.16,30.48L26.01,209.058z"
                                                />
                                            </g>
                                        </g>
                                    </svg>
                                    <h5>
                                        Cake <br />
                                        Slices
                                    </h5>
                                </div>
                                <div
                                    class="col-md-3 col-sm-6 wow fadeInDown ani-burger"
                                    data-wow-duration="1s"
                                    data-wow-delay="1.2s"
                                >
                                    <svg
                                        viewBox="1 -16 511.999 511"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="m486.339844 338.753906v-18.890625c0-1.132812-.082032-2.261719-.199219-3.378906 1.863281-1.117187 3.59375-2.351563 5.164063-3.710937 6.957031-6.015626 10.628906-13.957032 10.621093-22.964844-.003906-7.707032-2.839843-15.054688-7.742187-20.730469 3.847656-4.570313 6.035156-10.390625 5.921875-16.453125-.199219-10.769531-7.296875-19.949219-16.992188-23.332031 2.011719-4.195313 3.136719-8.890625 3.136719-13.84375v-5.503907c14.367188-1 25.75-13 25.75-27.613281 0-2.113281-.445312-52.308593-39.167969-99.96875-19.679687-24.222656-45.730469-43.40625-77.4375-57.019531-38.351562-16.464844-85.25-24.824219-139.398437-24.84375-68.199219.023438-124.515625 13.210938-167.386719 39.1875-3.550781 2.152344-4.683594 6.769531-2.535156 10.316406 2.152343 3.546875 6.769531 4.683594 10.316406 2.53125 40.496094-24.535156 94.195313-36.988281 159.605469-37.011718 52.097656.019531 97 7.964843 133.472656 23.625 29.449219 12.644531 53.574219 30.371093 71.703125 52.6875 35.398437 43.566406 35.804687 88.601562 35.804687 90.496093 0 6.984375-5.679687 12.664063-12.664062 12.664063h-456.625c-6.984375 0-12.664062-5.679688-12.664062-12.664063 0-1.886719.246093-19.125 8.835937-42.816406 9.394531-25.921875 24.679687-48.464844 45.421875-67 3.09375-2.765625 3.363281-7.515625.597656-10.605469-2.765625-3.09375-7.511718-3.359375-10.605468-.597656-58.597657 52.367188-59.273438 118.242188-59.273438 121.019531 0 14.613281 11.382812 26.613281 25.746094 27.613281v5.503907c0 4.996093 1.148437 9.730469 3.191406 13.953125-3.675781 1.3125-7.0625 3.445312-9.835938 6.269531-4.773437 4.863281-7.332031 11.226563-7.207031 17.910156.105469 5.792969 2.179688 11.210938 5.71875 15.507813-4.898437 5.675781-7.730469 13.023437-7.734375 20.71875-.007812 9.007812 3.664063 16.949218 10.621094 22.964844 1.667969 1.441406 3.519531 2.742187 5.511719 3.910156-.105469 1.054687-.175781 2.113281-.175781 3.179687v18.875c-14.40625.960938-25.835938 12.976563-25.835938 27.621094 0 61.980469 50.425781 112.402344 112.402344 112.402344h287.195312c61.976563 0 112.402344-50.421875 112.402344-112.402344 0-14.582031-11.335938-26.5625-25.660156-27.605469zm-4.859375-37.34375c-6.90625 5.972656-19.566407 8.457032-33.046875 6.484375-9.542969-1.398437-14.566406-4.054687-19.882813-6.871093-1.222656-.644532-2.457031-1.300782-3.746093-1.9375l17.0625-17.367188c2.128906-2.167969 5.09375-3.410156 8.136718-3.410156h24.4375c2.335938 0 4.632813-.316406 6.867188-.945313 3.507812 3.117188 5.59375 7.65625 5.597656 12.457031 0 4.574219-1.824219 8.476563-5.425781 11.589844zm-440.710938-91.386718h430.460938v5.425781c0 5.832031-2.933594 10.988281-7.398438 14.082031-.125.089844-.253906.171875-.382812.253906-.320313.210938-.648438.410156-.980469.597656-.117188.066407-.230469.132813-.34375.195313-.425781.226563-.859375.4375-1.304688.628906-.027343.011719-.050781.023438-.074218.035157-.496094.207031-1.003906.394531-1.523438.554687-.058594.019531-.117187.035156-.175781.050781-.433594.132813-.875.246094-1.324219.339844-.140625.03125-.277344.058594-.417968.085938-.386719.070312-.777344.132812-1.171876.179687-.148437.015625-.292968.035156-.441406.050781-.527344.050782-1.058594.082032-1.597656.082032h-396.191406c-9.445313 0-17.132813-7.6875-17.132813-17.132813zm-10.945312 36.171874c2.042969-2.078124 4.859375-3.273437 7.734375-3.273437h3.648437c4.871094 2.96875 10.585938 4.683594 16.699219 4.683594h396.1875c.667969 0 1.328125-.027344 1.984375-.066407.210937-.011718.417969-.03125.625-.046874.460937-.039063.921875-.085938 1.378906-.144532.222657-.027344.449219-.050781.671875-.082031.585938-.085937 1.167969-.183594 1.742188-.300781.242187-.050782.480468-.109375.722656-.164063.394531-.089843.789062-.183593 1.179688-.289062.296874-.078125.59375-.164063.886718-.25.316406-.09375.628906-.199219.941406-.300781.300782-.097657.597657-.195313.894532-.300782.511718-.191406 1.019531-.390625 1.519531-.601562.300781-.128906.597656-.269532.894531-.40625.28125-.128906.558594-.261719.832032-.398438.292968-.148437.585937-.292968.875-.449218.328124-.175782.652343-.363282.976562-.550782.195312-.113281.394531-.214844.589844-.332031h4.097656c5.511719 0 10.078125 4.480469 10.179688 9.984375.074218 3.835938-2.269532 7.480469-5.964844 9.277344h-.003906c-1.503907.730468-3.078126 1.105468-4.675782 1.105468h-24.441406c-7.042969 0-13.914062 2.878907-18.851562 7.90625l-30.449219 30.992188c-7.257813 7.390625-18.765625 8.390625-27.167969 2.707031-.183594-.125-.363281-.25-.542969-.378906-.46875-.335937-.933593-.6875-1.382812-1.070313 0-.003906-.003907-.007812-.007813-.007812l-39.4375-33.792969c-4.785156-4.097656-10.890625-6.355469-17.191406-6.355469h-277.875c-1.546875 0-3.046875-.355468-4.464844-1.050781h-.003906c-3.453125-1.695312-5.640625-5.121093-5.710938-8.9375-.050781-2.617187.984376-5.140625 2.910157-7.105469zm-4.921875 43.621094c0-4.769531 2.066406-9.285156 5.542968-12.402344 2.15625.59375 4.378907.894532 6.648438.894532h277.875c2.722656 0 5.355469.976562 7.421875 2.742187l31.1875 26.726563c-.625.023437-1.277344.035156-1.953125.035156-9.886719 0-14.382812-2.691406-20.070312-6.097656-6.445313-3.859375-13.75-8.234375-27.792969-8.234375-14.039063 0-21.34375 4.375-27.789063 8.234375-5.6875 3.40625-10.179687 6.097656-20.070312 6.097656s-14.382813-2.691406-20.070313-6.097656c-6.445312-3.859375-13.75-8.234375-27.789062-8.234375-14.042969 0-21.347657 4.375-27.792969 8.234375-5.6875 3.40625-10.179688 6.097656-20.070312 6.097656-9.890626 0-14.382813-2.691406-20.070313-6.097656-6.445313-3.859375-13.75-8.234375-27.792969-8.234375-14.835937 0-22.074218 3.835937-29.074218 7.542969-5.3125 2.8125-10.332032 5.472656-19.875 6.867187-13.480469 1.972656-26.140626-.511719-33.042969-6.480469-3.601563-3.113281-5.425781-7.015625-5.421875-11.59375zm374.695312 173.925782h-287.195312c-53.695313 0-97.378906-43.6875-97.378906-97.382813 0-6.984375 5.679687-12.664063 12.664062-12.664063h336.730469c4.148437 0 7.511719-3.363281 7.511719-7.511718 0-4.148438-3.363282-7.511719-7.511719-7.511719h-323.558594v-16.449219c4.269531.890625 8.816406 1.359375 13.539063 1.359375 3.632812 0 7.367187-.273437 11.148437-.824219 12.105469-1.773437 18.8125-5.324218 24.730469-8.457031 6.113281-3.238281 10.941406-5.796875 22.042968-5.796875 9.886719 0 14.382813 2.691406 20.070313 6.097656 6.445313 3.859376 13.75 8.234376 27.792969 8.234376 14.039062 0 21.34375-4.375 27.789062-8.234376 5.6875-3.40625 10.179688-6.097656 20.070313-6.097656s14.382812 2.691406 20.070312 6.097656c6.445313 3.859376 13.75 8.234376 27.792969 8.234376 14.039062 0 21.34375-4.375 27.789062-8.234376 5.6875-3.40625 10.179688-6.097656 20.070313-6.097656s14.382813 2.691406 20.070313 6.097656c6.445312 3.859376 13.75 8.234376 27.789062 8.234376 6.6875 0 12.296875-.96875 17.6875-3.054688 5.082031 2.515625 10.617188 3.773438 16.152344 3.773438 9.457031 0 18.890625-3.648438 25.957031-10.839844l2.101563-2.136719c2.824218.996094 5.289062 2.289063 8.007812 3.726563 5.917969 3.132812 12.625 6.679687 24.730469 8.453124 3.78125.554688 7.515625.824219 11.148437.824219 4.859375 0 9.53125-.496093 13.910156-1.4375v16.527344h-71.949218c-4.148438 0-7.511719 3.363281-7.511719 7.511719 0 4.148437 3.363281 7.511718 7.511719 7.511718h84.941406c6.984375 0 12.667969 5.679688 12.667969 12.664063-.003907 53.695313-43.6875 97.382813-97.382813 97.382813zm0 0"
                                        />
                                    </svg>

                                    <h5>
                                        Burger <br />
                                        Sandwich
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Static End -->

            <section class="recipes">
                <div class="clientsRecalls">
                    <div class="container">
                        <div class="row">
                            <div class="recalls">
                                <div class="recallsTitle">
                                    <h1>Recalls</h1>
                                </div>
                                <div class="recallSlider">
                                    <div class="recalls1 col-md-6 col-sm-6">
                                        <div class="recallText">
                                            <div class="recallQuotes">
                                                <img
                                                    src="img/quotes.png"
                                                    alt=""
                                                />
                                            </div>
                                            <h4>
                                                Lorem ipsum dolor sit amet
                                                consectetur adipisicing elit.
                                                Omnis, quae, laudantium
                                                aspernatur ab possimus, ipsa
                                                labore ducimus amet quidem earum
                                                illum quas eos? Incidunt, illum
                                                aspernatur! Similique repellat
                                                animi optio, sequi cupiditate
                                                laboriosam eveniet explicabo.
                                            </h4>
                                        </div>
                                        <div class="recallPerson">
                                            <h3>John Doe</h3>
                                            <h4>Chef</h4>
                                        </div>
                                    </div>
                                    <div class="recalls1 col-md-6 col-sm-6">
                                        <div class="recallText">
                                            <div class="recallQuotes">
                                                <img
                                                    src="img/quotes.png"
                                                    alt=""
                                                />
                                            </div>
                                            <h4>
                                                Splendid spot to spend an
                                                evening while in Fira. Really
                                                impressed with the appetizing
                                                menu and the wide variety of
                                                wines and wonderful staff.
                                                Special thanks to Aineas!
                                            </h4>
                                        </div>
                                        <div class="recallPerson">
                                            <h3>John Doe</h3>
                                            <h4>Chef</h4>
                                        </div>
                                    </div>
                                    <div class="recalls1 col-md-6 col-sm-6">
                                        <div class="recallText">
                                            <div class="recallQuotes">
                                                <img
                                                    src="img/quotes.png"
                                                    alt=""
                                                />
                                            </div>
                                            <h4>
                                                The best cocktails during the
                                                summer, that's for sure. A
                                                well-thought and classy bar
                                                along with stunning views. Higly
                                                recommended for a romantic
                                                dinner
                                            </h4>
                                        </div>
                                        <div class="recallPerson">
                                            <h3>John Doe</h3>
                                            <h4>Client</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
<<<<<<< HEAD:resources/views/frontend/index.html

        <!-- Scripts -->
        <!-- jquery -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!-- owl-carousel -->
        <script>
            $(document).ready(function () {
                var owl = $(".owl-carousel").owlCarousel({
                    loop: true,
                    items: 1,
                    nav: true,
                    dots: true,
                    navText: [
                        "<i class='fa fa-chevron-left' aria-hidden='true'></i>",
                        "<i class='fa fa-chevron-right' aria-hidden='true'></i>",
                    ],
                    autoplay: 2000,
                    animateOut: "fadeOutLeft",
                    animateIn: "fadeInRight",
                    responsive: {
                        500: {
                            mouseDrag: false,
                            touchDrag: true,
                        },
                        1200: {
                            mouseDrag: true,
                            touchDrag: false,
                        },
                    },
                });
            });
        </script>
        <!-- slick -->
        <script src="js/slick.min.js"></script>
        <script>
            $(document).ready(function () {
                $(".recallSlider").slick({
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    responsive: [
                        {
                            breakpoint: 991,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: false,
                            },
                        },
                    ],
                });
            });
        </script>
        <script>
            $(function () {
                var menuToggler = $(".menu-icon"),
                    menu = $(".sidebar"),
                    menubg = $(".menuCanvas"),
                    exit = $("#exitmnu");

                menuToggler.click(function (e) {
                    e.preventDefault();
                    e.stopPropagation();

                    $(this).toggleClass("active");
                    menu.toggleClass("active");
                    menubg.toggleClass("active");
                    exit.toggleClass("active");
                });

                menu.click(function (e) {
                    e.stopPropagation();
                });

                $(document).click(function (e) {
                    if (!menu.has(e.target).length) {
                        menu.removeClass("active");
                        menuToggler.removeClass("active");
                        menubg.removeClass("active");
                        exit.removeClass("active");
                    }
                });
            });
        </script>
        <script src="js/slick-animate.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
=======
        
    
        @include('partials/footer')
    </div>
@endsection
>>>>>>> 31d1f390a5ddbdbe8ee18650123a2f1bdf468404:resources/views/index.blade.php
