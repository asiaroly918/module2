<?php


$contacts =[];

function addContacts(array &$contacts, string $name, $email, $phone)
{
$contacts[] = ['name' => $name, 'email'=> $email, 'phone' => $phone] ;
// \\arry_puse $contact, ['name' => $name, 'email'=> $email, 'phone' => $phone,] ;

}


function displayContact(array $contacts):void
{
    if(empty($contacts)){
      echo "No contact Availabel.\n.";
    }else{
        foreach($contacts as $contact){
            echo"
               name  :{$contact['name']},
               email :{$contact['email']},
               phone :{$contact['phone']},\n,
        
            ";    
        }
    }
}



while(true){
    echo "\n contact Managment App :\n";
    echo "1.Add contact\n.2 view contact\n.3 Exit\n";
    $choice =(int)readline("Choice An Option : ");

if($choice === 1){
    $name =readline("Enter Your Name: " );
    $email =readline("Enter Your email: " );
    $phone =readline("Enter Your phone: " );
    addContacts($contacts ,$name , $email , $phone);

    echo"$name name added to contacts .\n'" ;
    echo"$email email added to contacts .\n'" ;
    echo"$phone phone added to contacts .\n'" ;


}elseif($choice === 2){
    displayContact($contacts);
} elseif($choice === 3){
    echo "Exiting..."  ."\n";
    break;
}else{
    echo " invalide choice .please try again ." ;
}
}