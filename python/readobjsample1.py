from flask import Flask, render_template, request
import boto3
import boto3.session
import webbrowser

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

fileName = raw_input("File: ") 
# response = s3.Object('bucket-sample1', fileName).get()
# data = response['Body'].read()
# metadata = response['Metadata']
# print("Data: %s // Metadata: %s" % (data, metadata))

url = client.generate_presigned_url('get_object', 
                                    {'Bucket': 'bucket-sample1', 'Key': fileName},
                                    ExpiresIn=3600)
# mozilla_path = 'open -a /Applications/Google\ Chrome.app %s'
print("%s" % (url))
# webbrowser.get(mozilla_path).open(url)

# webbrowser.open_new_tab('%s' % (url)) 