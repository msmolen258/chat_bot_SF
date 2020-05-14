# Solent Futures Chatbot

<p align="center">
  <img width="300" height="300" src="https://i.ibb.co/NFyb6kZ/Handdrawn-Circle-Logo-2.png">
</p>

Solent Futures Chatbot is part of my Final Major Project. It is created to ultimately support the activities of the career service at Solent University. Chatbot should answer the most frequently asked students' questions.

## Important information

The main purpose of this project was to create a chatbot running on the Facebook Messanger platform. Therefore, the code supports some functions reserved exclusively for this platform such as [Generic Template](https://developers.facebook.com/docs/messenger-platform/send-messages/template/generic/), [Button Template](https://developers.facebook.com/docs/messenger-platform/send-messages/template/button). However, chatbot can be fully tested on local machine, only in some places where Facebook templates were used they may not displayed.

## Getting Started
If you want to run this project on your local machine:
1. Download and unzip the project repository.
2. Go into the directory where you saved the project and use the following command, to start a simple PHP server:

```
php artisan serve
```

3. Next, you can visit the URL and click on the Tinker link or on the Chat widget in the bottom right corner. IMPORTANT: I recommend to use widget since it's more like chat Messenger.

## Alternativly (Facebook Messenger)

1. To link your BotMan with Facebook Messenger, you first need to follow the official quick start guide to create your Facebook Messenger application and retrieve an access token as well as an app secret.
2. Update both of them with the dummy values in your BotMan .env file.

```
FACEBOOK_TOKEN= xxx
FACEBOOK_VERIFICATION= xxx
```

3. Next you can setup the webhook, which connects the Facebook application with your BotMan application.


### Prerequisites

PHP >= 7.1.3


## Built With

* [Botman](https://botman.io/) - The PHP Framework for Chatbot Development
* [Dialogflow](https://dialogflow.com/) - Google's natural language understanding tool


## Authors

* **Magdalena Smolen**
