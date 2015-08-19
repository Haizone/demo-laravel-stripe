## Laravel Stripe demo

This is a demo project of using Stripe with Laravel for a one shot payment. See [http://craftyx.fr/blog/2015/08/19/accepter-des-paiement-sur-votre-sites-en-moins-de-5-minutes-avec-laravel-et-stripe](http://craftyx.fr/blog/2015/08/21/accepter-des-paiement-sur-votre-sites-en-moins-de-5-minutes-avec-laravel-et-stripe) (fr)

### Installation

Clone the repository :

`git clone git@github.com:JulienTant/demo-laravel-stripe.git`

Go to to folder :

`cd demo-laravel-stripe/`

Install dependencies :

`composer install`

Copy the demo env file :

`cp .env.example .env`

Generate a random app key :

`php artisan key:generate`

Set the stripe keys with your own in the *.env* file (see [https://dashboard.stripe.com/account/apikeys](https://dashboard.stripe.com/account/apikeys)) :

    STRIPE_KEY=pk_test_xxxxx
    STRIPE_SECRET=sk_test_xxxxx

Serve the public folder, or use artisan's serve command for simplicity :

`php artisan serve`

Go to [http://localhost:8000/pay](http://localhost:8000/pay). Voilà !