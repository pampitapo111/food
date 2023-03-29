<div>
    <div>
        <form wire:submit.prevent="render()">
            <div class="w-1/4">

            <div class="relative">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <input wire:model.lazy="search" type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." >
                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 bg-blue-600 bg-blue-700 focus:ring-blue-800">Search</button>
            </div>
            </div>
        </form>
    </div>


<div class="flex flex-row mx-auto justify-center bg-test">



    @foreach($recipes as $i)
<div class='flex items-center justify-center min-h-screen flex-grow  px-2'>
    <div class='w-full max-w-md  mx-auto bg-white rounded-3xl shadow-xl overflow-hidden'>

        <div class='max-w-md mx-auto'>
          <div class='h-[236px]' style='background-image:url(https://img.freepik.com/free-photo/pasta-spaghetti-with-shrimps-sauce_1220-5072.jpg?w=2000&t=st=1678041911~exp=1678042511~hmac=e4aa55e70f8c231d4d23832a611004f86eeb3b6ca067b3fa0c374ac78fe7aba6);background-size:cover;background-position:center'>
           </div>
          <div class='p-4 sm:p-6'>

            <p class='font-bold text-gray-700 text-[22px] leading-7 mb-1'>{{$i->name}}</p>

            <p class='text-[#7C7C80] font-[15px] mt-6'>{{$i->description}}</p>


              <a href='/recipes/{{$i->id}}' class='block mt-10 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80'>
                  View this recipe
              </a>
          </div>
        </div>
    </div>
</div>

@endforeach
</div>
</div>
