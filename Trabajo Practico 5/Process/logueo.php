<?php
    namespace Process;
    require_once "../Models/User.php";
    use Models\User as User;

    $users = array();

    $user1 = new User("SSoler", "cosme1234", "Sebastian", "Soler", "sebastian@utn.com");
    $user2 = new User("AzarJ", "alAzar123", "Juan", "Azar", "juan_azar@utn.com");
    $user3 = new User("Mari123", "123456Mari", "Maria", "Perez", "mariap@utn.com");	
                     
    /* # Esto o con array_push es lo mismo
    $users[] = $user1;
    $users[] = $user2;
    $users[] = $user3;
    */

    array_push($users, $user1);
    array_push($users, $user2);
    array_push($users, $user3);

    $loggedUser = NULL;

    if($_POST){
        
        foreach($users as  $user){

            if($_POST['userName'] == $user->getUserName()){ 
                
                if($_POST['password'] == $user->getPassword()){
                    
                    $loggedUser = $user;
                }
            }
        }
    }
    
    if($loggedUser != NULL){

        session_start();
        $_SESSION['loggedUser'] = $loggedUser;
        header("location: ../welcome.php");
    }
    else{

        echo "<script> if(confirm('Verifique que los datos ingresados sean correctos'));";
	    echo "window.location = '../index.php';
		</script>";
    }
?>