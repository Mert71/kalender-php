<h3>Add A New Birthday</h3>
<div>
  <form action="<?= URL ?>calender/createSave" method="POST">
    <label class="title" for="fname">Name</label>
    <input required type="text" id="person" name="person" placeholder="Name" autocomplete="off">
    <br> <br>
    <label class="title" for="fname">Day</label>
    <input required type="number" id="day" name="day" min="1" max = "31" placeholder="Day" autocomplete="off">
    <br><br>
    <label class="title" for="fname">Month</label>
    <input required type="number" id="month" name="month"  min="1" max = "12" placeholder="Month" autocomplete="off" >
    <br><br>
    <label class="title" for="fname">Year</label>
    <input required type="number" id="year" name="year"  min="1900" max = "2018" placeholder="Year" autocomplete="off">
    <br> <br>
    <input id="button" type="submit" value="Versturen">
  </form>
</div>
