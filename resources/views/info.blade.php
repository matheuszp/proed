<x-app-layout>

    <style>
        div {
            font-family: 'Figtree';
        }

        .sobre {
        padding: 10px;
        background-color: #334155;
        color: white;
        margin: 0 auto;
        margin-top: 30px;
    }
    th{
        background-color: #9ea5f7;
        color: #000;
        border: 2px solid #000;
    }
    td{
        background-color: #1e293b;
        color: white;
        border: 2px solid #000;
    }
    table{
        border: 2px solid #000;
    }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div style="background-color: #334155" class=" overflow-hidden shadow-xl sm:rounded-lg p-5">
                <h1 class="text-2xl text-white text-center">Calendário de aulas</h1>
    <hr style="margin:20px;border: 2px solid #eab308;">
    <table id="tabela-notas" style="width:100%;" class="display bg-white shadow-md rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b border-r text-center font-bold">Aulas</th>
                <th class="py-2 px-4 border-b border-r text-center font-bold">Segunda</th>
                <th class="py-2 px-4 border-b border-r text-center font-bold">Terça</th>
                <th class="py-2 px-4 border-b border-r text-center font-bold">Quarta</th>
                <th class="py-2 px-4 border-b border-r text-center font-bold">Quinta</th>
                <th class="py-2 px-4 border-b border-r text-center font-bold">Sexta</th>

            </tr>
        </thead>

        <tbody>
            <!-- Linha 1 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-yellow-500 font-bold">1° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Mátemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Filosofia</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">História</td>
            </tr>
            <!-- Linha 2 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-yellow-500 font-bold">2° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Mátematica</td>
                <td class="py-2 px-4 border-b border-r text-center">Sociologia</td>
                <td class="py-2 px-4 border-b border-r text-center">Inglês</td>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">História</td>

            </tr>
            <!-- Linha 3 -->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-yellow-500 font-bold">3° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">Química</td>
                <td class="py-2 px-4 border-b border-r text-center">Inglês</td>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">Administração</td>

            </tr>
            <!-- Linha 4-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-yellow-500 font-bold">4° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">Química</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
                <td class="py-2 px-4 border-b border-r text-center">Informática</td>
                <td class="py-2 px-4 border-b border-r text-center">Ética</td>
            </tr>
            <!-- Linha 5-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-yellow-500 font-bold">5° aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Geografia</td>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Física</td>
                <td class="py-2 px-4 border-b border-r text-center">Administração</td>
                <td class="py-2 px-4 border-b border-r text-center">Redação</td>
            </tr>
            <!-- Linha 6-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-yellow-500 font-bold">6° Aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Geografia</td>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Física</td>
                <td class="py-2 px-4 border-b border-r text-center">Administração</td>
                <td class="py-2 px-4 border-b border-r text-center">Redação</td>
            </tr>
            <!-- Linha 7-->
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-yellow-500 font-bold">7° Aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Biologia</td>
                <td class="py-2 px-4 border-b border-r text-center">Filosofia</td>
                <td class="py-2 px-4 border-b border-r text-center">Ed. Física</td>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b border-r text-center text-yellow-500 font-bold">8° Aula</td>
                <td class="py-2 px-4 border-b border-r text-center">Biologia</td>
                <td class="py-2 px-4 border-b border-r text-center">Sociologia</td>
                <td class="py-2 px-4 border-b border-r text-center">Ed. Física</td>
                <td class="py-2 px-4 border-b border-r text-center">Matemática</td>
                <td class="py-2 px-4 border-b border-r text-center">Português</td>
            </tr>
        </tbody>
    </table>
</div>
        <div class="sobre overflow-hidden shadow-xl sm:rounded-lg mt-8">
                <h2 class="text-xl text-yellow-500 font-bold">Sobre o cronograma:</h2>
                <p>
                    &nbsp;Aqui temos o cronograma com o calendário das aulas
                </p>
                <p>
                    &nbsp;Este é o cronograma de aulas fixo dos alunos.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
