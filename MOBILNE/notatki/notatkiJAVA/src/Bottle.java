public class Bottle {
    private int capacity;
    private int fillLevel;

    public Bottle(int capacity, int fillLevel) {
        this.capacity = capacity;
        this.fillLevel = fillLevel;
    }

    public Bottle() {
        this(0, 0);
    }

    public void pourIn(int amount) {
        fillLevel += amount;
        if (fillLevel > capacity) {
            fillLevel = capacity;
        }
    }

    public void pourOut(int amount) {
        fillLevel -= amount;
        if (fillLevel < 0) {
            fillLevel = 0;
        }
    }

    public void transfer(Bottle otherBottle, int amount) {
        pourOut(amount);
        otherBottle.pourIn(amount);
    }
}
