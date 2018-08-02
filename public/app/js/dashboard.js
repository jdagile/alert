var Dashboard = function() {
    return {
        init: function() {
            if (0 !== $("#m_calendar").length) {
                var e = moment().startOf("day");
                e.format("YYYY-MM"), e.clone().subtract(1, "day").format("YYYY-MM-DD"), e.format("YYYY-MM-DD"), e.clone().add(1, "day").format("YYYY-MM-DD"), $("#m_calendar").fullCalendar({
                    header: {
                        left: "prev,next today",
                        center: "title",
                        right: "month,listWeek"//"agendaDay,agendaWeek"
                    },
                    editable: !1,
                    eventLimit: !0,
                    navLinks: !0,
                    defaultDate: moment(Date()),
                    events: {
						url: 'http://cicohalert.test/estacionesalertasapi',
						type: 'GET',
						error: function() {
						  console.log('there was an error while fetching events!');
						}
					},
                    eventRender: function(e, t) {
                        t.hasClass("fc-day-grid-event") ? (t.data("content", e.description), t.data("placement", "top"), mApp.initPopover(t)) : t.hasClass("fc-time-grid-event") ? t.find(".fc-title").append('<div class="fc-description">' + e.description + "</div>") : 0 !== t.find(".fc-list-item-title").lenght && t.find(".fc-list-item-title").append('<div class="fc-description">' + e.description + "</div>")
                    }
                })
            }//FIN CALENDARIO
        }// FIN INIT
    }//FIN RETURN
}();// FIN DASHBOARD

var conteoNuevasNoti = 0;
function refrescarNotificaciones(){
    var template = '<div class="m-list-timeline__item"><span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span><span class="m-list-timeline__text">@@MENSAJE@@</span><span class="m-list-timeline__time">@@TIME@@</span></div>';
    $.ajax({
        url: "http://cicohalert.test/ApiRestPruebas?action=datos3"
    }).done(function(res){
        var noti = "";
        conteoNuevasNoti=0;
        var r = JSON.parse(res);
        for (var key in r) {
          console.log(r[key])
            noti += template.replace("@@MENSAJE@@",r[key].mensaje).replace("@@TIME@@",r[key].antiguedad)
            if(r[key].nueva==1){
                conteoNuevasNoti++;
            }
        }

        if(conteoNuevasNoti>0){
            $("#notificationsCount").text(conteoNuevasNoti).show();
        } else {
            $("#notificationsCount").text(0).hide();
        }
        $("#notificationsTitle").text((conteoNuevasNoti>0)?conteoNuevasNoti+" Nuevas notificaciones.":"Notificaciones")
        $("#notificationsItems").html(noti);
        setTimeout(function(){
            refrescarNotificaciones();
        },5000)
    }).fail(function(e){
        console.log("Error",e)
        setTimeout(function(){
            refrescarNotificaciones();
        },5000)
    });
};

jQuery(document).ready(function() {
    Dashboard.init();
    refrescarNotificaciones();
});
