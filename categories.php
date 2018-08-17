<?php
//Задание массива
$categories = array(
array(
"id" => 1,
"title" => "Обувь",
'children' => array(
array(
'id' => 2,
'title' => 'Ботинки',
'children' => array(
array('id' => 3, 'title' => 'Кожа'),
array('id' => 4, 'title' => 'Текстиль'),
),
),
array('id' => 5, 'title' => 'Кроссовки',),
)
),
array(
"id" => 6,
"title" => "Спорт",
'children' => array(
array(
'id' => 7,
'title' => 'Мячи'
)
)
),
);


//Функция вывода элементов по их id
function searchCategory($categories, $id){
	$id = $_POST['id'];

	if ($id == 1){
		return $id .'-'. $categories[0]['title'];
	}
	if ($id == 2){
		return $id .'-'. $categories[0]['children'][0]['title'];	
	} 
	if ($id == 3){
		return $id .'-'. $categories[0]['children'][0]['children'][0]['title'];	
	} 
	if ($id == 4){
		return $id .'-'. $categories[0]['children'][0]['children'][1]['title'];
	}
	if ($id == 5){
		return $id .'-'. $categories[0]['children'][1]['title'];
	}
	if ($id == 6){
		return $id .'-'. $categories[1]['title'];
	}
	if ($id == 7){
		return $id .'-'. $categories[1]['children'][0]['title'];
	}

}



if (isset($_POST['submit'])){
	echo searchCategory($categories, $id);
}
?>