<?php 

$students = [
 [
     'id' => 'IT-001',
     'name' => 'Ridwan',
     'division' => 'PHP Backend',
     'age' => 25,
 ],
 [
     'id' => 'IT-010',
     'name' => 'Achmad',
     'division' => 'Java for Android',
     'age' => 23,
 ],
 [
     'id' => 'IT-005',
     'name' => 'Yusuf',
     'division' => 'ReactJS',
     'age' => 22,
 ],
 [
     'id' => 'IT-002',
     'name' => 'Arief',
     'division' => 'PHP Backend',
     'age' => 21,
 ],
 [
     'id' => 'IT-004',
     'name' => 'Dayat',
     'division' => 'React Native',
     'age' => 21,
 ],
 [
     'id' => 'IT-017',
     'name' => 'Lutfi',
     'division' => 'ReactJS',
     'age' => 18,
 ],
];


// function urutid(array $students) {
// 	foreach ($students as $key => $value) {
// 		$id[] = $value['id'];
// 	}

// 	array_multisort($id, SORT_ASC, $students);
// 	print_r($students);
//  }
//  urutid($students);

// function urutnama(array $students) {
//      foreach ($students as $key => $value) {
//           $id[] = $value['name'];
//      }

//      array_multisort($id, SORT_ASC, $students);
//      print_r($students);
//  }
//  urutnama($students);



// function urutdiv(array $students) {
// 	foreach ($students as $student) {
// 	if ($student['division'] == 'PHP Backend') {
// 		print_r($student);
// 	}
//  }
// }
//  urutdiv($students);


function urutage(array $students) {
	foreach ($students as $student) {
	if ($student['age'] < 25) {
		// $getumur[] = $student['id'];
          print_r($student);         
	}
 }
 // echo "Jumlah = " . count($getumur);
 
}
 urutage($students);


// function rerataage(array $students) {
//      $total = 0;
// 	foreach ($students as $student) {
//              $total += $student['age'];
             
          
//      }
//      $mean =  $total / count($students);	
//      print_r($mean);
// }   
//  rerataage($students);






?>