<!-- resources/views/components/latest.blade.php -->
<section class="latest container-fluid" style="background: #ffebbb;">
    <h1 class="text-center">Latest items</h1>

    @if ($items->isEmpty())
        <p class="text-center text-danger mt-5" style="font-weight: bolder">No items yet</p>
    @else
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-5 mt-5">
            @foreach ($items as $item)
                <div class="card my-4" style="width: 25rem; height: 27rem; background: #eeeeee;">
                    <!-- Image Section -->
                    <div class="image d-flex justify-content-center align-items-center" style="height: 30%; position: relative; bottom: 3rem; width:100%;">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" style="object-fit: cover; width:30%;">
                    </div>

                    <!-- Name Section -->
                    <div class="heading" style="height: 10%; width: 100%;">
                        <h3 class="text-center header-card">{{ $item->name }}</h3>
                    </div>

                    <!-- Description Section -->
                    <div class="description" style="height: 30%; width: 100%; padding: 0 1rem;">
                        <p>{{ $item->description }}</p>
                    </div>

                    <!-- Price & Rating Section -->
                    <div class="information d-flex justify-content-center align-items-center gap-2 my-3" style="height: 15%; width: 100%; padding: 0 1rem;">
                        <h3 class="mx-5">${{ $item->price }}</h3>
                        <h3>
                            <span class="badge bg-white text-dark mx-5">N/A
                                <span style="color: coral;">
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </span>
                        </h3>
                    </div>

                    <!-- Button Section -->
                    <div class="button-card d-flex align-items-center justify-content-center" style="height: 15%; width: 100%;">
                        <a href="/item/{{$item->id}}" class="rounded-circle" style="font-size: 1.9rem; padding: 0.5rem 1rem; background: #333; position: relative; top: 2rem;">
                            <i class="fa fa-long-arrow-right" aria-hidden="true" style="color: white; transform: rotate(-40deg);"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</section>
