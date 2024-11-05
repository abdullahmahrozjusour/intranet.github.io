
var offers = $('.carousel-offer').slick({
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4,
    arrows: false,
    responsive: [{
        breakpoint: 1200,
        settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
        }
    },
    {
        breakpoint: 992,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2
        }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    },

    ]
});
var slick = $('.news-carousel').slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    arrows: false,
    responsive: [{
        breakpoint: 1024,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
        }
    },
    {
        breakpoint: 600,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
    },

    ]
});
$('.prev').on('click', function () {
    slick.slick('slickPrev');
});

$('.next').on('click', function () {
    slick.slick('slickNext');
});

$('.onprev').on('click', function () {
    offers.slick('slickPrev');
});

$('.onext').on('click', function () {
    offers.slick('slickNext');
});
$('.modal-in').on('click', function () {
    var id = $(this).attr('href')
    $('body').css('overflow', 'hidden')
    $(id).css("display", "flex");
    $(id).css("align-items", "center");
})
$('.close-in').on('click', function () {
    var id = $(this).attr('href')
    $('body').css('overflow', 'auto')
    $(id).hide();
})

document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    const eventsDiv = document.getElementById('events');
    const eventsData = [{
        title: 'All Day Event',
        start: '2024-10-29',
        Description: 'lorem ipsum dollar'
    },
    {
        title: 'Long Event',
        start: '2024-10-07',
        end: '2023-01-10'
    },
    {
        groupId: 999,
        title: 'Repeating Event',
        start: '2024-10-09T16:00:00'
    },
    {
        groupId: 999,
        title: 'Repeating Event',
        start: '2024-10-16T16:00:00'
    },
    {
        title: 'Conference',
        start: '2024-10-11',
        end: '2024-10-13'
    },
    {
        title: 'Meeting',
        start: '2024-10-12T10:30:00',
        end: '2024-10-12T12:30:00'
    },
    {
        title: 'Lunch',
        start: '2024-10-12T12:00:00'
    },
    {
        title: 'Meeting',
        start: '2024-10-12T14:30:00'
    },
    {
        title: 'Happy Hour',
        start: '2024-10-12T17:30:00'
    },
    {
        title: 'Dinner',
        start: '2024-10-12T20:00:00'
    },
    {
        title: 'Birthday Party',
        start: '2024-10-13T07:00:00'
    },
    {
        title: 'Click for Google',
        url: 'http://google.com/',
        start: '2024-10-28'
    }
    ];
    const date = new Date();
    const formattedDate = date.toISOString().split('T')[0];
    var calendar = new FullCalendar.Calendar(calendarEl, {
        height: '100%',
        expandRows: true,
        slotMinTime: '08:00',
        slotMaxTime: '20:00',
        headerToolbar: {
            left: 'prev',
            center: 'title',
            right: 'next'
        },
        initialView: 'dayGridMonth',
        initialDate: formattedDate,
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        selectable: true,
        nowIndicator: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: eventsData,
        datesSet: function () {
            // Highlight the cells after the calendar has been rendered
            highlightDaysWithEvents();
        },
        moreLinkContent: function (dayInfo) {
            const eventCount = dayInfo.event?.count || 0;
            return `${dayInfo.num} events`;
        },

    });

    function highlightDaysWithEvents() {
        // Get all day cells
        const dayCells = document.querySelectorAll('.fc-daygrid-day');

        dayCells.forEach(cell => {
            const date = cell.getAttribute('data-date');

            // Check if there are any events on this date
            const hasEvents = eventsData.some(event => {
                const eventStart = event.start.split('T')[0]; // Get just the date part
                const eventEnd = event.end ? event.end.split('T')[0] :
                    eventStart; // Handle all-day events
                return date >= eventStart && date <= eventEnd;
            });

            // Add highlighted class if events are found
            if (hasEvents) {
                cell.classList.add('bg-secondary/25');
            }
        });
    }

    calendar.render();

    // Filter events
    const currentEvents = [];
    const upcomingEvents = [];

    calendar.getEvents().forEach(event => {
        const eventStart = new Date(event.start);

        if (eventStart < date) {
            currentEvents.push(event);
        } else {
            upcomingEvents.push(event);
        }
    });

    // Populate current events
    const currentEventsList = document.getElementById('current-events-list');
    currentEvents.forEach(event => {
        const li = document.createElement('li');
        li.innerText =
            `${event.title} - ${event.start.toLocaleDateString()} - ${event.extendedProps.details}`;
        currentEventsList.appendChild(li);
    });

    // Populate upcoming events
    const upcomingEventsList = document.getElementById('upcoming-events-list');
    upcomingEvents.forEach(event => {
        const li = document.createElement('li');
        li.innerText =
            `${event.title} - ${event.start.toLocaleDateString()} - ${event.extendedProps.details}`;
        upcomingEventsList.appendChild(li);
    });
});

