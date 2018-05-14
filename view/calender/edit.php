<h3>Edit this birthday</h3>
<div>
  <form action="<?php echo URL ?>calender/editSaveThis" method="POST">
    <label class="title" for="fname">Naam</label>
    <input required type="text" id="person" name="person" value="<?php echo $person['person']; ?>" placeholder="Nieuwe naam" autocomplete="off">
    <input type="hidden" name="id" value="<?php echo $person['id']; ?>">
    <br><br>
    <label class="title" for="fname">Dag</label>
    <input required type="number" id="day" name="day" value="<?php echo $person["day"]; ?>" min="1" max = "31" placeholder="Dag" autocomplete="off">
    <input type="hidden" name="id" value="<?php echo $person['id']; ?>">
<br><br>
    <label class="title" for="fname">Maand</label>
    <input required type="number" id="month" name="month"  value="<?php echo $person["month"]; ?>" min="1" max = "12" placeholder="Maand" autocomplete="off">
    <input type="hidden" name="id" value="<?php echo $person['id']; ?>">
<br><br>
    <label class="title" for="fname">Jaar</label>
    <input required type="number"  id="year" name="year" value="<?php echo $person["year"]; ?>"  min="1900" max = "2018" placeholder="Jaar" autocomplete="off">
    <input type="hidden" name="id" value="<?php echo $person['id']; ?>">
    <br> <br>
    <input id="button" type="submit" value="Versturen">
  </form>
</div>
