import static org.junit.Assert.*;

import org.junit.Test;


public class BankAccountTest {

    @Test
    public void testDeposit() {
        BankAccount acc = new BankAccount();
        acc.deposit(50);

        assertEquals(acc.getBalance(), 50);
    }

    @Test
    public void testWithdraw()
    {
        BankAccount acc = new BankAccount(75);
        acc.withdraw(50);

        assertEquals(acc.getBalance(), 25);
    }

    @Test
    public void testWithdrawWithPenalty()
    {
        BankAccount acc = new BankAccount(10);
        acc.withdraw(20);

        assertEquals(acc.getBalance(), -15);
    }
}
