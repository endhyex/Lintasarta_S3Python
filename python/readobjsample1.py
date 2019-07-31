from flask import Flask, render_template, request
import boto3
import boto3.session

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

response = s3.Object('bucket-sample1', 'object_name.txt').get()
data = response['Body'].read()
metadata = response['Metadata']
print("Data: %s // Metadata: %s" % (data, metadata))