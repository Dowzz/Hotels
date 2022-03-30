<h2 id="mes_reservations">Mes reservations</h2>
<div class="container_ container_register">
    <p id="alert"></p>
    <table class="table">
        <thead>
            <tr>
                <th>Nom Hotel</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Nom Suite</th>
                <th>Date départ</th>
                <th>Date de fin</th>
                <th>Prix/nuit</th>
                <th>Annulation</th>

            </tr>
        </thead>
        <tbody class="tbodyres">



        </tbody>
    </table>
</div>

<script>
$(document).ready(function() {
    $.ajax({
        url: "./script/mes_reservations/manage_reservation.php",
        type: "post",
        success: function(response) {
            $(".tbodyres").html(response);
        },
    })
});

function cancel(id) {
    console.log(id);
    $.ajax({
        url: "./script/mes_reservations/cancel.php",
        method: "post",
        data: {
            resid: id,
            delres: 1,
        },
        success: function(response) {
            $("#alert").html(response);
        },
    });
    $.ajax({
        url: "mes_reservations.php",
        type: "post",
        success: function(response) {
            $(".tbodyres").html(response);
        },
    })
};
</script>