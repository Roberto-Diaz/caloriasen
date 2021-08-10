<x-guest-layout>
    <div class="py-12 container bg-transparent">    
        <div class="grid grid-cols-12 gap-4">                            	                                                    
            <article class="col-span-12 md:col-span-8 lg:col-span-8">    
                {{-- <x-sidebar/>  --}}               
                <div class="grid grid-cols-2 gap-4">              
                    @foreach ($posts as $post)          
                    <div class="bg-gray-100 rounded-md shadow-lg">              
                        <div class="relative cursor-pointer">                           
                            <img class="object-cover h-48 w-full rounded-t-md  hover:opacity-70" src='https://lorempixel.com/500/500/food/{{$post->id}}' alt="">                                   
                            <a href="#" class="bg-gray-300 bg-opacity-50 rounded-full absolute px-2 top-2 left-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                </svg>
                                {{ $post->category->name}}
                            </a>
                        </div>              
                        <div>       
                            <h2 class="font-black text-center hover:text-indigo-900">{{ $post->title }}</h2>                    
                            <p class="text-justify px-2 line-clamp-5">{{ $post->extract}}</p>                            
                        </div>          
                        <div class="flex justify-between border-t-2 border-indigo-100 p-2 hover:bg-gray-200">    
                            <p class="text-gray-500">{{ $post->user->name}}</p>         
                            <a href="#" class="font-black hover:underline">Ver mas</a>
                        </div>                  
                    </div>
                    @endforeach
                  </div>
            </article>                                                        
            <aside class="col-span-12 md:col-span-4 lg:col-span-4">                               
                <div class="h-full bg-gray-200 publicidad  rounded-md" >    
                </div>                      
            </aside>
        </div>                      
    </div>                  
</x-guest-layout>
