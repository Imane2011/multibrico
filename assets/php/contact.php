 <?php

// Connection à la BDD
$dsn = "mysql:dbname=multibricolage;host=localhost;port=3306";
$user = "root";
$password = "";
$dbh = new PDO($dsn, $user, $password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));


require ('../../vendor/autoload.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Contact{
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $sujet;
    private $message;

    public function __construct($nom, $prenom, $email, $tel, $sujet, $message){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->tel = $tel;
        $this->sujet = $sujet;
        $this->message = $message;
    }

    public function envoyerMessage($dbh){
        $sql = "INSERT INTO contact (nom, prenom, email, telephone , sujet, message) VALUES (:nom, :prenom, :email, :tel, :sujet, :message)";
        $req = $dbh->prepare($sql);
        $req->bindValue(':nom',$this->nom,PDO::PARAM_STR);
        $req->bindValue(':prenom',$this->prenom,PDO::PARAM_STR);
        $req->bindValue(':email',$this->email,PDO::PARAM_STR);
        $req->bindValue(':tel',$this->tel,PDO::PARAM_INT);
         $req->bindValue(':sujet',$this->sujet,PDO::PARAM_STR);
        $req->bindValue(':message',$this->message,PDO::PARAM_STR);
       
        if($req->execute()){
            $this->envoyerMail();
           echo "Message bien envoyé !";
        } else {
            echo "Erreur lors de l'envois du message !";
        }
    }

    
public function envoyerMail(){
        $mail = new PHPMailer(true);
        try {
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Pour débugguer              
            $mail->isSMTP();                                            
            $mail->Host       = 'dwwm2425.fr';      //Nom de domaine    
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'contact@dwwm2425.fr'; //User name      
            $mail->Password   = '!cci18000Bourges!';  //Mot de passe    
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    

            //Recipients
            $mail->setFrom('no-reply@dww2425.fr', 'Formulaire contact from - monSite'); // Email d'envoi
            $mail->addAddress("amri.imane018@gmail.com"); //Email pour recevoir les mails (nom optionel)

            //Content
            $fichier = file_get_contents('../../views/contact.html');
            $fichier = str_replace('[PRENOM]',$this->prenom,$fichier);
            $fichier = str_replace('[NOM]',$this->nom,$fichier);
            $fichier = str_replace('[TEL]',$this->tel,$fichier);
            $fichier = str_replace('[MAIL]',$this->email,$fichier);
            $fichier = str_replace('[MESSAGE]',$this->message,$fichier);
            $mail->isHTML(true); //Set email format to HTML
            $mail->Subject = $this->sujet; // Objet du message
            $mail->Body    = $fichier; // Contenu du message
            $mail->AltBody = $fichier; // Contenu alternatif du message

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}

    if(isset($_POST["submit"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]) && !empty($_POST["sujet"]) && !empty($_POST["message"])){
    // var_dump($_POST);
    $contact = new Contact($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['telephone'], $_POST["message"], $_POST['sujet']);
    $contact->envoyerMessage($dbh);
}


?> 