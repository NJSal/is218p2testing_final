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

function get_email($userid)             ///should be querying from accounts table b/c everything in questions table is just a copy
{
    global $db;
    $query = 'SELECT email FROM accountsIS218 WHERE id =: id';

    $statement = $db->prepare($query);
    $statement->bindValue(':id',$userid);
    $statement->execute();
    $emailvalue = $statement->fetch();
    $statement->closeCursor();
    $emailresult = $emailvalue['email'];
    return $emailresult;
}
?>