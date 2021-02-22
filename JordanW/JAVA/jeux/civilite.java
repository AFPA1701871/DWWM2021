
public enum JourDeLaSemaine{
    LUNDI(false),
    MARDI(false),
    MERCREDI(false),
    JEUDI(false),
    VENDREDI(false),
    SAMEDI(false),
    DIMANCHE(false);

    private Boolean weekEnd;
    public jourDeLaSemaine(Boolean bool){
        this.weekEnd=bool;
    }

    public Boolean weekEnd(){
        return this.weekEnd;
    }

     public Boolean weekEnd(JourDeLaSemaine jour){
        return this.weekEnd(jour);
    }


}