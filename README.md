# projet-php
Catalogue e-commerce de vetements. Le projet implément le disign pattern MVC. 
### Model:
  * -un fichier JSON pour le stockage des produits.
  * -un repository qui permet de recupéré les données à partir du fichier JSON.
  * -une entity(class) qui représente un produit. 
### Vue:
  * -une page listant des vatements
  * -une page de détail pour chaque vetement
### Controller:
   retourne une réponse avec l’aide mutuelle des couches Model et Vue.
### Router:
 Index.php Représente un router qui appel les méthodes de controller selon la requete entrante.
  

