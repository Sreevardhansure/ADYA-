<?php
$stuemai=$_POST["stuemail"];
$token=bin2hex(random_bytes(16));
$token_hash=hash("sha256",$token);
$expiry=date("Y-m-d H:i:s",time()+60 * 30);
$mysqli = require __DIR__ .  "/login.php";
$sql="UPDATE user
        SET reset_token_hash=?,
        reset_token_expires_at=?
        WHERE stuemail = ?";
$stmt=$mysqli->prepare($sql);
$stmt->bind_param("sss",$token_hash,$expiry,$stuemai);
$stmt->execute();
if($mysqli->affected_rows)
{
    
}
?>