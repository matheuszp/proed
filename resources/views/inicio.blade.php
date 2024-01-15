<x-app-layout>
    <style>
        .container {
            height: 70vh;
            justify-content: space-between;
        }

        .card1 {
          font-family: 'Figtree';
            display: flex;
            flex-direction: column;
            /* border: 2px solid #eab308; */
            width: 20%;
            min-height: 100%;
            border-radius: 10px;
            align-items: center;

        }

        .card2 {
          font-family: 'Figtree';
            /* border: 2px solid #eab308; */
            width: 79%;
            border-radius: 10px;
        }


        .caixa-foto {
            margin-top: 10px;
            border: 2px solid #eab308;
            padding: 10px;
            width: 170px;
            border-radius: 37px;

        }

        .caixa-foto img {
            border-radius: 37px;
            width: 130px;
            height: 130px;
            margin: 0 auto;
        }

            span {
                font-weight: bold;
                color: #eab308;
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
                    <div class="card1" style="background-color: #334155;padding-top:10px;">
                        <p class="text-lg text-white">Identificação</p>
                        <div class="caixa-foto">
                            <img src="https://static.vecteezy.com/ti/vetor-gratis/p1/18765757-icone-de-perfil-de-usuario-em-estilo-simples-ilustracao-em-avatar-membro-no-fundo-isolado-conceito-de-negocio-de-sinal-de-permissao-humana-vetor.jpg" alt=" ">
                        </div>
                        <div class="mt-10 text-white">
                            <p><span>Matrícula: </span>12345</p>
                            <p><span>Nome: </span>Matheus</p>
                            <p><span>Habilitação: </span>Informática</p>
                            <p><span>Sit. Matrícula: </span>Concluído</p>
                            <p><span>Turma: </span>Turma A</p>
                            <p><span>Ano de entrada: </span>2020</p>
                            <p><span>Módulo/Série: </span>3° SÉRIE</p>
                            <p><span>Grupo: </span>GRUPO A</p>
                        </div>
                    </div>

                    <div class="p-5 text-center text-white card2" style="background-color: #334155">
                        <p class="pb-10 text-4xl">Nossa instituição</p>

                        {{-- CAROUSEL --}}

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
                                  src="https://images.pexels.com/photos/8467296/pexels-photo-8467296.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                  alt="image"
                                />
                              </div>
                              <div class="swiper-slide">
                                <img
                                  class="object-cover w-full h-96"
                                  src="https://images.pexels.com/photos/356065/pexels-photo-356065.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                  alt="image"
                                />
                              </div>
                              <div class="swiper-slide">
                                <img
                                  class="object-cover w-full h-96"
                                  src="https://images.pexels.com/photos/2186256/pexels-photo-2186256.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
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
                            <a href="/info" class="p-4 bg-blue-500 rounded-xl">Veja seu cronograma de aulas</a>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



</x-app-layout>
