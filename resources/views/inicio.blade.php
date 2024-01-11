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
            width: 78%;
            border-radius: 10px;
        }
    </style>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container flex">
                    <div class="card1">
                        foto e informacoes
                    </div>
                    <div class="card2">
                        <div id="evoCalendar"></div>

                    </div>
                </div>
                <!-- <x-welcome /> -->
            </div>
        </div>
    </div>
    <script>
        myEvents = [
            {
                id: "required-id-1",
                name: "New Year",
                date: "Wed Jan 01 2020 00:00:00 GMT-0800 (Pacific Standard Time)",
                type: "holiday",
                everyYear: true
            },
            {
                id: "required-id-2",
                name: "Valentine's Day",
                date: "Fri Feb 14 2020 00:00:00 GMT-0800 (Pacific Standard Time)",
                type: "holiday",
                everyYear: true,
                color: "#222"
            },
            {
                id: "required-id-3",
                name: "Custom Date",
                badge: "08/03 - 08/05",
                date: ["August/03/2020", "August/05/2020"],
                description: "Description here",
                type: "event",
            },
            // more events here
        ],



        $(document).ready(function () {
            $('#evoCalendar').evoCalendar({
                calendarEvents: myEvents,
            });
        });

        // $('#evoCalendar').evoCalendar({
        //     format: 'mm/dd/yyyy',
        //     titleFormat: 'MM yyyy',
        //     eventHeaderFormat: 'MM d, yyyy'
        // });
    </script>
</x-app-layout>
