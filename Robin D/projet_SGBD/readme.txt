checklist des contrôles sur les requêtes: (un "v" est présent à la fin si le contrôle est compris dans le code)
    POUR tout:
        erreur si la requête ne se termine pas par un ";" v
    
    Pour CREATE TABLE:
        erreur si le fichier existe déjà v
        erreur si on n'entre pas de nom de table v
        erreur si on n'entre aucun nom de champ v
        erreur si les noms de champs contiennent des caractères spéciaux ou accentués v
        erreur si les noms de champs excèdent 25 caractères v
        erreur si 2 champs ont le même nom v
    
    Pour INSERT INTO
        erreur si le fichier n'éxiste pas v
        erreur si le nom de fichier n'est pas présent v
        erreur si on n'entre pas de noms de valeurs v
        erreur si les noms de valeurs excèdent 25 caractères v
        erreur si le nombre de valeurs ne correspond pas au nombre de champs
        erreur si les champs ne sont pas encadrés par des "'" 

    Pour SELECT * FROM
        erreur si le fichier n'existe pas v
        erreur si le nom de fichier n'est pas présent
        
    Pour SELECT nom_du_champ FROM nomTable  
        erreur si le fichier n'existe pas  v
        erreur si le nom de fichier n'est pas présent
        erreur si on n'entre aucun nom de champ
        