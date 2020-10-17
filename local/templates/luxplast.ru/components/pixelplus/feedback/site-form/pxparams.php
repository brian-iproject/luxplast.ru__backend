<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
$arResult['FIELD_PARAMS'] = Array(
	"NAME"=>Array(
		"TYPE"=>"TEXT"
	),
  "PHONE"=>Array(
      "TYPE"=>"TEXT"
  ),
	 "EMAIL"=>Array(
		"TYPE"=>"TEXT"
	 ),
	"MESSAGE"=>Array(
		"TYPE"=>"TEXTAREA"
	),
	"PHOTO"=>Array(
			"TYPE"=>"FILE",
			"MULTIPLY"=>false,
			"EXTENSIONS"=>"jpg,png,gif",
			"MAX_CNT"=>1, //Макимальное количество файлов (0 - без ограничений)
			"MAX_SIZE_ONE" => 1024000, //512000 = 500Кб Максимальный размер одного файла (0 - без ограничений)
	),
);
?>