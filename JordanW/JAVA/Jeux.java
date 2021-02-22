import java.util.Scanner;
import jeux.*;

public class Jeux {
        public static void main (String [] args){

            Joueur monHero = new Joueur("MonHeros");
            
			// Choix avec/sans trace
            Scanner sc = new Scanner(System.in);
            String choix="";
            while( !choix.equals("avec") && !choix.equals("sans") ) {
                System.out.println("Mode avec ou sans trace ? (saisir 'avec' OU 'sans') : ");
                choix = sc.nextLine();
            }
            sc.close();

            Boolean boolTrace = false;
            if(choix.equals("avec")){
                boolTrace = true;
            }

            while(monHero.estVivant()){
                De objDe = new De();
                MonstreFacile objMonstre;
                Integer intDe = objDe.lanceLeDe();
                if( intDe < 4){
                    objMonstre = new MonstreFacile();
                }else{
                    objMonstre = new MonstreDifficile();
                }
                while(Boolean.TRUE.equals(monHero.estVivant())){
                    monHero.attaque(objMonstre,boolTrace);
                    if(Boolean.TRUE.equals(objMonstre.getEnVie())){
                        objMonstre.attaque(monHero,boolTrace);
                    }else{
                        monHero.gagne(objMonstre,boolTrace);// ajoute le score & modifie les variables monstreFacile/Difficile
                        break; 
                    }
                }
            }
            monHero.afficheScore();
        }
    }