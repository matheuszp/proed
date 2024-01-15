<style>
        div {
            font-family: 'Figtree';
        }
        table thead tr{
            background-color: #9ea5f7;
            color: black;
            /* border: 2px solid #000 !important; */
        }
        td{
            background-color: #1e293b !important;
            color: white;
            border: 1px solid #000 !important;
        }
        th {
            border: 1px solid #334155 !important;
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
            <div style="padding:15px;background-color: #334155;" class="text-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="container mx-auto">
    <h1 class="text-2xl text-center">Boletim do aluno</h1>
    <hr style="margin:20px;border: 2px solid #eab308;">
    <table id="tabela-notas" style="width:100%;" class="">
        <thead>
            <tr>
                <th class="py-2 px-4 text-center font-bold">Matéria</th>
                <th class="py-2 px-4 text-center font-bold">Nota</th>
                <th class="py-2 px-4 text-center font-bold">Total Aulas</th>
                <th class="py-2 px-4 text-center font-bold">Total Faltas</th>
                <th class="py-2 px-4 text-center font-bold">Situação</th>

            </tr>
        </thead>
        <tbody>
            <!-- Linha 1 -->
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Matemática</td>
                <td class="py-2 px-4 text-center">8.5</td>
                <td class="py-2 px-4 text-center">160</td>
                <td class="py-2 px-4 text-center">2</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>
            <!-- Linha 2 -->
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Português</td>
                <td class="py-2 px-4 text-center">3.2</td>
                <td class="py-2 px-4 text-center">160</td>
                <td class="py-2 px-4 text-center">27</td>
                <td class="py-2 px-4 text-center text-red-500">REPROVADO</td>

            </tr>
            <!-- Linha 3 -->
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Química</td>
                <td class="py-2 px-4 text-center">9</td>
                <td class="py-2 px-4 text-center">22</td>
                <td class="py-2 px-4 text-center">1</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>

            </tr>
            <!-- Linha 4-->
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Geografia</td>
                <td class="py-2 px-4 text-center">10</td>
                <td class="py-2 px-4 text-center">10</td>
                <td class="py-2 px-4 text-center">2</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>

            </tr>
            <!-- Linha 5-->
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Educação física</td>
                <td class="py-2 px-4 text-center">0</td>
                <td class="py-2 px-4 text-center">22</td>
                <td class="py-2 px-4 text-center">22</td>
                <td class="py-2 px-4 text-center text-red-500">REPROVADO</td>

            </tr>
            <!-- Linha 6-->
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">História</td>
                <td class="py-2 px-4 text-center">5</td>
                <td class="py-2 px-4 text-center">40</td>
                <td class="py-2 px-4 text-center">12</td>
                <td class="py-2 px-4 text-center text-red-500">REPROVADO</td>
            </tr>
            <!-- Linha 7-->
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Filosofia</td>
                <td class="py-2 px-4 text-center">8.5</td>
                <td class="py-2 px-4 text-center">40</td>
                <td class="py-2 px-4 text-center">2</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Biologia</td>
                <td class="py-2 px-4 text-center">7</td>
                <td class="py-2 px-4 text-center">15</td>
                <td class="py-2 px-4 text-center">4</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>

            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Inglês</td>
                <td class="py-2 px-4 text-center">10</td>
                <td class="py-2 px-4 text-center">80</td>
                <td class="py-2 px-4 text-center">4</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Sociologia</td>
                <td class="py-2 px-4 text-center">10</td>
                <td class="py-2 px-4 text-center">40</td>
                <td class="py-2 px-4 text-center">2</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Administração</td>
                <td class="py-2 px-4 text-center">10</td>
                <td class="py-2 px-4 text-center">40</td>
                <td class="py-2 px-4 text-center">2</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Informática</td>
                <td class="py-2 px-4 text-center">10</td>
                <td class="py-2 px-4 text-center">100</td>
                <td class="py-2 px-4 text-center">4</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Física</td>
                <td class="py-2 px-4 text-center">5</td>
                <td class="py-2 px-4 text-center">40</td>
                <td class="py-2 px-4 text-center">12</td>
                <td class="py-2 px-4 text-center text-red-500">REPROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Redação</td>
                <td class="py-2 px-4 text-center">9</td>
                <td class="py-2 px-4 text-center">22</td>
                <td class="py-2 px-4 text-center">1</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>
            <tr>
                <td class="py-2 px-4 text-center text-yellow-500 font-bold">Ética</td>
                <td class="py-2 px-4 text-center">9</td>
                <td class="py-2 px-4 text-center">22</td>
                <td class="py-2 px-4 text-center">1</td>
                <td class="py-2 px-4 text-center text-green-500">APROVADO</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
        <div class="sobre overflow-hidden shadow-xl sm:rounded-lg mt-8">
            <h2 class="text-xl text-yellow-500 font-bold">Sobre o boletim:</h2>
            <p>
                &nbsp;O boletim apresentado reflete o desempenho acadêmico em diferentes disciplinas. Cada linha representa uma matéria específica,
                indicando a nota obtida, o total de aulas ministradas e o número de faltas registradas. O destaque azul nos títulos das colunas
                facilita a identificação de cada categoria.
            </p>
            <p>
                &nbsp;Este boletim proporciona uma visão clara e organizada do progresso escolar, permitindo uma análise detalhada das notas,
                frequência e desempenho em cada disciplina. Utilize essas informações para compreender o desenvolvimento acadêmico e identificar
                áreas que podem exigir maior atenção ou aprimoramento.
            </p>
        </div>

    </div>
    </div>
    <script>
        new DataTable('#tabela-notas', {

            scrollX: false,

            language: {
                url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/pt-BR.json',
            },

            responsive: false,

            "lengthChange" : false,

            "bInfo":false,


        });
    </script>
</x-app-layout>
