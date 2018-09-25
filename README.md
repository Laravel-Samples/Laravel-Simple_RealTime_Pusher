# Laravel 5.7 -  Real-time Public Notifications

App exemplifying how to implement a simplistic real-time public message broadcasting resource along with [Pusher], [Laravel Events], [Laravel Channels], [Laravel Echo] and [Vue.js].

### Home page real-time message updating:
Under the title, in the home page lays a quotation: Genius is one percent inspiration and ninety-nine percent perspiration. - Thomas Edison

This message can be update in real time, it means that all browsers or tabs running the home page of this app will be updated in real time if a new message is sent to:
```
/api/send-message/{your-message}
```
Install composer dependencies:
```
$ composer install
```

Instal npm dependencies and run the mix tasks:
```
$ npm install && npm run dev
```

Install the [pusher/pusher-php-server] via composer:
```
$ composer require pusher/pusher-php-server
```

Install the [laravel-echo] and [pusher-js]:
```
$ npm install --save laravel-echo pusher-js && npm run dev
```
License
----

MIT

**by [Thiago Mallon]**

 [Pusher]: <https://pusher.com/>
 [Vue.js]: <https://vuejs.org/>
 [Laravel Events]: <https://laravel.com/docs/5.7/events>
 [Laravel Channels]: <https://laravel.com/docs/5.7/broadcasting#defining-channel-classes>
 [Laravel Echo]: <https://laravel.com/docs/5.7/broadcasting#installing-laravel-echo>
 [pusher/pusher-php-server]: <https://packagist.org/packages/pusher/pusher-php-server>
 [laravel-echo]: <https://www.npmjs.com/package/laravel-echo>
 [pusher-js]: <https://www.npmjs.com/package/pusher-js>
 [Thiago Mallon]: <https://www.linkedin.com/in/thiago-mallon/>
