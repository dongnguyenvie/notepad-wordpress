<?php
// 2 cách khai báo array
$array_one = array(1, "đông", "buồn", "ngủ", 5);
$array_two = [1,2,3,4,5];

var_dump($array_two);
// kiểm tra chiều dài array ifelse
if (sizeof($array_one) > 1) {
    echo $array_one[1];
}

// tạo array có key => value
echo '<br/>';
$obj_one = array("one" => 1, "two" => 2);
$obj_three = ["one" => 1, "two" => 2];
var_dump($obj_three);
// json
echo '<br/>';
$json_string = json_encode($obj_one);
echo $json_string;
$json_parse = json_decode($json_string);

// vòng lặp
foreach($array_one as $k => $v) {
    echo '<br/> k=' . $k . ' v=' . $v ;
}

for($i = 0; $i < sizeof($array_one); $i ++) {
    echo '<br/> for index=' . $i . ' value=' . $array_one[$i] ;
}
?>
<script>
var arrayOne = <?php echo json_encode($array_one, JSON_PRETTY_PRINT); ?>;
console.log(arrayOne)
</script>