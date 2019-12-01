<?php
function get_userId($email)
{
    global $db;
    $query = 'SELECT ownerid FROM questions WHERE ownermail = :owneremail';

    $statements = $db->prepare($query);
    $statements = $db->bindValue(':email',$email);
    $statements->execute();
    $accountid = $statements->fetch();
    $userId = $accountid['ownerid'];
    $statements->closeCursor();
    return $userId;

}


?>