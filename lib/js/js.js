(function(win, doc){
    'use strict';

    // Exibir o calendario
    function getCalendar(perfil, div) {
        let calendarEl = doc.querySelector(div);
        let calendar = new FullCalendar.Calendar(calendarEl, {
            themeSystem: 'bootstrap',
            initialView: 'dayGridMonth',
        headerToolbar: {
            start: 'prev next today',
            center: 'title',
            end: 'dayGridMonth timeGridWeek timeGridDay list'
        },
        height: 650,
        eventLimit: true,
        buttonText: {
            today: 'hoje',
            month: 'mes',
            week: 'semana',
            day: 'dia' 
        },
        locale: 'pt-br',
        dateClick: function(info) {
            if(perfil == 'manager') {
                calendar.changeView('timeGrid', info.dateStr);
            } else {
                if(info.view.type == 'dayGridMonth') {
                    calendar.changeView('timeGrid', info.dateStr);
                } else {
                    win.location.href='/views/user/add.php?date='+info.dateStr
                }
            }
            
            // alert('clicked on: ' + info.dateStr)
            // alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY)
            
        },
        events: '/controllers/ControllerEvents.php',
        editable: true,
        selectable: true,
        eventClick: function(info) {
            if(perfil == 'manager') {
                win.location.href=`/views/manager/editar.php?id=${info.event.id}`;
                //win.location.href=`/view/manager/editar?id=${info.event.id}`
            } 
        }
    })
    calendar.render();
    }

    if(doc.querySelector('.calendarUser')) {
        getCalendar('user', '.calendarUser');
    } else if (doc.querySelector('.calendarManager')) {
        getCalendar('manager', '.calendarManager')
    }

        if(doc.querySelector('#delete')) {
            let btn = doc.querySelector('#delete');
            btn.addEventListener('click', (event) => {
                event.preventDefault();
                if(confirm('Deseja apagar esse evento?')) {
                    win.location.href=event.target.parentNode.href
                }
            }, false)
        }
    
})(window, document);