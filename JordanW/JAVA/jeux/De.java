package jeux;

import java.util.Random;

    public class De{
        
        private Object rand;

		public Integer lanceLeDe(){
            int rValue = ((Random) this.rand).nextInt(6-1);
            return 1 + rValue;
        }
    }
