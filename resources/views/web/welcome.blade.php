<x-website-layout>
    <section class="container w-4/5 mx-auto">
        <div class="carousel-contain">
            <div class="carousel">
                <div class="glider-track">
                    <div><img src="/img/Recurso 4.png" alt="" class="w-full h-full"></div>
                    <div><img src="/img/1.jpg" alt="" class="w-full h-full"></div>
                    <div><img src="/img/2.jpg" alt="" class="w-full h-full"></div>
                    <div><img src="/img/3.jpg" alt="" class="w-full h-full"></div>
                </div>
            </div>
            <button aria-label="Previous" class="text-white border-0 carousel-prev focus:outline-none">
                <i class="fas fa-angle-left"></i>
            </button>
            <button aria-label="Next" class="text-white border-0 carousel-next focus:outline-none">
                <i class="fas fa-angle-right"></i>
            </button>
            <div role="tablist" class="dots"></div>
        </div>
    </section>
    <section class="container w-4/5 mx-auto">
        <div class="relative">
            <div class="absolute top-0 left-0 circulos-esquina-sup"></div>
            <div class="absolute bottom-0 right-0 circulos-esquina-inf"></div>
            <div class="z-10 grid grid-cols-3 gap-4 p-10 w-100">
                <div
                    class="flex flex-col justify-end gap-4 p-3 border border-primary hover:bg-primary hover:shadow-lg text-primary hover:text-white hover:border-transparent">
                    <div class="">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia dolorum pariatur quam quaerat
                        repellendus omnis dignissimos neque fuga amet, fugiat eveniet iusto illum ex magni, asperiores
                        ut? Ea, harum officiis.
                    </div>
                    <div class="flex justify-center">
                        <a href="#about_us"
                            class="text-xl font-bold select-none text-resaltar hover:text-white">TESTIMONIO</a>
                    </div>
                </div>
                <div class="flex flex-col justify-end gap-4">
                    <div class="bg-secondary">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia dolorum pariatur quam quaerat
                        repellendus omnis dignissimos neque fuga amet, fugiat eveniet iusto illum ex magni, asperiores
                        ut? Ea, harum officiis.
                    </div>
                    <div class="flex justify-center">
                        <a href="#about_us"
                            class="text-xl font-bold select-none text-resaltar hover:text-primary">EVENTOS</a>
                    </div>
                </div>
                <div class="flex flex-col justify-end gap-4">
                    <div class="bg-secondary">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia dolorum pariatur quam quaerat
                        repellendus omnis dignissimos neque fuga amet, fugiat eveniet iusto illum ex magni, asperiores
                        ut? Ea, harum officiis.
                    </div>
                    <div class="flex justify-center">
                        <a href="#about_us"
                            class="text-xl font-bold select-none text-resaltar hover:text-primary">HOMENAJE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container w-4/5 pt-6 mx-auto" id="redes">
        <div class="flex items-center justify-center w-full pb-6">
            <span class="font-bold uppercase text-primary">Nuestras redes sociales</span>
        </div>
        <div class="flex justify-between px-6">
            <div class="mx-auto"><img src="\img\logosRedes\facebook.svg" alt="enlace a nuestro facebook" width="100%">
            </div>
            <div class="mx-auto"><img src="\img\logosRedes\instagram.svg" alt="enlace a nuestro instagram" width="100%">
            </div>
            <div class="mx-auto"><img src="\img\logosRedes\twitter.svg" alt="enlace a nuestro twitter" width="100%">
            </div>
            <div class="mx-auto"><img src="\img\logosRedes\tik_tok.svg" alt="enlace a nuestro tik tok" width="100%">
            </div>
            <div class="mx-auto"><img src="\img\logosRedes\whatsapp.svg" alt="enlace a nuestro whatsapp" width="100%">
            </div>
        </div>
    </section>
</x-website-layout>
