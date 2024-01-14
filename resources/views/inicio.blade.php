<x-app-layout>
    <style>
        .container {
            height: 70vh;
            justify-content: space-between;
        }

        .card1 {
            border: 5px solid #9ea5f7;
            width: 20%;
            min-height: 100%;
            border-radius: 10px;
        }

        .card2 {
            border: 5px solid #9ea5f7;
            width: 79%;
            border-radius: 10px;
        }


        .caixa-foto {
            border: 2px solid #333;
            padding: 10px;
            width: 200px;
            border-radius: 37px;
        }

    </style>

    <div class="py-12" style="">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="container flex">
                    <div class="card1">
                        <h1>Aluno</h1>
                        <div class="caixa-foto"><img src="https://cdn.discordapp.com/attachments/773330920903671869/1195862758160355428/image.png?ex=65b588fb&is=65a313fb&hm=1e6ba5917bc268fb2cd52e0436ab21f34616cc1471407f3e663d791a9c32794d&" alt=" ">


                    </div>


                    </div>
                    <div class="card2">
                        <h1>Nova Branch Carousel</h1>

                        <style>
                          .slider{
                              overflow: hidden;
                              padding: 10px;

                          }
                          .slider > .slider-content{
                              display: flex;
                              flex-wrap: nowrap;
                              width: 100%;
                              transition: all 500ms ease;

                          }

                          .slider > .slider-content > .slider-item {
                              flex: 0 0 auto;
                              width: 100%;
                          }

                          .slider > input:nth-child(1):checked ~ .slider-content{
                              transform: translateX(0%);
                          }

                          .slider > input:nth-child(2):checked ~ .slider-content{
                              transform: translateX(-100%);
                          }
                          .slider > input:nth-child(3):checked ~ .slider-content{
                              transform: translateX(-200%);
                          }

                          .slider > input:nth-child(4):checked ~ .slider-content{
                              transform: translateX(-300%);
                          }
                        </style>

                        <section class="slider">
                          <input name='slide' type="radio" checked>
                          <input name='slide' type="radio">
                          <input name='slide' type="radio">
                          <input name='slide' type="radio">

                          <div class="slider-content">
                              <div class="slider-item">
                                <img src="https://media-manager.noticiasaominuto.com.br/1920/naom_6203814bc0d61.jpg" alt="">
                              </div>
                              <div class="slider-item"></div>
                                <img src="https://www.miliciadaimaculada.org.br/source/files/originals/VOLTA_AS_AULAS-720149.jpg" alt="">
                              <div class="slider-item"></div>
                                <img src="https://akadseguros.com.br/content/uploads/2023/11/segurro-empresarial-escola-1920x0-c-default.jpg" alt="">
                              <div class="slider-item"></div>
                                <img src="" alt="">
                          </div>
                      </section>


                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
