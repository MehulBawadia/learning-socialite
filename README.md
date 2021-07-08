## Learning Laravel Socialite

Make sure the APP_URL in the .env file is same as the URL in the browser.

### Facebook API:

Follow below lines step by step in order to create a Facebook App and get the app id and app secret.

- Login to [Facebook API](https://developers.facebook.com)
- Navigate to [My Apps](https://developers.facebook.com/apps/)
- Click on "Create App"
- Click on Consumer
- Click on Continue
- Add Display Name as "Learning-Socialite"
- Click on Create. (Provide password for confirmation)
- Click on Set Up in the box that says "Facebook Login"
- Click on "Web"
- Add Site URL: "http://localhost:8000" for in development, else live url should be given
- Click Save, Click Continue
- Click On Settings (visible on the left navigation menu)
- Click on Basic
- Copy App Id and paste it in .env file where FACEBOOK_ID is. Add if not found
- Copy App Secret and paste it in .env file where FACEBOOK_SECRET is. Add if not found
