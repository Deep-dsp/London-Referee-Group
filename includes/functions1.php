<?php
    // include the file we just wrote - connect
     // like a JS import statement

    $result = array();

    function getAllEvent($conn) {
        $query = "SELECT * FROM events";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        //return $result;
        echo (json_encode($result));
    }

    function getSingleEvent($conn, $id) {
        $query = "SELECT * FROM events WHERE id=" . $id . "";

        $runQuery = $conn->query($query);

        while($row = $runQuery->fetchAll(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        }

        //return $result;
        echo (json_encode($result));
    }