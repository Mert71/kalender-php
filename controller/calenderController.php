
<?php

  require(ROOT . "model/calenderModel.php");


  function index(){

    $data = GetAllBirthday();

    render("calender/index", array(
      "data" => $data
    ));
  }

////////////////////////////////////////////////

  function toevoegen(){
  	render("calender/toevoegen");
  }


function toevoegenSave(){
  echo "toevoegenSave in Controller";
  	// render("calender/toevoegen");
  $data=array(
		'person' => $_POST['person'],
       'day' => $_POST['day'],
		 'month' => $_POST['month'],
			'year' => $_POST['year']
		);
    createBirthday($data);
  // lees: https://www.w3schools.com/php/php_arrays.asp
  // Maak een array met $data met daarin de waardes uit het formulier --> ophalen via POST
  // geef deze array ($data) mee aan createBirthday in de model
  header('Location:' . URL . 'calender/index');
}

////////////////////////////////////////////



function deleteThis($id){
  deleteProgres($id);
  header('Location:' . URL . 'calender/index');
}


/////////////////////////////////////////////

function editThis($id){
  $data['person']= GetOneBirthday($id);
  // var_dump($data);
  render("calender/edit",$data);

    //enkele birthday ophalen die stuur ik mee naar edit
    // editBirthday($data123);

}

function editSaveThis(){
    // var_dump($_POST);
    $dataSafe=array(
  		'person' => $_POST['person'],
         'day' => $_POST['day'],
  		 'month' => $_POST['month'],
  			'year' => $_POST['year'],
        'id'   => $_POST["id"]
    	);
    editBirthday($dataSafe);
    header("location:" . URL . "calender/index" );

}










?>
