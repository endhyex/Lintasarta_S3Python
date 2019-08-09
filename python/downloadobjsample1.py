from flask import Flask, render_template, request
import boto3
import boto3.session
import webbrowser

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

fileName = raw_input("File: ") 

# s3.Object('bucket-sample1', fileName).upload_file(
#                 '/path/to/source-file',
#                 ExtraArgs={'Metadata': {'customer_id': '42'},
#                            'ServerSideEncryption': 'AES256'})

s3.Object('bucket-sample1', fileName).download_file('C:\Users\User\Downloads')