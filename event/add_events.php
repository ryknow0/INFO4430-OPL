<?php include '../view/header.php' ?>
<main>
    <section>
        <h1>Add an event</h1>
        <form action="" method="post"></form>
        <input type="hidden" name="action" value = "add_event_data">
        Event_Name: <input type="text" name="event_name"> <br>
        Event_Date: <input type="text" name="event_date"> <br>
        Start_Time: <input type="text" name="start_time"> <br>
        End_Time: <input type="text" name="end_time"> <br>
        Event Location: <input type="text" name="event_location" > <br>
        Category: <input type="text" name="category"> <br>
        Target_Audience: <input type="text" name="target_audience"> <br>
        <!-- ASK IF WE WANT TO CREATE THE EVENT TYPE AS LIST OR TEXT!--> Event Type: <select name="event_type">
        <?php
        foreach($event_types as $event_types) : ?>
        <option value="<?=$event_type[0]?>"> <?= $event_type[0]?> </option>
        <?php endforeach ?>
        </select>
        <br>
        Topic: <input type="text" name="topic"> <br>
        <input type="submit" value="Submit">
        
        </form>
    </section>
</main>

<?php include '../view/footer.php'?>
