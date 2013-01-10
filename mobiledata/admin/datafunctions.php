<?php
    $cn=mysql_connect("localhost","root","kota");
    if(!$cn)
    {
        echo "Unable to connect";
        die();
    }
    $db=mysql_select_db("mobiledata",$cn);
    if(!$db)
    {
        echo "Unable to open the database for work";
        die();
    }
    function FetchData($query) //Select data from table
    {
        global $cn;
        $rs=mysql_query($query,$cn);
        return $rs;
    }
    function CheckLogin($username, $password)
    {
        $role="nothing";
        $query="select * from logindata where username='$username' and password='$password'";
        $result=FetchData($query);
        $n=mysql_num_rows($result);
        if($n>0)
        {
            $rw=mysql_fetch_array($result);
            $role=$rw["role"];
        }
        return $role;
    }
    function GenerateId($tablename, $start)
    {
        global $cn;
        $key=$start;
        $query="select * from $tablename";
        $result=FetchData($query,$cn);
        $n=mysql_num_rows($result);
        $key=$key+$n;
        return $key;
    }
    function GetName($tablename,$id)
    {
        global $cn;
        $name="";
        $query ="Select * from $tablename where username='$id'";
        //echo $id."<br>";
        $result=mysql_query($query,$cn);
        $n=mysql_num_rows($result);
        if($n>0)
        {
            $rw=mysql_fetch_array($result);
            $name=$rw["name"];
        }
        return $name;
    }
    function GetPhoto($id,$tabname)
    {
        global $cn;
        $name="nothing";
        $query ="Select * from $tabname where username='$id'";
        //echo $id."<br>";
        $result=mysql_query($query,$cn);
        $n=mysql_num_rows($result);
        if($n>0)
        {
            $rw=mysql_fetch_array($result);
            $name=$rw["photo"];
        }
        //echo "<br>".$name."<br>";
        return $name;
    }
?>