<?php
class WalletPayService
{
    protected $baseUrl = 'https://walletpay.digital/api';

    public function createWallet($user)
    {
        return Http::post($this->baseUrl . '/create-wallet', [
            'user_id' => $user->id,
            'email' => $user->email,
        ])->json();
    }

    public function getBalance($wallet)
    {
        return Http::get($this->baseUrl . "/wallet-balance/{$wallet}")->json();
    }

    public function sendUSDT($from, $to, $amount)
    {
        return Http::post($this->baseUrl . "/transfer", [
            'from' => $from,
            'to' => $to,
            'amount' => $amount,
        ])->json();
    }
}
