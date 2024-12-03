import tweepy
import tweepy.client
import pandas as pd
import time

consumer_key= "RCcJaqsq3TVjcI2cj7WX78ltU"
consumer_secret ="FgYkbNQcrefI6FEi2RmTGQsfeVXMIkfGb0UBI1qNS1lWRo0Fx8"

access_token="1863412347022303232-oOXTLFJU1EVXvjxXMaYjvdukI6MnNO"
access_secret="AGVtePcmLGqtJpR7jBGArOR1X0WavyEMdMwwB0pagdPX6"

client= tweepy.Client(
    consumer_key=consumer_key,consumer_secret=consumer_secret,
    access_token=access_token,access_token_secret=access_secret)

auth=tweepy.OAuth1UserHandler(consumer_key,consumer_secret,access_token,access_secret)


#Sirve para darle like a un tweet
#client.like(1863428222605550016)
#Sirve para hacer un retweet
#client.retweet(1863428222605550016)

#Una RESPUESTA
#client.create_tweet(in_reply_to_tweet_id=1863428222605550016,text="Esta es una respuesta al tweet")



api=tweepy.API(auth)

#imagenes=["mancuernas.png","rodilleras.png","rueda.png"]
#textos=["Este es el primer tweet","Este es el segundo", "Este es el tercero"]



#for imagen,texto in zip(imagenes,textos):
   # media_id=api.media_upload(filename=imagen).media_id_string
    #client.create_tweet(text=texto,media_ids=[media_id])


client.create_tweet(text="Hola amigos!!")
