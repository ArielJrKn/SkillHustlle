<div class="bg-primary bg-opacity-20 rounded-md p-4 flex flex-col text-xs bg-opacity-20 gap-2">
    @auth
        @if(Auth::user()->role === 'apprenant')
            <a href="{{route('students.dashboard')}}" class="p-2 bg-primary bg-opacity-20 hover:bg-opacity-50 rounded-md">
                continuer en tant qu'apprenant
            </a>
        @elseif(Auth::user()->role === 'formateur')
            <a href="{{route('teacher.dashboard')}}" class="p-2 bg-primary bg-opacity-20 hover:bg-opacity-50 rounded-md">
                continuer en tant que formateur
            </a>
        @elseif(Auth::user()->role === 'entreprise')
            <a href="{{route('entreprise.dashboard')}}" class="p-2 bg-primary bg-opacity-20 hover:bg-opacity-50 rounded-md">
                continuer en tant qu'entreprise
            </a>
        @elseif(Auth::user()->role === 'admin')
            <a href="{{route('admin.dashboard')}}" class="p-2 bg-primary bg-opacity-20 hover:bg-opacity-50 rounded-md">
                continuer en tant qu'administrateur
            </a>
        @endif
    @endauth

</div>
<div class="bg-primary bg-opacity-20 rounded-md p-4">
    <h3 class="font-semibold mb-4">People You May Know</h3>
        @include('social.components.followers')
</div>

<div class="bg-primary bg-opacity-20 rounded-md p-4">
    <div class="flex items-center justify-between mb-4">
        <h3 class="font-semibold">Messages</h3>
        <button class="text-primary text-sm hover:underline !rounded-button whitespace-nowrap">See all</button>
    </div>
    <div class="space-y-3">
        <div class="flex items-start space-x-3 cursor-pointer hover:bg-gray-800 p-2 rounded">
            <div class="relative">
                <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20young%20man%20with%20beard%2C%20casual%20attire%2C%20friendly%20expression%2C%20modern%20background&width=32&height=32&seq=chat-1&orientation=squarish" alt="David Kim" class="w-8 h-8 rounded-full object-cover">
                <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 rounded-full border-2 border-black"></div>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium">David Kim</p>
                <p class="text-xs text-primary truncate">Hey, did you check out the new React course?</p>
            </div>
            <span class="text-xs text-primary">2m</span>
        </div>
        <div class="flex items-start space-x-3 cursor-pointer hover:bg-gray-800 p-2 rounded">
            <div class="relative">
                <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20woman%20with%20glasses%2C%20academic%20background%2C%20intellectual%20professional%20portrait&width=32&height=32&seq=chat-2&orientation=squarish" alt="Maria Garcia" class="w-8 h-8 rounded-full object-cover">
                <div class="absolute -bottom-1 -right-1 w-3 h-3 bg-green-500 rounded-full border-2 border-black"></div>
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium">Maria Garcia</p>
                <p class="text-xs text-primary truncate">Thanks for the study group notes!</p>
            </div>
            <span class="text-xs text-primary">15m</span>
        </div>
        <div class="flex items-start space-x-3 cursor-pointer hover:bg-gray-800 p-2 rounded">
            <div class="relative">
                <img src="https://readdy.ai/api/search-image?query=professional%20headshot%20of%20a%20young%20man%20with%20short%20hair%2C%20tech%20company%20background%2C%20developer%20portrait&width=32&height=32&seq=chat-3&orientation=squarish" alt="Ryan Foster" class="w-8 h-8 rounded-full object-cover">
            </div>
            <div class="flex-1 min-w-0">
                <p class="text-sm font-medium">Ryan Foster</p>
                <p class="text-xs text-primary truncate">Let's schedule that code review session</p>
            </div>
            <span class="text-xs text-primary">1h</span>
        </div>
    </div>
</div>

