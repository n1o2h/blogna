```markdown
#  Blogna : Application de Gestion de Blog avec Laravel

## Documentation de Formation Laravel

### **Jour 1 : Fondamentaux**

** Concepts Clés :**
- **Framework vs Bibliothèque** : Différence philosophique - Framework impose une structure, bibliothèque offre flexibilité
- **Frameworks PHP populaires** : Laravel, Symfony, CodeIgniter

** Application Pratique :**
Création d'une **To-Do List** avec commandes Laravel pour comprendre le flux complet

** Prérequis Techniques :**
- Compatibilité **PHP ↔ Laravel ↔ Docker** obligatoire
- Configuration `.env` adaptée (production vs local)

### ** Sécurité**
- **CSRF Token** : `@csrf` dans les formulaires pour authentifier les requêtes
- Protection automatique des formulaires Laravel

### ** Base de Données**
- **Migrations** : Contrôle de version de la BDD (`php artisan make:migration`)
- Traçabilité complète des modifications schema

### ** Interface**
- **Blade** : Template engine natif Laravel
- Syntaxe élégante et puissante pour les vues

### ** Packages Installés**
```
Breeze    # Authentification complète
Spatie    # Gestion rôles & permissions
```

### ** Docker**
- Installation et configuration Docker
- Création du projet **Blogna** conteneurisé

### ** Erreurs Résolues**
- Clé SQL trop longue
- Sessions `.env` (database → file pour local)
- `viteManifest not found`

