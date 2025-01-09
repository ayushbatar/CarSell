<x-app-layout title="Home">
    <section class="hero-slider">
        <!-- Carousel wrapper -->
        <div class="hero-slides">
            <!-- Item 1 -->
            <div class="hero-slide">
                <div class="container">
                    <div class="slide-content">
                        <h1 class="hero-slider-title">
                            Buy <strong>The Best Cars</strong> <br />
                            in your region
                        </h1>
                        <div class="hero-slider-content">
                            <p>
                                Use powerful search tool to find your desired cars based on
                                multiple search criteria: Maker, Model, Year, Price Range, Car
                                Type, etc...
                            </p>

                            <button class="btn btn-hero-slider">Find the car</button>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img class="img-responsive" src="/img/car-png-39071.png" alt="" />
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="hero-slide">
                <div class="container flex">
                    <div class="slide-content">
                        <h2 class="hero-slider-title">
                            Do you want to <br />
                            <strong>sell your car?</strong>
                        </h2>
                        <div class="hero-slider-content">
                            <p>
                                Submit your car in our user friendly interface, describe it,
                                upload photos and the perfect buyer will find it...
                            </p>

                            <button class="btn btn-hero-slider">Add Your Car</button>
                        </div>
                    </div>
                    <div class="slide-image">
                        <img class="img-responsive" src="/img/car-png-39071.png" alt="" />
                    </div>
                </div>
            </div>
            <button class="hero-slide-prev" type="button">
                <svg aria-hidden="true" style="width: 18px" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </button>
            <button class="hero-slide-next" type="button">
                <svg aria-hidden="true" style="width: 18px" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </section>
    <!--/ Home Slider -->

    <main>
        <!-- Find a car form -->
        <section class="find-a-car">
            <div class="container">
                <form class="find-a-car-form card p-medium flex" action="/s.html" method="GET">
                    <div class="find-a-car-inputs">
                        <div>
                            <select id="makerSelect" name="maker_id">
                                <option value="">Maker</option>
                                <option value="4">Chevrolet</option>
                                <option value="2">Ford</option>
                                <option value="3">Honda</option>
                                <option value="6">Lexus</option>
                                <option value="5">Nissan</option>
                                <option value="1">Toyota</option>
                            </select>
                        </div>
                        <div>
                            <select id="modelSelect" name="model_id">
                                <option value="" style="display: block">Model</option>
                                <option data-parent="5" value="50" style="display: none">
                                    370Z
                                </option>
                                <option data-parent="1" value="6" style="display: none">
                                    4Runner
                                </option>
                                <option data-parent="3" value="22" style="display: none">
                                    Accord
                                </option>
                                <option data-parent="5" value="41" style="display: none">
                                    Altima
                                </option>
                                <option data-parent="3" value="23" style="display: none">
                                    CR-V
                                </option>
                                <option data-parent="4" value="37" style="display: none">
                                    Camaro
                                </option>
                                <option data-parent="1" value="1" style="display: none">
                                    Camry
                                </option>
                                <option data-parent="3" value="21" style="display: none">
                                    Civic
                                </option>
                                <option data-parent="4" value="36" style="display: none">
                                    Colorado
                                </option>
                                <option data-parent="1" value="2" style="display: none">
                                    Corolla
                                </option>
                                <option data-parent="4" value="35" style="display: none">
                                    Cruze
                                </option>
                                <option data-parent="6" value="54" style="display: none">
                                    ES350
                                </option>
                                <option data-parent="2" value="17" style="display: none">
                                    Edge
                                </option>
                                <option data-parent="4" value="32" style="display: none">
                                    Equinox
                                </option>
                                <option data-parent="2" value="12" style="display: none">
                                    Escape
                                </option>
                                <option data-parent="2" value="18" style="display: none">
                                    Expedition
                                </option>
                                <option data-parent="2" value="13" style="display: none">
                                    Explorer
                                </option>
                                <option data-parent="2" value="11" style="display: none">
                                    F-150
                                </option>
                                <option data-parent="3" value="28" style="display: none">
                                    Fit
                                </option>
                                <option data-parent="2" value="20" style="display: none">
                                    Flex
                                </option>
                                <option data-parent="5" value="47" style="display: none">
                                    Frontier
                                </option>
                                <option data-parent="2" value="15" style="display: none">
                                    Fusion
                                </option>
                                <option data-parent="6" value="58" style="display: none">
                                    GS350
                                </option>
                                <option data-parent="6" value="57" style="display: none">
                                    GX460
                                </option>
                                <option data-parent="3" value="26" style="display: none">
                                    HR-V
                                </option>
                                <option data-parent="1" value="3" style="display: none">
                                    Highlander
                                </option>
                                <option data-parent="6" value="56" style="display: none">
                                    IS300
                                </option>
                                <option data-parent="4" value="34" style="display: none">
                                    Impala
                                </option>
                                <option data-parent="3" value="29" style="display: none">
                                    Insight
                                </option>
                                <option data-parent="6" value="55" style="display: none">
                                    LS500
                                </option>
                                <option data-parent="6" value="60" style="display: none">
                                    LX570
                                </option>
                                <option data-parent="4" value="33" style="display: none">
                                    Malibu
                                </option>
                                <option data-parent="5" value="44" style="display: none">
                                    Maxima
                                </option>
                                <option data-parent="5" value="45" style="display: none">
                                    Murano
                                </option>
                                <option data-parent="2" value="14" style="display: none">
                                    Mustang
                                </option>
                                <option data-parent="6" value="59" style="display: none">
                                    NX300
                                </option>
                                <option data-parent="3" value="25" style="display: none">
                                    Odyssey
                                </option>
                                <option data-parent="3" value="30" style="display: none">
                                    Passport
                                </option>
                                <option data-parent="5" value="46" style="display: none">
                                    Pathfinder
                                </option>
                                <option data-parent="3" value="24" style="display: none">
                                    Pilot
                                </option>
                                <option data-parent="1" value="5" style="display: none">
                                    Prius
                                </option>
                                <option data-parent="1" value="4" style="display: none">
                                    RAV4
                                </option>
                                <option data-parent="6" value="62" style="display: none">
                                    RC350
                                </option>
                                <option data-parent="6" value="53" style="display: none">
                                    RX350
                                </option>
                                <option data-parent="6" value="51" style="display: none">
                                    RX400
                                </option>
                                <option data-parent="6" value="52" style="display: none">
                                    RX450
                                </option>
                                <option data-parent="2" value="16" style="display: none">
                                    Ranger
                                </option>
                                <option data-parent="3" value="27" style="display: none">
                                    Ridgeline
                                </option>
                                <option data-parent="5" value="43" style="display: none">
                                    Rogue
                                </option>
                                <option data-parent="5" value="42" style="display: none">
                                    Sentra
                                </option>
                                <option data-parent="1" value="10" style="display: none">
                                    Sequoia
                                </option>
                                <option data-parent="1" value="7" style="display: none">
                                    Sienna
                                </option>
                                <option data-parent="4" value="31" style="display: none">
                                    Silverado
                                </option>
                                <option data-parent="4" value="40" style="display: none">
                                    Suburban
                                </option>
                                <option data-parent="4" value="39" style="display: none">
                                    Tahoe
                                </option>
                                <option data-parent="2" value="19" style="display: none">
                                    Taurus
                                </option>
                                <option data-parent="5" value="48" style="display: none">
                                    Titan
                                </option>
                                <option data-parent="4" value="38" style="display: none">
                                    Traverse
                                </option>
                                <option data-parent="1" value="9" style="display: none">
                                    Tundra
                                </option>
                                <option data-parent="6" value="61" style="display: none">
                                    UX200
                                </option>
                                <option data-parent="5" value="49" style="display: none">
                                    Versa
                                </option>
                                <option data-parent="1" value="8" style="display: none">
                                    Yaris
                                </option>
                            </select>
                        </div>
                        <div>
                            <select id="stateSelect" name="state_id">
                                <option value="">State/Region</option>
                                <option value="4">California</option>
                                <option value="2">Kansas</option>
                                <option value="1">Ohio</option>
                                <option value="5">Oregon</option>
                            </select>
                        </div>
                        <div>
                            <select id="citySelect" name="city_id">
                                <option value="" style="display: block">City</option>
                                <option data-parent="1" value="3" style="display: none">
                                    Carmelstad
                                </option>
                                <option data-parent="2" value="8" style="display: none">
                                    Cormierville
                                </option>
                                <option data-parent="3" value="14" style="display: none">
                                    Dareville
                                </option>
                                <option data-parent="3" value="13" style="display: none">
                                    Demarcotown
                                </option>
                                <option data-parent="2" value="10" style="display: none">
                                    Doylebury
                                </option>
                                <option data-parent="4" value="18" style="display: none">
                                    East Alfonso
                                </option>
                                <option data-parent="2" value="9" style="display: none">
                                    East Ladarius
                                </option>
                                <option data-parent="5" value="23" style="display: none">
                                    Kelvinmouth
                                </option>
                                <option data-parent="5" value="24" style="display: none">
                                    Kemmerchester
                                </option>
                                <option data-parent="5" value="25" style="display: none">
                                    Kunzeview
                                </option>
                                <option data-parent="2" value="6" style="display: none">
                                    Lake Kelsi
                                </option>
                                <option data-parent="4" value="16" style="display: none">
                                    Larsonview
                                </option>
                                <option data-parent="1" value="2" style="display: none">
                                    Lindstad
                                </option>
                                <option data-parent="1" value="5" style="display: none">
                                    Loganshire
                                </option>
                                <option data-parent="3" value="15" style="display: none">
                                    Maximilliaberg
                                </option>
                                <option data-parent="2" value="7" style="display: none">
                                    Monroeside
                                </option>
                                <option data-parent="4" value="17" style="display: none">
                                    Muellerville
                                </option>
                                <option data-parent="3" value="12" style="display: none">
                                    New Bennieville
                                </option>
                                <option data-parent="1" value="1" style="display: none">
                                    New Britneystad
                                </option>
                                <option data-parent="5" value="21" style="display: none">
                                    New Devenmouth
                                </option>
                                <option data-parent="5" value="22" style="display: none">
                                    North Alvah
                                </option>
                                <option data-parent="4" value="20" style="display: none">
                                    Port Johnson
                                </option>
                                <option data-parent="4" value="19" style="display: none">
                                    South Shanellefort
                                </option>
                                <option data-parent="3" value="11" style="display: none">
                                    Toyport
                                </option>
                                <option data-parent="1" value="4" style="display: none">
                                    West Lulu
                                </option>
                            </select>
                        </div>
                        <div>
                            <select name="car_type_id">
                                <option value="">Type</option>
                                <option value="2">Hatchback</option>
                                <option value="6">Jeep</option>
                                <option value="5">Minivan</option>
                                <option value="4">Pickup Truck</option>
                                <option value="3">SUV</option>
                                <option value="1">Sedan</option>
                            </select>
                        </div>
                        <div>
                            <input name="year_from" type="number" placeholder="Year From" />
                        </div>
                        <div>
                            <input name="year_to" type="number" placeholder="Year To" />
                        </div>
                        <div>
                            <input name="price_from" type="number" placeholder="Price From" />
                        </div>
                        <div>
                            <input name="price_to" type="number" placeholder="Price To" />
                        </div>
                        <div>
                            <select name="fuel_type_id">
                                <option value="">Fuel Type</option>
                                <option value="2">Diesel</option>
                                <option value="3">Electric</option>
                                <option value="1">Gasoline</option>
                                <option value="4">Hybrid</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-find-a-car-reset" type="button">
                            Reset
                        </button>
                        <button class="btn btn-primary btn-find-a-car-submit">
                            Search
                        </button>
                    </div>
                </form>
            </div>
        </section>
        <!--/ Find a car form -->

        <!-- New Cars -->
        <section>
            <div class="container">
                <h2>Latest Added Cars</h2>
                <div class="car-items-listing">
                    @for ($i = 0; $i < 15; $i++)
                        <x-car-item></x-car-item>
                    @endfor
                </div>
            </div>
        </section>
        <!--/ New Cars -->
    </main>
</x-app-layout>
