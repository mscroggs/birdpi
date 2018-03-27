import json
from twitter import *

def send_tweet(location, tweet):
    with open("login.json") as f:
        login = json.load(f)

    twitter = Twitter(
        auth = OAuth(login["access_token"], login["access_secret"], login["consumer_key"], login["consumer_token"]))

    with open(location, 'rb') as f:
        data = f.read()

    results = twitter.statuses.update_with_media(status=tweet, media=data)


