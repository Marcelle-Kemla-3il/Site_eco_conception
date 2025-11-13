<?php
/**
 * Gestionnaire de la classe Produit
 */
class ProduitDao {

  /** Instance PDO pour la connexion à la BD */
  private $_db;

  public function __construct($db) {
    $this->setDb($db);
  }

  /** Récupère un produit par titre */
  public function get($titre) {
    $rqt = $this->_db->prepare("SELECT id, titre, descr, img FROM produits WHERE titre = ?");
    $rqt->bindParam(1, $titre, PDO::PARAM_STR);
    $rqt->execute();
    return ($donnees = $rqt->fetch()) ? new Produit($donnees) : null;
  }

  /** Récupère un produit par id */
  public function getById($id) {
    $rqt = $this->_db->prepare("SELECT id, titre, descr, img FROM produits WHERE id = ?");
    $rqt->bindParam(1, $id, PDO::PARAM_INT);
    $rqt->execute();
    return ($donnees = $rqt->fetch()) ? new Produit($donnees) : null;
  }

  /** Récupère la liste de tous les produits */
  public function getList() {
    $produits = [];
    $rqt = $this->_db->query("SELECT id, titre, descr, img FROM produits ORDER BY titre");
    while ($donnees = $rqt->fetch()) {
      $produits[] = new Produit($donnees);
    }
    return $produits;
  }

  /** Ajoute un produit */
  public function add($produit) {
    $rqt = $this->_db->prepare("INSERT INTO produits(titre, descr, img) VALUES (?, ?, ?)");
    $rqt->execute([
      $produit->getTitre(),
      $produit->getDescr(),
      $produit->getImg()
    ]);
    return $rqt;
  }

  /** Supprime un produit */
  public function delete($produit) {
    $rqt = $this->_db->prepare("DELETE FROM produits WHERE titre = ?");
    return $rqt->execute([$produit->getTitre()]);
  }

  /** Met à jour un produit */
  public function update($produit) {
    $rqt = $this->_db->prepare("UPDATE produits SET titre = ?, descr = ?, img = ? WHERE id = ?");
    return $rqt->execute([
      $produit->getTitre(),
      $produit->getDescr(),
      $produit->getImg(),
      $produit->getId()
    ]);
  }

  public function setDb(PDO $db) {
    $this->_db = $db;
  }
}
?>
