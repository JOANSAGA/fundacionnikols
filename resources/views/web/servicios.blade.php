<x-website-layout>
    <section class="container flex flex-col justify-center w-4/5 pt-6 mx-auto text-primary">
        <div class="px-32 flex flex-col gap-4">
            <div>
                <div class="flex justify-center text-xl pb-3">
                    <span class="font-bold">
                        CONVENIOS INTERINSTITUCIONALES
                    </span>
                </div>
                <img src="{{ asset('/img/servicios/banerServicios.png') }}" alt="" srcset="">
                <div class="pt-4 text-lg text-justify">
                    <p>
                        Con la finalidad de fortalecer su accionar y
                        realizar un trabajo con calidad y calidez la
                        fundación ha firmado 8 convenios con
                        universidades e institutos tecnológicos de
                        educación superior, entidades que apoyan y
                        respaldan con su colaboración nuestra labor.
                    </p>
                </div>
            </div>
            <div>
                <div class="flex justify-center text-xl pt-6">
                    <span class="font-bold">
                        SERVICIOS
                    </span>
                </div>
                <div class="pt-4 text-lg text-justify capitalize grid grid-cols-3 gap-4 font-bold">
                    <div class=" flex flex-col justify-center items-center">
                        <img src="{{ asset('/img/servicios/asesoriaLegal.jpg') }}" alt="" srcset="">
                        <a class="hover:underline" href="http://"><span> Asesoría legal </span></a>
                    </div>
                    <div class=" flex flex-col justify-center items-center">
                        <x-application-logo-claro />
                        <a class="hover:underline" href="http://"><span> Entrega de alimentos </span></a>
                    </div>
                    <div class=" flex flex-col justify-center items-center">
                        <x-application-logo-claro />
                        <a class="hover:underline" href="http://"><span> Visitas domiciliarias </span></a>
                    </div>
                    <div class=" flex flex-col justify-center items-center">
                        <x-application-logo-claro />
                        <a class="hover:underline" href="http://"><span> Refuerzo escolar </span></a>
                    </div>
                    <div class=" flex flex-col justify-center items-center">
                        <x-application-logo-claro />
                        <a class="hover:underline" href="http://"><span> Capacitaciones </span></a>
                    </div>
                    <div class=" flex flex-col justify-center items-center">
                        <x-application-logo-claro />
                        <a class="hover:underline" href="http://"><span> Asistencia social </span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-website-layout>
