<x-website-layout>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v11.0"
        nonce="8rV5K7NO"></script>
    <!--slider-->
    <section class="container mx-auto w-100 md:w-4/5" data-aos="zoom-in-down" data-aos-duration="1000">
        <div class="glider-contain">
            <div class="glider aspect-w-16 aspect-h-7">
                <div class="flex items-center justify-center bg-center bg-no-repeat bg-cover"
                    style="background-image: url('img/baner1.png')">
                    <span class="text-3xl">hola mundo</span>
                    <a href="http://facebook.com">facebook</a>
                </div>
                <div class="bg-center bg-no-repeat bg-cover" style="background-image: url('img/baner2.png')"></div>
                <div class="flex items-center justify-center bg-center bg-no-repeat bg-cover"
                    style="background-image: url('img/4.jpg')">
                    <span class="text-3xl">hola mundo</span>
                    <a href="http://facebook.com">facebook</a>
                </div>
            </div>
            <button aria-label="Previous" class="text-white border-0 glider-prev focus:outline-none">
                <i class="fas fa-angle-left"></i>
            </button>
            <button aria-label="Next" class="text-white border-0 glider-next focus:outline-none">
                <i class="fas fa-angle-right"></i>
            </button>
            <div role="tablist" class="dots"></div>
        </div>
    </section>
    <!--Eventos, Noticias, Accesos Directos-->
    <section class="container w-full pt-6 mx-auto md:w-4/5" data-aos="fade-up" data-aos-duration="1000">
        <div class="flex flex-wrap justify-between">
            <!--Eventos-->
            <div class="w-full p-3 mx-auto md:w-1/3" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                <div class="w-full py-2 mb-6 text-center rounded-md flecha bg-morado text-morado">
                    <span class="text-lg font-bold capitalize text-black">Eventos</span>
                </div>
                <div class="overflow-hidden bg-white border-2 shadow-md rounded-xl md:max-w-2xl border-primary h-24"
                    data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="md:flex">
                        <div class="bg-center bg-no-repeat bg-cover md:flex-shrink-0 w-1/4"
                            style="background-image: url('img/1.jpg')">
                        </div>
                        <div class="w-3/4 mx-4 mt-2">
                            <a href="#"
                                class="text-lg leading-tight capitalize text-primary hover:underline line-clamp-3 l">
                                titulo Publicaciones Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                                odio illo blanditiis, nam obcaecati tempore! Neque nemo error expedita delectus cum
                                omnis, accusamus ab dignissimos consectetur voluptates deserunt est fuga!
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Noticias-->
            <div class="w-full p-3 mx-auto md:w-1/3" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="600">
                <div class="w-full py-2 mb-6 text-center rounded-md flecha bg-primary text-primary">
                    <span class="text-lg font-bold capitalize text-black">noticias</span>
                </div>

                <div class="overflow-hidden bg-white border-2 shadow-md rounded-xl md:max-w-2xl border-primary"
                    data-aos="zoom-in-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="md:flex">
                        <div class="md:flex-shrink-0">
                            <img class="object-cover w-full h-48 md:w-48" src="\img\1.jpg" alt="">
                        </div>
                        <div class="h-48 px-8 py-4">
                            <a href="#"
                                class="text-lg leading-tight capitalize text-primary hover:underline line-clamp-2">
                                titulo Publicaciones Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt
                                odio illo blanditiis, nam obcaecati tempore! Neque nemo error expedita delectus cum
                                omnis, accusamus ab dignissimos consectetur voluptates deserunt est fuga!
                            </a>
                            <p class="my-2 text-sm text-gray-500 line-clamp-4">According to a study, it has been proven
                                that there is a tight
                                bond between cats and humans.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, molestiae at assumenda,
                                velit possimus, dicta architecto rerum pariatur a praesentium quasi. Doloremque
                                necessitatibus esse voluptatibus. A sit totam natus nihil?
                            </p>
                            <a href="#" class="text-sm leading-tight text-primary">
                                Leer más...
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Accesos Directos-->
            <div class="w-full p-3 mx-auto md:w-1/3" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="900">
                <div class="w-full py-2 mb-6 text-center rounded-md flecha bg-secondary text-secondary">
                    <span class="text-lg font-bold capitalize text-black">accesos
                        directos</span>
                </div>

                <div class="overflow-hidden rounded-xl md:max-w-2xl" data-aos="zoom-in-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="flex flex-grow rounded-xl mb-3 px-4 py-2 items-center bg-primary text-white">
                        <div class="w-10 h-10 flex justify-center">
                            <img src="{{ asset('img/servicios/asesoriaLegal.svg') }}" alt="" srcset="">
                        </div>
                        <span class="ml-4 capitalize">
                            asesoria Legal
                        </span>

                    </div>
                    <div class="flex flex-grow rounded-xl mb-3 px-4 py-2 items-center bg-primary text-white">
                        <div class="w-10 h-10 flex justify-center">
                            <img src="{{ asset('img/servicios/capacitacion.svg') }}" alt="" srcset="">
                        </div>
                        <span class="ml-4 capitalize">
                            capacitaciones
                        </span>

                    </div>
                    <div class="flex flex-grow rounded-xl mb-3 px-4 py-2 items-center bg-primary text-white">
                        <div class="w-10 h-10 flex justify-center">
                            <img src="{{ asset('img/servicios/testimonio.svg') }}" alt="" srcset="">
                        </div>
                        <span class="ml-4 capitalize">
                            testimonios
                        </span>

                    </div>
                    <div class="flex flex-grow rounded-xl mb-3 px-4 py-2 items-center bg-primary text-white">
                        <div class="w-10 h-10 flex justify-center">
                            <img src="{{ asset('img/servicios/donacion.svg') }}" alt="" srcset="">
                        </div>
                        <span class="ml-4 capitalize">
                            donaciones
                        </span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--resumen publicaciones-->
    <section class="container w-full pt-6 mx-auto md:w-4/5" data-aos="fade-up" data-aos-duration="1000">
        <div>
            donaciones
        </div>
    </section>
    <!--recuadros-->
    <section class="container hidden w-4/5 pt-6 mx-auto">
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
    <script src="{{ asset('js/glider.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>
</x-website-layout>
