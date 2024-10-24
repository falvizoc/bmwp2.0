
 @if (session('info'))

    <!-- Info -->
    <div
         x-data="{open:true, timeout: null}"
         x-init=" () => { clearTimeout(timeout); open = true; timeout = setTimeout(() => { open = false }, 3000);  }"
         x-show.transition.out.opacity.duration.1500ms="open"
         x-transition:leave.opacity.duration.1500ms
         class="bg-blue-100 border-b border-blue-400 text-blue-800 text-md p-4 mt-4 flex justify-between message"
         x-show="open"
     >
         <div>
             <div class="flex items-center">
                 <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-4 w-4 mr-2"
                     viewBox="0 0 20 20"
                     fill="currentColor"
                 >
                 <path
                     fill-rule="evenodd"
                     d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                     clip-rule="evenodd"
                 />
                 </svg>
                 <p>
                     <span class="font-bold">Info:</span>
                     {{session('info')}}
                 </p>
             </div>
         </div>
         <div>
             <a class="cursor-pointer" x-on:click="open=false">
                 <svg
                     xmlns="http://www.w3.org/2000/svg"
                     class="h-6 w-6"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke="currentColor"
                 >
                     <path
                     stroke-linecap="round"
                     stroke-linejoin="round"
                     stroke-width="2"
                     d="M6 18L18 6M6 6l12 12"
                     />
                 </svg>
             </a>
         </div>
     </div>
@endif
     
 @if (session('success'))

 <!-- success -->
 <div
      x-data="{open:true, timeout: null}"
      x-init=" () => { clearTimeout(timeout); open = true; timeout = setTimeout(() => { open = false }, 3000);  }"
      x-show.transition.out.opacity.duration.1500ms="open"
      x-transition:leave.opacity.duration.1500ms
      class="bg-green-100 border-b border-green-400 text-green-800 text-md p-4 mt-4 flex justify-between"
      x-show="open"
  >
      <div>
          <div class="flex items-center">
            <i class="fa fa-check mr-2 text-green-800"></i>
              <p>
                  <span class="font-bold">Bien!</span>
                  {{session('success')}}
              </p>
          </div>
      </div>
      <div>
          <a class="cursor-pointer" x-on:click="open=false">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M6 18L18 6M6 6l12 12"
                />
            </svg>
          </a>
      </div>
  </div>
@endif

@if (session('warning'))

 <!-- warning -->
 <div
      x-data="{open:true, timeout: null}"
      x-init=" () => { clearTimeout(timeout); open = true; timeout = setTimeout(() => { open = false }, 3000);  }"
      x-show.transition.out.opacity.duration.1500ms="open"
      x-transition:leave.opacity.duration.1500ms
      class="bg-orange-100 border-b border-orange-400 text-orange-800 text-md p-4 mt-4 flex justify-between"
      x-show="open"
  >
      <div>
          <div class="flex items-center">
            <i class="fas fa-exclamation-triangle text-orange-800 mr-2"></i>
              <p>
                  <span class="font-bold">Atención!</span>
                  {{session('warning')}}
              </p>
          </div>
      </div>
      <div>
          <a class="cursor-pointer" x-on:click="open=false">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
              >
                  <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                  />
              </svg>
          </a>
      </div>
  </div>

@endif

@if (session('danger'))

 <!-- danger -->
 <div
      x-data="{open:true, timeout: null}"
      x-init=" () => { clearTimeout(timeout); open = true; timeout = setTimeout(() => { open = false }, 3000);  }"
      x-show.transition.out.opacity.duration.1500ms="open"
      x-transition:leave.opacity.duration.1500ms
      class="bg-red-100 border-b border-red-400 text-red-800 text-md p-4 mt-4 flex justify-between"
      x-show="open"
  >
      <div>
          <div class="flex items-center">
            <i class="fas fa-exclamation-circle mr-2 text-red-800"></i>
              <p>
                  <span class="font-bold">Error!</span>
                  {{session('danger')}}
              </p>
          </div>
      </div>
      <div>
          <a class="cursor-pointer" x-on:click="open=false">
              <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
              >
                  <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M6 18L18 6M6 6l12 12"
                  />
              </svg>
          </a>
      </div>
  </div>
 @endif
