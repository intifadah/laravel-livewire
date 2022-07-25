<div class="container mx-auto py-16 px-8">
    <div class="mb-4">
        <input type="text" wire:model.debounce.500ms="search" placeholder="Search for Products">
    </div>
    <div class="bg-white">
        <div class="py-6">
            <h2 class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-5 xl:gap-x-8">
                @foreach($products as $product)
                <a href="#" class="group">
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                        <img src="{{$product->image}}"
                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                            class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">{{$product->title}}</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">{{$product->price}}</p>
                </a>
                @endforeach
            </div>

            @if(count($products) === 0)
            <div class="bg-orange-100 border-l-4 border-orange-500 text-orange-700 p-4" role="alert">
                <p class="font-bold">Data not found</p>
                <p>Please check your keyword again.</p>
            </div>
            @endif
        </div>
    </div>
    <div class="container py-5">
        {{$products->links()}}
    </div>

    <p wire:loading.delay.short
        class="absolute text-center left-0 top-0 right-0 bottom-0 z-10 bg-white bg-opacity-90 py-2 px-3">
        Loading...
    </p>
</div>