<?php
function get_questions($userid)
{

    global $db;
    $query = 'SELECT * FROM questions WHERE ownerid = :id'; //experimental


    $statement = $db->prepare($query);
    $statement->bindValue(':id', $userid);
    $statement->execute();
    $accountquestion = $statement->fetchAll();
    $statement->closeCursor();

    return $accountquestion;
}

function get_email($userid)
{
    global $db;
    $query = 'SELECT owneremail FROM questions WHERE ownerid =: id';

    $statement = $db->prepare($query);
    $statement->bindValue(':id',$userid);
    $statement->execute();
    $emailvalue = $statement->fetch();
    $statement->closeCursor();
    $emailresult = $emailvalue['owneremail'];

    return $emailresult;
}
?>