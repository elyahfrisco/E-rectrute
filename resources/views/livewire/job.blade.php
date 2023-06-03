<div>
    <div class="px-2 py-5 mb-3 shadow-md hover:shadow-2xl rounded border border-2 border-gray-300">
         
        <div class="flex justify-between">
            <h2 class="text-green-300 text-xl font-bold focus:outline-none ">{{$job->title}}</h2>
          
            <button class="h-5 w-5 text-gray-600" wire:click="addLike">

                <svg xmlns="http://www.w3.org/2000/svg"  fill="{{$job->isLiked() ? 'green' : 'white'}}" viewBox="0 0 24 24" stroke="green" >
                    <path   stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                </svg>

            </button>
           
        </div>
        
        <h3 class="text-md text-gray-800" style="font-family: ui-monospace;font-size: 17px">{{$job->description}}</h4>
        <div class="flex items-center mt-2">
           @auth
           <svg class="w-3 h-3 fill-current text-green-800" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" />
          </svg>
          <a href="{{ route('jobs.show', $job->id) }}" class="ml-1 text-gray-800 font-semibold hover:text-green-800">Consulter la mission</a>
           @endauth

            
           
            </div>
            <div class="flex items-center text-sm text-gray-600 font-semibold mb-2">
              <span class="h-2 w-2 bg-green-300 rounded-full mr-1"></span>
              Ouvert • {{ number_format($job->price, 2, ',', ' ') }} $
            </div>
            <span class="block text-sm">Il y a <span class="text-indigo-400">{{ $job->proposals->count() }}</span> @choice('proposition|propositions', $job->proposals) pour cette mission.</span>
            @auth
            <a href="{{ route('dowload', $job->id) }}" class="ml-1 text-gray-800 font-semibold hover:text-green-800">Attachement</a>
            @endauth
        </div>

        
</div>
