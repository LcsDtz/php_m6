<?php
class Utilisateur
{
    public $idUtilisateur;
    public $nom;
    public $pseudo;
    public $password;
    public $email;

    public function __construct($id, $nom, $pseudo, $password, $mail)
    {
        $this->idUtilisateur = $id;
        $this->nom = $nom;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->mail = $mail;
    }

    function getId()
    {
        return $this->idUtilisateur;
    }
    function getNom()
    {
        return $this->nom;
    }
    function getPseudo()
    {
        return $this->pseudo;
    }
    function getPassword()
    {
        return $this->password;
    }
    function getMail()
    {
        return $this->mail;
    }

    function setId($id)
    {
        $this->idUtilisateur = $id;
    }
    function setNom($nom)
    {
        $this->nom = $nom;
    }
    function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }
    function setPassword($password)
    {
        $this->password = $password;
    }
    function setMail($mail)
    {
        $this->mail = $mail;
    }
}
