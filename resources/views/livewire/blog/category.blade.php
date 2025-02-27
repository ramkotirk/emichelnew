<div>
    <section class="container flex flex-wrap px-6 mx-auto my-1 -m-4" x-data=" active: '' ">
        <div class="p-2 md:w-40 ">
            <div class="flex items-center p-4 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100 "
            wire:click="$set('searchCategory', '')"
            >
                
                <div>
                  <p class="ml-2 text-xs font-medium ">
                   Tous
                  </p>
                  
                </div>
              </div>
          </div>
        @foreach ($categories as $category)
            <div class="p-2 md:w-40 ">
              <div class="flex items-center justify-center p-4 rounded-lg shadow-xs cursor-pointer hover:text-gray-100 "
              wire:click="$set('searchCategory', '{{$category->name}}')"
              style="background-color:rgba({{ $category->color }}, 0.4) "
              
              >
                  <span class="w-6 h-6">{!! $category->icon !!}</span>
                  <div style="color: rgb({{$category->color}})">
                    <p class="ml-2 text-sm font-medium " >
                     {{ $category->name}}
                    </p>
                    
                  </div>
                </div>
            </div>
        @endforeach
    </section>
</div>
