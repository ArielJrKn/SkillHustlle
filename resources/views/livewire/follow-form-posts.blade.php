<div>
         @if(Auth::id() === $post->users->id)
            <div class="relative">
                <button class="course-menu-btn p-2 text-white hover:bg-opacity-30 rounded-full hover:bg-white transition-all">
                    <div class="w-5 h-5 flex items-center justify-center">
                        <i class="ri-more-2-fill"></i>
                    </div>
                </button>

                <div class="course-menu postMenu hidden absolute right-0 mt-2 rounded-md shadow-lg backdrop-filter backdrop-blur-lg bg-black bg-opacity-20 z-10 dropdown-menu">
                    <div class="actionMenu py-1">
                        <a href="{{route('social.editPost', $post)}}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:bg-opacity-30">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-edit-line"></i>
                                </div>
                                <span>Modifier</span>
                            </div>
                        </a>
                        
                        <div class="deletedPost cursor-pointer block px-4 py-2 text-sm text-red-400 hover:bg-gray-700 hover:bg-opacity-30">
                            <div class="flex items-center">
                                <div class="w-5 h-5 flex items-center justify-center mr-2">
                                    <i class="ri-delete-bin-line"></i>
                                </div>
                                <span>Supprimer</span>
                            </div>
                        </div>
                    </div>

                    <div class="confirmDeleteModal hidden bg-white bg-opacity-10 p-4 rounded-md">
                        <div class="flex items-center">
                           <div class="flex items-center">

                                <div class="w-10 h-10 confirmDeleteModalBack cursor-pointer rounded-full hover:bg-white-100 bg-opacity-80 flex items-center justify-center text-white-600">
                                <i class="ri-arrow-left-line"></i>
                                </div>

                                <div class="w-10 h-10 rounded-full bg-red-100 bg-opacity-80 flex items-center justify-center text-red-600">
                                <i class="ri-alert-line"></i>
                                </div>
                           </div>

                            <h3 class="text-lg font-semibold ml-3">Suppression</h3>
                        </div>
                        <div class="mt-2">
                            <p class="text-lg text-gray-900 dark:text-gray-100">
                                Confirmer vous la suppression votre post ? <br> Cette action est irréversible
                            </p>
                        </div>

                        <div class="w-full flex justify-end">
                            <form method="POST" action="{{route('social.destroyPost', $post)}}">
                                @csrf
                                @method('DELETE')
                                <button class="mt-3 flex justify-end rounded-button border border-red-300 shadow-sm px-4 py-2 text-base font-medium text-red-700 bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm !rounded-button whitespace-nowrap">Confirmer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @elseif(\App\Models\Follower::where('user_id', Auth::id())->where('target_id', $post->users->id)->exists())
            <button wire:poll.1s wire:click="unfollow({{ $post->users->id }})" class="px-3 py-2 bg-red-600 rounded-full">
                Ne plus suivre
            </button>
        @else
            <button wire:poll.1s wire:click="follow({{ $post->users->id }})" class="px-3 py-2 bg-primary rounded-full">
                Suivre
            </button>
        @endif
</div>
