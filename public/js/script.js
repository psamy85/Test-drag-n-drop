
$(document).ready(
    function() {
        /*  Changement de l'affichage des minutes en heures + minutes  */
        $(".movie-duration").each(function() {
            var minutesTemp = Number($(this).text());
            var hours = Math.trunc( minutesTemp / 60 );
            var minutes = minutesTemp % 60;
            $(this).text(hours + "h" + minutes);
        });

        /*  Fonction jQuery permettant le drag n drop  */
        $( "#sortable" ).sortable({
            revert: true,
            stop: function(event, ui){                                      //Détéction d'un événement drag n drop
                var position = new Array();                                 //Création d'une liste où les id des films seront stockés en fonction de l'orde dans lequel ils sont à l'écran
                position = $.map($(this).find('li'), function(el) {
                    return el.id;
                });
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    url: "/movie/upPosition",
                    type: "post",
                    data : {'position': position},
                    success: function(data){
                       console.log(data)
                    }
                });
            }
        });
    }
);
