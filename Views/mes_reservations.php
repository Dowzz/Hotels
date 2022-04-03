<h2 id="mes_reservations">Mes reservations</h2>
<div class="container_ container_register">
    <p id="alert"></p>

    <div class="tbodyres">

    </div>
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