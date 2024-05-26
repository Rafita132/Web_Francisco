<?php include 'header.php' ?>

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-7">
            <div id="CalendarioWeb"></div>
        </div>
        <div class="col"></div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#CalendarioWeb').fullCalendar()
    });
</script>
<?php include 'footer.php' ?>