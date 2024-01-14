<x-app-layout>
    <style>
        .container {
            height: 70vh;
            justify-content: space-between;
        }

        .card1 {
            display: flex;
            flex-direction: column;
            border: 5px solid #9ea5f7;
            width: 20%;
            min-height: 100%;
            border-radius: 10px;
            align-items: center;

        }

        .card2 {
            border: 5px solid #9ea5f7;
            width: 79%;
            border-radius: 10px;
        }


        .caixa-foto {
            margin-top: 10px;
            border: 2px solid #fff;
            padding: 10px;
            width: 170px;
            border-radius: 37px;

        }

        .caixa-foto img {
            border-radius: 37px;
        }

            span {
                font-weight: bold;
            }

    </style>

    <script>
        const myCarousel = new Carousel(document.getElementById("carouselExampleCaptions"), options);

        import { Carousel, initTE } from "tw-elements";
        initTE({ Carousel });
    </script>

    <div class="py-12" style="">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container flex">
                    <div class="card1" style="background-color: #334155">
                        <p class="text-lg text-white">Identificação</p>
                        <div class="caixa-foto">
                            <img src="https://cdn.discordapp.com/attachments/773330920903671869/1195862758160355428/image.png?ex=65b588fb&is=65a313fb&hm=1e6ba5917bc268fb2cd52e0436ab21f34616cc1471407f3e663d791a9c32794d&" alt=" ">
                        </div>
                        <div class="mt-10 text-white">
                            <p><span>RM: </span>12345</p>
                            <p><span>Nome: </span>Aluno Desconhecido</p>
                            <p><span>RA SED: </span>123456789-0/AA</p>
                            <p><span>Habilitação: </span>Administração</p>
                            <p><span>Sit. Matrícula: </span>CONCLUÍDO</p>
                            <p><span>Turma: </span>Turma A</p>
                            <p><span>Semestre OC: </span>TERCEIRO SEM.</p>
                            <p><span>Ano OC: </span>2020</p>
                            <p><span>Módulo/Série: </span>1a SÉRIE</p>
                            <p><span>Grupo: </span>GRUPO A</p>
                        </div>
                    </div>

                    <div class="p-5 text-center text-white card2" style="background-color: #334155">
                        <p class="pb-10 text-4xl">Nossas imagens:</p>

                    </div>

                        @push('styles')
                        <link
                          rel="stylesheet"
                          href="https://unpkg.com/swiper/swiper-bundle.min.css"
                        />
                        @endpush
                        <div class="border swiper mySwiper">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                <img
                                  class="object-cover w-full h-96"
                                  src="https://source.unsplash.com/user/erondu/3000x900"
                                  alt="image"
                                />
                              </div>
                              <div class="swiper-slide">
                                <img
                                  class="object-cover w-full h-96"
                                  src="https://source.unsplash.com/collection/190727/3000x900"
                                  alt="image"
                                />
                              </div>
                              <div class="swiper-slide">
                                <img
                                  class="object-cover w-full h-96"
                                  src="https://source.unsplash.com/collection/190728/3000x900"
                                  alt="image"
                                />
                              </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                          </div>
                          @push('scripts')
                        <!-- Swiper JS -->
                        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                        <script>
                          var swiper = new Swiper(".mySwiper", {
                            cssMode: true,
                            navigation: {
                              nextEl: ".swiper-button-next",
                              prevEl: ".swiper-button-prev",
                            },
                            pagination: {
                              el: ".swiper-pagination",
                            },
                            mousewheel: true,
                            keyboard: true,
                          });
                        </script>
                        @endpush

                        {{-- CAROUSEL END --}}

                        <div class="flex justify-center m-10 space-x-10">
                            <a href="/boletim" class="p-4 bg-blue-500 rounded-xl">Consulte suas notas</a>
                            <a href="/info" class="p-4 bg-blue-500 rounded-xl">Veja seu calendário de aulas</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



</x-app-layout>
