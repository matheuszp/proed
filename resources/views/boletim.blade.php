<style>
        table thead tr{
            background-color: #d5d8f6;
        }
        td{
            background-color: beige;
        }

        .sobre {
            padding: 10px;
            background-color: #334155;
            color: white;
        }

        .dataTables_filter {
            color: white !important;
        }

</style>

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="border: 5px solid #9ea5f7;padding:15px;background-color: #d4d4d4;" class="text-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container mx-auto">
    <h1 class="text-2xl text-center">Boletim do aluno</h1>
    <hr style="margin:20px;border: 2px solid #9ea5f7;">
    <table id="tabela-notas" style="width:100%;" class="display bg-white border border-gray-300 shadow-md rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-r text-center">Matéria</th>
                <th class="py-2 px-4 border-b border-r text-center">Nota</th>
                <th class="py-2 px-4 border-b border-r text-center">Total Aulas</th>
                <th class="py-2 px-4 border-b border-r text-center">Total Faltas</th>
                <th class="py-2 px-4 border-b border-r text-center">Situação</th>

            </tr>
        </thead>
        <tbody>
            <!-- Linha 1 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">8.5</td>
                <td class="py-2 px-4 border-b border-r text-center">20</td>
                <td class="py-2 px-4 border-b border-r text-center">2</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>
            </tr>
            <!-- Linha 2 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">3.2</td>
                <td class="py-2 px-4 border-b border-r text-center">18</td>
                <td class="py-2 px-4 border-b border-r text-center">12</td>
                <td class="py-2 px-4 border-b border-r text-center text-red-500">REPROVADO</td>

            </tr>
            <!-- Linha 3 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Química</td>
                <td class="py-2 px-4 border-b border-r text-center">9</td>
                <td class="py-2 px-4 border-b border-r text-center">22</td>
                <td class="py-2 px-4 border-b border-r text-center">1</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>

            </tr>
            <!-- Linha 4-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Geografia</td>
                <td class="py-2 px-4 border-b border-r text-center">10</td>
                <td class="py-2 px-4 border-b border-r text-center">10</td>
                <td class="py-2 px-4 border-b border-r text-center">2</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>

            </tr>
            <!-- Linha 5-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Educação física</td>
                <td class="py-2 px-4 border-b border-r text-center">0</td>
                <td class="py-2 px-4 border-b border-r text-center">22</td>
                <td class="py-2 px-4 border-b border-r text-center">22</td>
                <td class="py-2 px-4 border-b border-r text-center text-red-500">REPROVADO</td>

            </tr>
            <!-- Linha 6-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">História</td>
                <td class="py-2 px-4 border-b border-r text-center">5</td>
                <td class="py-2 px-4 border-b border-r text-center">40</td>
                <td class="py-2 px-4 border-b border-r text-center">12</td>
                <td class="py-2 px-4 border-b border-r text-center text-red-500">REPROVADO</td>
            </tr>
            <!-- Linha 7-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Filosofia</td>
                <td class="py-2 px-4 border-b border-r text-center">8.5</td>
                <td class="py-2 px-4 border-b border-r text-center">40</td>
                <td class="py-2 px-4 border-b border-r text-center">2</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Biologia</td>
                <td class="py-2 px-4 border-b border-r text-center">7</td>
                <td class="py-2 px-4 border-b border-r text-center">15</td>
                <td class="py-2 px-4 border-b border-r text-center">4</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>
            </tr>

            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Inglês</td>
                <td class="py-2 px-4 border-b border-r text-center">10</td>
                <td class="py-2 px-4 border-b border-r text-center">20</td>
                <td class="py-2 px-4 border-b border-r text-center">4</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Sociologia</td>
                <td class="py-2 px-4 border-b border-r text-center">10</td>
                <td class="py-2 px-4 border-b border-r text-center">40</td>
                <td class="py-2 px-4 border-b border-r text-center">2</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Administração</td>
                <td class="py-2 px-4 border-b border-r text-center">10</td>
                <td class="py-2 px-4 border-b border-r text-center">40</td>
                <td class="py-2 px-4 border-b border-r text-center">2</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">10</td>
                <td class="py-2 px-4 border-b border-r text-center">40</td>
                <td class="py-2 px-4 border-b border-r text-center">2</td>
                <td class="py-2 px-4 border-b border-r text-center text-green-500">APROVADO</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
        <div class="sobre overflow-hidden shadow-xl sm:rounded-lg mt-8 border">
            <h2 class="text-xl">Sobre o boletim:</h2>
            <p>
                &nbsp;&nbsp;&nbsp;O boletim apresentado reflete o desempenho acadêmico em diferentes disciplinas. Cada linha representa uma matéria específica,
                indicando a nota obtida, o total de aulas ministradas e o número de faltas registradas. O destaque azul nos títulos das colunas
                facilita a identificação de cada categoria.
            </p>
            <p>
                &nbsp;&nbsp;&nbsp;Este boletim proporciona uma visão clara e organizada do progresso escolar, permitindo uma análise detalhada das notas,
                frequência e desempenho em cada disciplina. Utilize essas informações para compreender o desenvolvimento acadêmico e identificar
                áreas que podem exigir maior atenção ou aprimoramento.
            </p>
        </div>

    </div>
    </div>
    <script>
        new DataTable('#tabela-notas', {

            scrollX: true,

            lengthMenu: false,

            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json',
            },

            responsive: false,

            "lengthChange" : false,



            "bInfo":false,


        });
    </script>
</x-app-layout>
