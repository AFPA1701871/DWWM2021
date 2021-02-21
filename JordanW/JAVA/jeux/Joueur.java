package jeux;

public class Joueur{
        private String nom;
        private Integer pointVie;
        private Integer score;
        private Integer monstreDifficile;
        private Integer monstreFacile;
        private static String ligneSuivant = "************************************     Monstre Suivant\n";


        public Joueur(String nom){
            this.nom=nom;
            this.pointVie=50;
            this.score=0;
            this.monstreDifficile=0;
            this.monstreFacile=0;

        }

        public String getNom(){
            return this.nom;
        }

        public Integer setPointVie(int pointVie){
            this.pointVie=pointVie;
            return null;
        }

        public Integer getPointVie(){
            return this.pointVie;
        }

        public Integer setScore(int score){
            this.score=score;
            return null;
        }

        public Integer getScore(){
            return this.score;
        }

        public void setMonstreFacile(Integer monstreFacile){
            this.monstreFacile=monstreFacile;
        }

        public Integer getMonstreFacile(){
            return this.monstreFacile;
        }

        public void setMonstreDifficile(int monstreDifficile){
            this.monstreDifficile=monstreDifficile;
        }

        public Integer getMonstreDifficile(){
            return this.monstreDifficile;
        }

        public Boolean estVivant(){
            if(this.getPointVie()>0){
                return true;
            }
            return false;
        }

        public void attaque(MonstreFacile monstre,Boolean trace){
            De objDe=new De();
            Integer intJoueur = objDe.lanceLeDe();
            Integer intMonstre = objDe.lanceLeDe();

            if(Boolean.TRUE.equals(trace)){System.out.println(this.getNom()+ " attaque : "+intJoueur+ "  le Monstre : "+intMonstre+"\n");} // Trace

            if(intJoueur>=intMonstre){
                monstre.setEnVie(false); // Le monstre est tué
            }
        }

        public void subitDegats(int degats,Boolean trace){
            if(Boolean.TRUE.equals(this.bouclier(trace))){ // Si bouclier active ---. pas de dégats
                degats=0;
            }
            this.setPointVie(this.getPointVie()-degats); 
            if(Boolean.TRUE.equals(trace)){System.out.println("***              héros subit des dégats "+degats+"   reste : "+this.getPointVie()+"\n");} // Trace
        }

        public Boolean bouclier(Boolean trace){ // true si bouclié activé / false sinon
            De objDe = new De();
            int intDe = objDe.lanceLeDe();
            if(Boolean.TRUE.equals(trace)){ System.out.println("***              bouclier "+intDe+" \n");} // Trace
            if(intDe<=2){
                return true; // Bouclié activé
            }else{
                return false; // bouclié désactivé
            }
        }

        public void ajouteScore(int point){
            this.setScore(this.getScore()+point);
        }

        public void ajouteMonstreFacile(){
            this.setMonstreFacile(this.getMonstreFacile()+1);
        }

        public void ajouteMonstreDifficile(){
            this.setMonstreDifficile(this.getMonstreDifficile()+1);
        }

        public void gagne(MonstreFacile monstre,Boolean trace){
            this.ajouteScore(monstre.getPointAdversaire());// Recupere les points du type de monstre

            if(monstre.getNomClass().equals("MonstreFacile")){ // Incremente dans le bon attribut
                this.ajouteMonstreFacile();
            }else{
                this.ajouteMonstreDifficile();
            }
            if(Boolean.TRUE.equals(trace)){ // Trace
                System.out.println("***              héros gagne\n");
                System.out.println(Joueur.ligneSuivant);
            }

        }

        public void afficheScore(){
            String strPhrase="Dommage, vous êtes mort...\nCela dit, vous avez tué ";
            if(this.getMonstreFacile()>1){
                strPhrase+= this.getMonstreFacile()+ " monstres faciles et ";
            }else{
                strPhrase+= this.getMonstreFacile()+ " monstre facile et ";
            }

            if(this.getMonstreFacile()>1){
                strPhrase+= this.getMonstreDifficile()+ " monstres difficiles.\n";
            }else{
                strPhrase+= this.getMonstreDifficile()+ " monstre difficile.\n";
            }
            strPhrase+=" Vous avez ";
            if(this.getScore()>1){
                strPhrase+= this.getScore()+ " points.";
            }else{
                strPhrase+= this.getScore()+ " point.";
            }

            System.out.println(strPhrase+"\n"); // Affiche la phrase
        }

    }