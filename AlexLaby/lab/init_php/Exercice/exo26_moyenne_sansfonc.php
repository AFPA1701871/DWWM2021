\\ Exo 5
DÉBUT

    intInputUser=1
    note=-1
    nbNoteSup=0
    total=0

    REQUETE "Entrez le nombre de notes que vous souhaitez saisir",intInputUser
    TANTQUE intInputUser <1 OU (intInputUser <> intInputUser//1) FAIRE
        REQUETE "Entrez le nombre de notes que vous souhaitez saisir",intInputUser
    FINTANTQUE

    POUR i=1 JUSQU'A intInputUser FAIRE
        ECRIRE "Entrez la note n° ", i
        LIRE note
    TANTQUE note<0 OU note>20 FAIRE
        REQUETE "Entrez une note valide", note
    FINTANTQUE 
        tablo1[i]=note
        total=total+note
    FINPOUR
        moyenneClasse=total/longueur(tablo1)
    POUR k=1 JUSQU'A compter(tablo1) FAIRE
        SI  tablo1[k] > moyenneClasse ALORS
            nbNoteSup=nbNoteSup+1
        FINSI
    FINPOUR

    ECRIRE "La moyenne de la classe est de :", moyenneClasse
    ECRIRE "Les notes au-dessus de la moyenne sont au nombre de :", nbNoteSup

FIN


                                   
