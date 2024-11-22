<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calendar</title>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Add Custom Styles for Black and Blue Colors -->
    <style>
        /* Calendar Background Color */
        #calendar {
            background-color: #181717; /* Black background */
            color: #fcfeff; /* Blue text */
        }

        /* Header Background and Text Color */
        .fc-toolbar {
            background-color: #000000;
            color: #ffffff;
        }

        /* Header button color */
        .fc-button {
            background-color: #000000;
            color: #ffffff;
        }

        .fc-button:hover {
            background-color: #131314;
            color: #000000;
        }

        /* Date cells color */
        .fc-daygrid-day {
            background-color: #000000;
            color: #253442;
        }

        /* Event Color */
        .fc-event {
            background-color: #08223b; /* Blue background */
            color: #000000; /* Black text */
        }

        .fc-event:hover {
            background-color: #000000;
            color: #213344;
        }

        /* Date cell hover effect */
        .fc-daygrid-day:hover {
            background-color: #273038;
            color: #000000;
        }
    </style>
</head>
<body>
    <div>
        @include("layouts.sidebar")
        <div class="lg:ml-72 p-6">
            <div class="container mx-auto py-12 px-6" x-data="{ showModal: false }">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        
                    <!-- Create Event Form (hidden) -->
                    <form class="hidden" method="post" action="{{ route('calendar.store') }}">
                        @csrf
                        <input name="start" id="start" type="datetime-local">
                        <input name="end" id="end" type="datetime-local">
                        <button id="submitEvent" class="hidden">submit</button>
                    </form>
        
                    <!-- Update Event Form (hidden) -->
                    <form class="hidden" id="updateForm" method="post" action="">
                        @csrf @method('PUT')
                        <input id="updatedStart" name="start" type="hidden">
                        <input id="updatedEnd" name="end" type="hidden">
                        <button id="submitUpdate" class="hidden">update</button>
                    </form>
        
                    <!-- Calendar Section -->
                    <div class="w-full bg-white rounded-3xl shadow-xl py-6">
                        <div class="flex gap-[29rem] items-center mb-6">
                            <h1 class="text-4xl font-semibold text-gray-800 px-6">Calendar</h1>
                            <button id="createEventBtn" @click="showModal = true" class="px-2 py-2 bg-black text-white rounded-lg hover:bg-gray-900 transition duration-200">
                                Create Event
                            </button>
                        </div>
        
                        <!-- Full Calendar -->
                        <div id="calendar"></div>
                    </div>
        
                    <!-- Modal for Creating Events -->
                    <div x-show="showModal" class="fixed inset-0 flex items-center justify-center bg-gray-600 bg-opacity-50 z-50" @click.away="showModal = false">
                        <div class="bg-white rounded-lg p-6 w-full max-w-md">
                            <h2 class="text-xl font-semibold mb-4">Create New Event</h2>
                            <form method="POST" >
                                @csrf
                                <div class="mb-4">
                                    <label for="eventTitle" class="block text-sm font-medium text-gray-700">Event Title</label>
                                    <input type="text" id="eventTitle" name="title" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                                </div>
                                <div class="mb-4">
                                    <label for="start" class="block text-sm font-medium text-gray-700">Start Time</label>
                                    <input type="datetime-local" id="start" name="start" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                                </div>
                                <div class="mb-4">
                                    <label for="end" class="block text-sm font-medium text-gray-700">End Time</label>
                                    <input type="datetime-local" id="end" name="end" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
                                </div>
                                <div class="flex justify-end">
                                    <button type="submit" class="px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-900 transition duration-200">Save Event</button>
                                    <button type="button" @click="showModal = false" class="ml-2 px-6 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-200">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <script>
                document.addEventListener('DOMContentLoaded', async function () {
                    let response = await axios.get("/calendar/create")
                    let events = response.data.events
        
                    let nowDate = new Date()
                    let day = nowDate.getDate()
                    let month = nowDate.getMonth() + 1
                    let hours = nowDate.getHours()
                    let minutes = nowDate.getMinutes()
                    let minTimeAllowed =
                        `${nowDate.getFullYear()}-${month < 10 ? "0" + month : month}-${day < 10 ? "0" + day : day}T${hours < 10 ? "0" + hours : hours}:${minutes < 10 ? "0" + minutes : minutes}:00`
                    start.min = minTimeAllowed;
        
                    var myCalendar = document.getElementById('calendar');
        
                    var calendar = new FullCalendar.Calendar(myCalendar, {
                        headerToolbar: {
                            left: 'dayGridMonth,timeGridWeek,timeGridDay',
                            center: 'title',
                            right: 'listMonth,listWeek,listDay'
                        },
                        views: {
                            listDay: {
                                buttonText: 'Day ',
                            },
                            listWeek: {
                                buttonText: 'Week '
                            },
                            listMonth: {
                                buttonText: 'Month '
                            },
                            timeGridWeek: {
                                buttonText: 'Week',
                            },
                            timeGridDay: {
                                buttonText: "Day",
                            },
                            dayGridMonth: {
                                buttonText: "Month",
                            },
                        },
                        initialView: "timeGridWeek",
                        slotMinTime: "09:00:00",
                        slotMaxTime: "19:00:00",
                        nowIndicator: true,
                        selectable: true,
                        selectMirror: true,
                        selectOverlap: false,
                        weekends: true,
                        editable: true,
                        droppable: true,
                        events: events,
                        eventDrop: (info) => {
                            updateEvent(info)
                        },
                        eventResize: (info) => {
                            updateEvent(info)
                        },
                        eventClick: (info) => {
                            let eventId = info.event._def.publicId
                            if (validateOwner(info)) {
                                deleteEventForm.action = `/calendar/delete/${eventId}`
                                deleteEventBtn.click()
                            }
                        },
                        selectAllow: (info) => {
                            return info.start >= nowDate;
                        },
                        select: (info) => {
                            console.log(info);
                            if (info.end.getDate() - info.start.getDate() > 0 && !info.allDay) {
                                return
                            }
                            if (info.allDay) {
                                start.value = info.startStr + " 09:00:00"
                                end.value = info.startStr + " 19:00:00"
                            } else {
                                start.value = info.startStr.slice(0, info.startStr.length - 6)
                                end.value = info.endStr.slice(0, info.endStr.length - 6)
                            }
                            submitEvent.click()
                        },
                    });
        
                    calendar.render();
        
                    function updateEvent(info) {
                        let eventInfo = info.event._def
                        let eventTime = info.event._instance.range
                        if (eventTime.start > nowDate && validateOwner(info)) {
                            function formattedDate(time) {
                                let date = new Date(time);
                                return date.toISOString().slice(0, 19);
                            }
                            updatedStart.value = formattedDate(eventTime.start)
                            updatedEnd.value = formattedDate(eventTime.end)
        
                            updateForm.action = `/calendar/update/${eventInfo.publicId}`
                            submitUpdate.click()
                        } else {
                            window.location.reload()
                        }
                    };
        
                    function validateOwner(info) {
                        let owner = info.event._def.extendedProps.owner
                        let authUser = `{{ Auth::user()->id }}`
                        return owner == authUser
                    }
                })
            </script>
        </div>
    </div>
</body>
</html>