$(function () {
    $("#datepicker").datepicker({
        changeYear: true
    });
});
const city = "Doha";
const country = "Qatar";
const apiUrl = `https://api.aladhan.com/v1/timingsByCity?city=${city}&country=${country}`;

function formatTime24to12(time) {
    const [hour, minute] = time.split(':');
    const hour12 = hour % 12 || 12;
    const ampm = hour >= 12 ? 'PM' : 'AM';
    return `${hour12}:${minute} ${ampm}`;
}

function getNextPrayer(prayerTimes) {
    const now = new Date();
    const currentTime = now.toTimeString().slice(0, 5);
    const prayers = [{
        name: 'Fajr',
        time: prayerTimes.Fajr
    },
    {
        name: 'Dhuhr',
        time: prayerTimes.Dhuhr
    },
    {
        name: 'Asr',
        time: prayerTimes.Asr
    },
    {
        name: 'Maghrib',
        time: prayerTimes.Maghrib
    },
    {
        name: 'Isha',
        time: prayerTimes.Isha
    }
    ];

    for (const prayer of prayers) {
        if (prayer.time >= currentTime) {
            return prayer.name;
        }
    }
    return null;
}

fetch(apiUrl)
    .then(response => response.json())
    .then(data => {
        const timings = data.data.timings;
        const nextPrayer = getNextPrayer(timings);
        document.getElementById('prayer-times').innerHTML = `

        <div class="${nextPrayer === 'Fajr' ? 'bg-secondary text-white lg:scale-[1.35] ' : 'bg-white/75 text-black'} text-center border-2 border-white rounded-xl text-lg p-2 py-2  leading-6">
            <span>Fajr</span>
            <strong class="block"> ${formatTime24to12(timings.Fajr)}</strong>
        </div>
        <div class="${nextPrayer === 'Dhuhr' ? 'bg-secondary text-white lg:scale-[1.35] ' : 'bg-white/75 text-black'} text-center border-2 border-white rounded-xl text-lg p-2 py-2  leading-6">
            <span>Dhuhr</span>
            <strong class="block"> ${formatTime24to12(timings.Dhuhr)}</strong>
        </div>
        <div class="${nextPrayer === 'Asr' ? 'bg-secondary text-white lg:scale-[1.35] ' : 'bg-white/75 text-black'} text-center border-2 border-white rounded-xl text-lg p-2 py-2  leading-6">
            <span>Asr</span>
            <strong class="block"> ${formatTime24to12(timings.Asr)}</strong>
        </div>
        <div class="${nextPrayer === 'Maghrib' ? 'bg-secondary text-white lg:scale-[1.35] ' : 'bg-white/75 text-black'} text-center border-2 border-white rounded-xl text-lg p-2 py-2  leading-6">
            <span>Maghrib</span>
            <strong class="block"> ${formatTime24to12(timings.Maghrib)}</strong>
        </div>
        <div class="${nextPrayer === 'Isha' ? 'bg-secondary text-white lg:scale-[1.35] ' : 'bg-white/75 text-black'} text-center border-2 border-white rounded-xl text-lg p-2 py-2  leading-6">
            <span>Isha</span>
            <strong class="block"> ${formatTime24to12(timings.Isha)}</strong>
        </div>
    `;
    })
    .catch(error => console.error('Error fetching prayer times:', error));

const apiKey = '89b83bc0e8bb4da582c81012242810';
const url = `https://api.weatherapi.com/v1/current.json?key=${apiKey}&q=${city}`;
const date = new Date(); // Current date
const options = {
    weekday: 'long'
}; // Options to get full weekday name
const dayName = date.toLocaleString('en-US', options); // Get day name

fetch(url)
    .then(response => response.json())
    .then(data => {
        const weather = `<div>
                        <span>${data.current.condition.text}</span>
                        <img src="https:${data.current.condition.icon}" class="h-24" alt="">
                    </div>
                    <div class="font-bold">
                        <div class="big flex text-5xl ">${data.current.temp_c}<div class="deg h-[10px] w-[10px] border-2 border-white rounded-full"></div>
                        </div>
                    ${data.location.name}, ${data.location.country}
                        <span class="block font-normal">${dayName}</span>
                    </div>`;
        const location = `in ${data.location.name}, ${data.location.country} (GMT+3)`;
        document.getElementById('weather').innerHTML = weather;
        document.getElementById('location').innerText = location;
    })
    .catch(error => console.error('Error fetching weather data:', error));
