<x-app-layout>

    <style>
        .sobre {
        padding: 10px;
        background-color: #334155;
        color: white;
        margin: 0 auto;
        margin-top: 30px;
    }
    th{
        background-color: rgb(216, 184, 0);
    }
    td{
        background-color:rgb(255, 255, 255);
    }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                <h1 class="text-2xl text-center">Calendário de aulas</h1>
    <hr style="margin:20px;border: 2px solid #9ea5f7;">
    <table id="tabela-notas" style="width:100%;" class="display bg-white border border-gray-300 shadow-md rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-r text-center">Aulas</th>
                <th class="py-2 px-4 border-b border-r text-center">Segunda</th>
                <th class="py-2 px-4 border-b border-r text-center">Terça</th>
                <th class="py-2 px-4 border-b border-r text-center">Quarta</th>
                <th class="py-2 px-4 border-b border-r text-center">Quinta</th>
                <th class="py-2 px-4 border-b border-r text-center">Sexta</th>

            </tr>
        </thead>

        <tbody>
            <!-- Linha 1 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-blue-500">1° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Mátemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Filosofia</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">História</td>
            </tr>
            <!-- Linha 2 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-blue-500">2° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Mátematica</td>
                <td class="py-2 px-4 border-b border-r text-center">Sociologia</td>
                <td class="py-2 px-4 border-b border-r text-center">Inglês</td>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">História</td>

            </tr>
            <!-- Linha 3 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-blue-500">3° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">Química</td>
                <td class="py-2 px-4 border-b border-r text-center">Inglês</td>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">Literatura</td>

            </tr>
            <!-- Linha 4-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-blue-500">4° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">Química</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">Literatura</td>
            </tr>
            <!-- Linha 5-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-blue-500">5° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Geografia</td>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Física</td>
                <td class="py-2 px-4 border-b border-r text-center">Administração</td>
                <td class="py-2 px-4 border-b border-r text-center">Literatura</td>
            </tr>
            <!-- Linha 6-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-blue-500">6° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Geografia</td>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Física</td>
                <td class="py-2 px-4 border-b border-r text-center">Administração</td>
                <td class="py-2 px-4 border-b border-r text-center">Literatura</td>
            </tr>
            <!-- Linha 7-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-blue-500">7° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Biologia</td>
                <td class="py-2 px-4 border-b border-r text-center">Filosofia</td>
                <td class="py-2 px-4 border-b border-r text-center">Ed. Física</td>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-blue-500">8° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Biologia</td>
                <td class="py-2 px-4 border-b border-r text-center">Sociologia</td>
                <td class="py-2 px-4 border-b border-r text-center">Ed. Física</td>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
            </tr>
        </tbody>
    </table>




            </div>
        </div>
        <div class="sobre overflow-hidden shadow-xl sm:rounded-lg mt-8 border max-w-7xl">
            <h2 class="text-xl">Sobre o boletim:</h2>
            <p>
                &nbsp;Aqui temos o cronograma com o calendário das aulas
            </p>
            <p>
                &nbsp;Este boletim proporciona uma visão clara e organizada do progresso escolar, permitindo uma análise detalhada das notas,
                frequência e desempenho em cada disciplina. Utilize essas informações para compreender o desenvolvimento acadêmico e identificar
                áreas que podem exigir maior atenção ou aprimoramento.
            </p>
        </div>
    </div>
</x-app-layout>
