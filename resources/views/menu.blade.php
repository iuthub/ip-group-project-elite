@extends('layouts/main')

@section('content')
    <div class="wrap">
    @include('partials/navbar')
    <section>
        <div class="menubg">
            <div class="container">
                <div class="row">
                    <div class="mainMenu height">
                        <div class="mainMenuTitle">
                            <h1>Menu</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="foodtitle wow fadeInRight">Lunch</h1>
        <div class="mainMenuList">
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.3s"
                >
                    <img src="img/lunch_item1.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.6s"
                >
                    <h4>Lagman</h4>
                    <h5>17$</h5>
                    <p>
                        Tomato Reduction base, Mozzarella, Torn Basil,
                        Olive Oil
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.9s"
                >
                    <img src="img/lunch_item2.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.2s"
                >
                    <h4>Manti</h4>
                    <h5>21$</h5>
                    <p>
                        Escarole, Cannellini Beans, Meatballs,
                        Parmigiano
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.5s"
                >
                    <img src="img/lunch_item3.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.8s"
                >
                    <h4>Narin</h4>
                    <h5>15$</h5>
                    <p>
                        Prosciutto ham, Baby Spinach, Garlic,
                        Gorgonzola, Olives
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="2.1s"
                >
                    <img src="img/bg-11-copyright-155x85.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="2.4s"
                >
                    <h4>Vitello Tonato</h4>
                    <h5>19$</h5>
                    <p>
                        Mushrooms, Ruccola, Pomodoro, Mozzarella,
                        Olives, Olive Oil
                    </p>
                </div>
            </div>
        </div>
        <h1 class="foodtitle wow fadeInRight">Dinner</h1>
        <div class="mainMenuList">
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.3s"
                >
                    <img src="img/bg-11-copyright-155x85.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.6s"
                >
                    <h4>Bruschetta</h4>
                    <h5>17$</h5>
                    <p>
                        Tomato Reduction base, Mozzarella, Torn Basil,
                        Olive Oil
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.9s"
                >
                    <img src="img/bg-12-copyright-155x85.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.2s"
                >
                    <h4>Caprese</h4>
                    <h5>21$</h5>
                    <p>
                        Escarole, Cannellini Beans, Meatballs,
                        Parmigiano
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.5s"
                >
                    <img src="img/bg-16-copyright-155x85.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.8s"
                >
                    <h4>Carpacio</h4>
                    <h5>15$</h5>
                    <p>
                        Prosciutto ham, Baby Spinach, Garlic,
                        Gorgonzola, Olives
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="2.1s"
                >
                    <img src="img/bg-11-copyright-155x85.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="2.4s"
                >
                    <h4>Vitello Tonato</h4>
                    <h5>19$</h5>
                    <p>
                        Mushrooms, Ruccola, Pomodoro, Mozzarella,
                        Olives, Olive Oil
                    </p>
                </div>
            </div>
        </div>
        <h1 class="foodtitle wow fadeInRight">Drinks</h1>
        <div class="mainMenuList">
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.3s"
                >
                    <img src="img/cereza.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.6s"
                >
                    <h4>Cereza</h4>
                    <h5>19$</h5>
                    <p>
                        Rum, ripe oranges, cherries
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.9s"
                >
                    <img src="img/mojito.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.2s"
                >
                    <h4>Homemade Mojito</h4>
                    <h5>21$</h5>
                    <p>
                        White Rum, lime, minnt
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.5s"
                >
                    <img src="img/orangeJuice.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.8s"
                >
                    <h4>Orange Juice</h4>
                    <h5>15$</h5>
                    <p>
                        Freshly Squeezed local oranges
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="2.1s"
                >
                    <img src="img/sangria.jpg" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="2.4s"
                >
                    <h4>Sangria</h4>
                    <h5>19$</h5>
                    <p>
                        Red wine, fruits, brown sugar, spices
                    </p>
                </div>
            </div>
        </div>
        <h1 class="foodtitle wow fadeInRight">Desserts</h1>
        <div class="mainMenuList">
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.3s"
                >
                    <img src="img/cook_dessert.png" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.6s"
                >
                    <h4>Cake</h4>
                    <h5>9$</h5>
                    <p>
                        Choco cake
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="0.9s"
                >
                    <img src="img/cake.png" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.2s"
                >
                    <h4>Cake</h4>
                    <h5>21$</h5>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.5s"
                >
                    <img src="img/cook_dessert.png" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="1.8s"
                >
                    <h4>Cake</h4>
                    <h5>15$</h5>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
            <div class="menuItem">
                <div
                    class="menuborder-wrap wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="2.1s"
                >
                    <img src="img/cake.png" alt="" />
                </div>
                <div
                    class="mainMenuContent wow fadeInDown"
                    data-wow-duration="1s"
                    data-wow-delay="2.4s"
                >
                    <h4>Cake</h4>
                    <h5>19$</h5>
                    <p>
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>
        </div>
    </section>
   @include('partials/footer')
    </div>
@endsection
