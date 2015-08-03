<?php

interface Verifiable
{
   public function verify();
}

class Cheque
{
   public function verify() {
      // interesting stuff happens
      return true;
   }
}

class CurrencyCheque extends Cheque implements Verifiable {
}

// No error: a new CurrencyCheque object is created
