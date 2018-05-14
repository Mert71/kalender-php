<?php
  require(ROOT . "model/CalenderModel.php");

  function index(){
    $data = GetAllBirthday();
    render("calender/index", array(
    "data" => $data
    ));
  }

	function create(){
  	render("calender/create");
  }

function createSave(){
  echo "createSave in Controller";
$data=array(
	'person' => $_POST['person'],
	'day' => $_POST['day'],
	'month' => $_POST['month'],
	'year' => $_POST['year']
		);
    createBirthday($data);
  header('Location:' . URL . 'calender');
}
function deleteThis($id){
  deleteBirthday($id);
  header('Location:' . URL . 'calender');
}

function editThis($id){
  $data['person']= GetABirthday($id);
  render("calender/edit",$data);
}

function editSaveThis(){
    $dataSafe=array(
    'person' => $_POST['person'],
    'day' => $_POST['day'],
  	'month' => $_POST['month'],
  	'year' => $_POST['year'],
    'id'   => $_POST["id"]
    	);
    editBirthday($dataSafe);
    header("location:" . URL . "calender" );
}

  ?>
