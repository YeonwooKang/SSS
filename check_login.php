<?php
	
$servername = "http://localhost:8080/"; // 아마존 RDB 주소

// MySQL 계정 정보
$username = "root";
$password = "ywmj2015";

// DB이름
$dbname = "awsdb";

// 사용자가 입력한 계정 정보
// 안드로이드 측에서 postData.put("", "");으로 보내옴
$id = $_POST["id"]; // 아이디
$pw = $_POST["pw"]; // 비밀번호

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// 한글 깨지는 문제 발생 아래 코드로 해결 안 됨
mysql_query("set names utf8");
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

// Check connection
 if ($conn->connect_error) {
    // 제대로 연결되지 않은 경우 에러 메세지 출력 
     die("Connection failed: " . $conn->connect_error);
     }

     // id로 pw를 찾음  
     $sql = "SELECT pw FROM User WHERE id = '" . $id . "'";
     $id_result = $conn->query($sql); // 결과 저장

     $db_id = $row["id"]; // DB에서 가져온 id 저장
     echo "DB에서 가져온 id: " . $db_id . "<br>";        
     echo "사용자가 입력한 id: " . $id . "<br>";

     // 아이디가 존재하는 경우 
     if ($id_result->num_rows > 0) {

        $password = $row["pw"]; // DB에서 가져온 비밀번호 저장
        echo "DB에서 가져온 비밀번호: " . $password . "<br>";        
        echo "사용자가 입력한 비밀번호: " . $pw . "<br>";

        // 비밀번호 비교 
        if(strcmp($pw, $password)==0) {
            // 비밀번호가 맞으면 이름 가져오기
            $sql = "SELECT name FROM User WHERE id = '" . $id . "'";
            $pw_result = $conn->query($sql); // 결과 저장
            echo $name . "(" . $id . ")" . "has been logined";
        } else { 
            // 비밀번호가 잘못된 경우
            echo "incorrect password";
        }

     } else { // 아이디가 존재하지 않는 경우
        echo "user " . $id . "does not exist";

     }

     $conn->close();

?>
