<div class="car-item card">
    <a href="{{ route("car.show", $car->id) }}">
        <img class="car-item-img rounded-t" src="/img/cars/Lexus-RX200t-2016/1.jpeg" alt="" />
    </a>
    <div class="p-medium">
        <div class="flex items-center justify-between">
            <small class="text-muted m-0">{{ $car->city->name }}</small>
            <button class="btn-heart">
                <svg style="width: 20px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
                </svg>
            </button>
        </div>
        <h2 class="car-item-title">{{ $car->year . " - " . $car->carModel->name }}</h2>
        <p class="car-item-price">{{ $car->price }}</p>
        <hr />
        <p class="m-0">
            <span class="car-item-badge">{{ $car->carType->name }}</span>
            <span class="car-item-badge">{{ $car->fuelType->name }}</span>
        </p>
    </div>
</div>
