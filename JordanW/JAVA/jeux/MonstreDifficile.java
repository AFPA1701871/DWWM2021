package jeux;

    public class MonstreDifficile extends MonstreFacile{

        public MonstreDifficile(){
            super();
            this.nomClass="Monstre Difficile";
            this.pointAdversaire=2;
        }

        @Override
        public void attaque(Joueur joueur,Boolean trace){
            super.attaque(joueur,trace);
            this.sortMagique(joueur,trace); // Surcharge
        }

        public void sortMagique(Joueur joueur,Boolean trace){
            De objDe = new De();
            Integer intDe = objDe.lanceLeDe();
            if(Boolean.TRUE.equals(trace)){System.out.println("***              sort magique "+intDe+" \n");} // trace
            if(intDe !=6){ // Inflige des dégats
                joueur.subitDegats(intDe*5,trace);
            }else{
                joueur.subitDegats(intDe*0,trace);
            }
        }

    }