<h3>Voeg een nieuwe verjaardag toe</h3>
<div>
  <form action="<?php echo URL ?>calender/toevoegenSave" method="POST">
    <label class="title" for="fname">Naam</label>
    <input type="text" id="person" name="person" placeholder="Nieuwe naam">

    <label class="title" for="fname">Dag</label>
    <input type="number"onkeydown="return FilterInput(event)"  id="day" name="day" min="1" max = "31" placeholder="Dag">
    <label class="title" for="fname">Maand</label>
    <input type="number"onkeydown="return FilterInput(event)" id="month" name="month"  min="1" max = "12" placeholder="Maand">
    <label class="title" for="fname">Jaar</label>
    <input type="number"onkeydown="return FilterInput(event)"   id="year" name="year"  min="1900" max = "2018" placeholder="Jaar">

    <input id="button" type="submit" value="Versturen">
  </form>
</div>
