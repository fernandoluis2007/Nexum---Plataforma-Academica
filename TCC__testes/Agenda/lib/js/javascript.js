(function (win, doc) {
    'use strict';

    //Exibir o calendário
    function getCalendar(perfil, div)
    {
    let calendarEl = doc.querySelector(div);
    /*criarmos uma váriavel para receber onde vai ser inserido o calendário*/
    let calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        headerToolbar: {
            start: 'prev,next, today', // will normally be on the left. if RTL, will be on the right
            center: 'title',
            end: 'dayGridMonth, timeGridWeek, timeGridDay' // will normally be on the right. if RTL, will be on the left

            /*dayGridMonth: muda a visualização por mês, 
              timeGridWeek: muda a visualização por semana,
              timeGridDay: muda a visualização por dia a dia*/

        },
        buttonText: {
            today: 'Hoje',
            month: 'Mês',
            week: 'Semana',
            day: 'Dia',
        },
        locale: 'pt-br', /*deixando em portugues Brasil*/

        dateClick: function (info) {
            if(perfil == 'manager'){
                calendar.changeView('timeGrid', info.dateStr);
            }else{
                if(info.view.type == 'dayGridMonth'){
                    calendar.changeView('timeGrid', info.dateStr);
                }else{
                    win.location.href='../../../Agenda/views/user/add.php?date='+info.dateStr;
                }
            }
            /*alert('Clicked on: ' + info.dateStr);
            alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
            alert('Current view: ' + info.view.type);
            // change the day's background color just for fun
            info.dayEl.style.backgroundColor = 'blue';*/
        },
        /*Acionado quando o usuário clica em uma data ou hora, ficando marcado no calendário como vermelho = 'red'!.*/

        

        events: '../../../Agenda/controllers/ControllerEvents.php',
        /*criação de eventos na tela do calendário por meio de objetos*/
        eventClick: function(info) {
            if(perfil == 'manager'){
                win.location.href=`../../../Agenda/views/manager/editar.php?id=${info.event.id}`;
            }else{
                alert('vai para página do user');
            }
        }

    });

    calendar.render();
    /*chamando a instancia e logo em seguida renderiza ela*/

    }

    if(doc.querySelector('.calendarUser')){
        getCalendar('user','.calendarUser');
    }else if(doc.querySelector('.calendarManager')){
        getCalendar('manager','.calendarManager');
    }


    if(doc.querySelector('#delete')){
        let btn=doc.querySelector('#delete');
        btn.addEventListener('click',(event)=>{
            event.preventDefault();
            if(confirm("Deseja mesmo apagar este dado?")){
                win.location.href=event.target.parentNode.href;
            }
        },false);
    }
    

})(window, document);