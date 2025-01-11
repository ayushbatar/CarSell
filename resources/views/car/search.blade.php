<x-app-layout title="Search">
    <main>
        <!-- Found Cars -->
        <section>
            <div class="container">
                <div class="mb-medium items-center justify-between sm:flex">
                    <div class="flex items-center">
                        <button class="show-filters-button flex items-center">
                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 13.5V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m12-3V3.75m0 9.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 3.75V16.5m-6-9V3.75m0 3.75a1.5 1.5 0 0 1 0 3m0-3a1.5 1.5 0 0 0 0 3m0 9.75V10.5" />
                            </svg>
                            Filters
                        </button>
                        <h2>Define your search criteria</h2>
                    </div>

                    <select class="sort-dropdown">
                        <option value="">Order By</option>
                        <option value="price">Price Asc</option>
                        <option value="-price">Price Desc</option>
                    </select>
                </div>
                <div class="search-car-results-wrapper">
                    <div class="search-cars-sidebar">
                        <div class="card card-found-cars">
                            <p class="m-0">Found <strong>4,568</strong> cars</p>

                            <button class="close-filters-button">
                                <svg style="width: 24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5.47 5.47a.75.75 0 0 1 1.06 0L12 10.94l5.47-5.47a.75.75 0 1 1 1.06 1.06L13.06 12l5.47 5.47a.75.75 0 1 1-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 0 1-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 0 1 0-1.06Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Find a car form -->
                        <section class="find-a-car">
                            <form class="find-a-car-form card p-medium flex" action="/s.html" method="GET">
                                <div class="find-a-car-inputs">
                                    <div class="form-group">
                                        <label class="mb-medium">Maker</label>
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
                                    <div class="form-group">
                                        <label class="mb-medium">Model</label>
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
                                    <div class="form-group">
                                        <label class="mb-medium">Type</label>
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
                                    <div class="form-group">
                                        <label class="mb-medium">Year</label>
                                        <div class="flex gap-1">
                                            <input name="year_from" type="number" placeholder="Year From" />
                                            <input name="year_to" type="number" placeholder="Year To" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-medium">Price</label>
                                        <div class="flex gap-1">
                                            <input name="price_from" type="number" placeholder="Price From" />
                                            <input name="price_to" type="number" placeholder="Price To" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-medium">Mileage</label>
                                        <div class="flex gap-1">
                                            <select name="mileage">
                                                <option value="">Any Mileage</option>
                                                <option value="10000">10,000 or less</option>
                                                <option value="20000">20,000 or less</option>
                                                <option value="30000">30,000 or less</option>
                                                <option value="40000">40,000 or less</option>
                                                <option value="50000">50,000 or less</option>
                                                <option value="60000">60,000 or less</option>
                                                <option value="70000">70,000 or less</option>
                                                <option value="80000">80,000 or less</option>
                                                <option value="90000">90,000 or less</option>
                                                <option value="100000">100,000 or less</option>
                                                <option value="150000">150,000 or less</option>
                                                <option value="200000">200,000 or less</option>
                                                <option value="250000">250,000 or less</option>
                                                <option value="300000">300,000 or less</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-medium">State</label>
                                        <select id="stateSelect" name="state_id">
                                            <option value="">State/Region</option>
                                            <option value="4">California</option>
                                            <option value="2">Kansas</option>
                                            <option value="1">Ohio</option>
                                            <option value="5">Oregon</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-medium">City</label>
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
                                    <div class="form-group">
                                        <label class="mb-medium">Fuel Type</label>
                                        <select name="fuel_type_id">
                                            <option value="">Fuel Type</option>
                                            <option value="2">Diesel</option>
                                            <option value="3">Electric</option>
                                            <option value="1">Gasoline</option>
                                            <option value="4">Hybrid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="flex">
                                    <button class="btn btn-find-a-car-reset" type="button">
                                        Reset
                                    </button>
                                    <button class="btn btn-primary btn-find-a-car-submit">
                                        Search
                                    </button>
                                </div>
                            </form>
                        </section>
                        <!--/ Find a car form -->
                    </div>

                    <div class="search-cars-results">
                        <div class="car-items-listing">
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                            <div class="car-item card">
                                <a href="#">
                                    <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg"
                                        alt="" />
                                </a>
                                <div class="p-medium">
                                    <div class="flex items-center justify-between">
                                        <small class="text-muted m-0">New Jersey</small>
                                        <button class="btn-heart">
                                            <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <h2 class="car-item-title">2016 - Lexus RX200t</h2>
                                    <p class="car-item-price">$25,000</p>
                                    <hr />
                                    <p class="m-0">
                                        <span class="car-item-badge">SUV</span>
                                        <span class="car-item-badge">Electric</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <nav class="pagination my-large">
                            <a class="pagination-item" href="#">
                                <svg style="width: 18px" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                                </svg>
                            </a>
                            <a class="pagination-item" href="#">
                                <svg style="width: 18px" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 19.5 8.25 12l7.5-7.5" />
                                </svg>
                            </a>

                            <a class="pagination-item" href="#"> 1 </a>
                            <a class="pagination-item" href="#"> 2 </a>
                            <span class="pagination-item active"> 3 </span>
                            <a class="pagination-item" href="#"> 4 </a>
                            <a class="pagination-item" href="#">
                                <svg style="width: 18px" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                            <a class="pagination-item" href="#">
                                <svg style="width: 18px" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Found Cars -->
    </main>
</x-app-layout>
