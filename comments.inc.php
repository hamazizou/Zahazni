<?php

function setcomments($conn)
 {
    if (isset($_POST['Commenter']))
     { 
  
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql="INSERT INTO commentaires(uid,date,message) values('$uid','$date', '$message') ";

    $result= $conn->query($sql);
     }
     }


     function getcomments($conn)
     {
       $sql = "SELECT * FROM commentaires";
       $result= $conn->query($sql);
      while($row= $result->fetch_assoc())
      {
         $id=$row['uid'];
         $sql2 = "SELECT * FROM user WHERE id='$id'";
         $result2= $conn->query($sql2);
         if($row2= $result2->fetch_assoc())
         {
            echo"<div class='comment-box'><p>";
            echo  $row2['uid']."<br>  ";
            echo  $row['date']."<br> ";   
            echo  nl2br($row['message']) ;
                 echo"</p>";
                 if(isset($_SESSION['id'])){
                    if($_SESSION['id']==$row2['id']){
                     echo" <form class='delete-button' method='POST' action='".deletecomments($conn)."'>
                     <input type='hidden' name='cid' value='".$row['cid']."'>
                     <button type ='submit' name='commentdelete'> Supprimer </button>
                     </form>
          
                     <form class= 'edit-button'method='POST'  action='editcomments.php'>
                     <input type='hidden' name='cid' value='".$row['cid']."'>
                     <input type='hidden' name='uid' value='".$row['uid']."'>
                     <input type='hidden' name='date' value='".$row['date']."'>
                     <input type='hidden' name='message' value='".$row['message']."'>
                     <button> Modifier </button>
                     </form>";
                    } else {
                     echo" <form class='edit-button' method='POST' action='".deletecomments($conn)."'>
                     <input type='hidden' name='cid' value='".$row['cid']."'>
                     <button type ='submit' name='commentdelete'> Répondre </button>
                     </form>";

                    }

                 } else{
                    echo"<p class='commentmessage'>vous devez vous connecter pour répondre</p>";
                 }
                
                echo" </div>";

         
     
      }
      }
     
     }
     function editcomments($conn)
 {
    if (isset($_POST['Commenter']))
     { 
    $cid = $_POST['cid'];
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $sql="UPDATE commentaires SET message='$message' WHERE  cid='$cid'";
    $result= $conn->query($sql);
    header("Location: index.php");
     }
     }

     function deletecomments($conn){
        if (isset($_POST['commentdelete']))
        { 
       $cid = $_POST['cid'];
       
   
       $sql="DELETE FROM commentaires WHERE cid='$cid'";
       $result= $conn->query($sql);
       header("Location: index.php");
        }

     }

     

     function setlogin($conn)
     {   
         
        if (isset($_POST['SeConnecter'])){

        
         $uid=$_POST['uid'];
         $pwd=$_POST['pwd'];

       $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
       $result= $conn->query($sql);
       if(mysqli_num_rows($result) > 0 ){
        if($row= $result->fetch_assoc())
        {   $_SESSION['uid'] = $row['uid'];
            $_SESSION['id'] = $row['id'];
            header("Location: index.php");
            exit();

       }
       else {
         header("Location: index.php");
        exit();

       }
      
         
      }
     
     }
    }

     function userlogout()
     {  if (isset($_POST['Sedeconnecter'])){
        session_start();
        session_destroy();
        header("Location: index.php");
        exit();

    }


     }
