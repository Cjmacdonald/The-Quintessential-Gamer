<?php
class Verify extends DbConn
{
    public function verifyUser($uid, $verify)
    {
        try {
            $vdb = new DbConn;
            $tbl_members = $vdb->tbl_members;
            $verr = '';
        $vstmt = $vdb->conn->prepare('UPDATE '.$tbl_members.' SET verified = :verify WHERE id = :uid');
            $vstmt->bindParam(':uid', $uid);
            $vstmt->bindParam(':verify', $verify);
            $vstmt->execute();
        } catch (PDOException $v) {
            $verr = 'Error: ' . $v->getMessage();
        }
    $resp = ($verr == '') ? 'true' : $verr;

        return $resp;

    }
}
