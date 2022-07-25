<div class="p-6">
    @if ($image)
    <div class="flex-wrap justify-center gap-6">
        <div class="max-w-2xl mx-auto">
            Preview:
            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach($image as $k => $a)
                <a href="#" class="group">
                    <div
                        class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-12 xl:aspect-h-8">
                        <img src="{{$a->temporaryUrl()}}"
                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                            class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    <form wire:submit.prevent="save" class="w-[400px] mx-auto py-16">
        <input type="file" accept="image/png, image/gif, image/jpeg, image/webp" wire:model="image"
            class="mb-4 text-gray-900 bg-gray-50 rounded border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
            multiple>
        <div wire:loading.delay wire:target="image">Uploading...</div>
        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Save Photo</button>
    </form>
    <div class="bg-white">
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach($images as $image)
                <div class="group">
                    <a href="#">
                        <div
                            class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-12 xl:aspect-h-8">
                            <img src="{{$image}}"
                                alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                                class="w-full h-full object-center object-cover group-hover:opacity-75">
                        </div>
                    </a>
                    <h3 class="mt-4 text-sm text-gray-700">
                        <button wire:click="deleteFiles('{{basename($image)}}')" type="button"
                            class="py-2 px-4 bg-rose-500 hover:bg-rose-600 rounded text-white">Delete</button>
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>