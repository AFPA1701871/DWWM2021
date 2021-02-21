package jeux;

    public class MonstreFacile {
        protected Boolean enVie;
        protected Integer pointAdversaire;
        protected String nomClass;

        public MonstreFacile(){
            this.enVie=true;
            this.pointAdversaire=1;
            this.nomClass="Monstre Facile";
        }

        public void setEnVie(Boolean bool){
            this.enVie=bool;
        }
        public Boolean getEnVie(){
            return this.enVie;
        }

        public void attaque(Joueur joueur,Boolean trace){
            De objDe=new De();
            Integer intJoueur = objDe.lanceLeDe();
            Integer intMonstre = objDe.lanceLeDe();

            if(Boolean.TRUE.equals(trace)){ // Trace
                System.out.println("C'est un Monstre "+this.getNomClass()+"\n");
                System.out.println("Monstre  attaque : "+intMonstre+ "  "+joueur.getNom()+" : "+intJoueur+"\n");
            } 
            if(intMonstre>intJoueur){
                joueur.subitDegats(10,trace); // objet lui même tué
            }
        }

        public Integer getPointAdversaire(){
            return this.pointAdversaire;
        }

        public String getNomClass(){
            return this.nomClass;
        }

    }   