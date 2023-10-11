package org.example;

public class Main {
    public class Test implements Interfejs {
        int start;
        int current;
        @Override
        public int getNext() {
            return current++;
        }
        @Override
        public void reset() {
            current = start;
        }
        @Override
        public void setStart(int x) {
            start = x;
            current = x;
        }
    }
    public void main(String[] args) {
        System.out.println("Hello world!");

        Test test = new Test();
        test.setStart(100);
        System.out.println(test.getNext());
        System.out.println(test.getNext());
        System.out.println(test.getNext());
    }


}