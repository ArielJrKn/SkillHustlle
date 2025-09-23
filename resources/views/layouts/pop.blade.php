<style>
    .pop {
    position: absolute;
    bottom: 0;
    right: -60px; /* départ hors écran */
    width: 50px;
    height: 8vh;
    border-radius: 50%;
    transition: all 0.8s ease; /* transition pour lisser l'animation */
}


</style>
            <div class="flex items-center gap-1 pop z-50 backdrop-filter backdrop-blur-sm bg-primary bg-opacity-20 m-2 p-4">
                <i class="ri-checkbox-circle-line"></i>

                <div class="opacity-0 msgContentLaravel font-semibold text-lg">
                    {{session('success')}}
                </div>
            </div>


