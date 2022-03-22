<script>
$(document).ready(function() {
    load_data();
});

function load_data() {
    $.ajax({
        url: "./script/update_etab.php",
        method: "POST",
        success: function(data) {
            $('#mycontainer').html(data);
        }
    });
};
</script>