
public class BankAccount {

    private int balance;

    public BankAccount(int i) {
            balance = i;
    }

    public BankAccount() {
            balance = 0;
    }

    public void deposit(int i) {
            balance += i;
    }

    public void withdraw(int i) {
            balance -= i;
            if (balance < 0) {
                    balance -= 5;
            }
    }

    public int getBalance()
    {
            return balance;
    }
}