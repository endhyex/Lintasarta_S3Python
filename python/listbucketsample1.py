from flask import Flask, render_template, request
import boto3
import boto3.session

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

# for obj in s3.Bucket('bucket-dhika').objects.all():
# 	print(obj.key)

for o in s3.Bucket('bucket-sample1').object_versions.all():
    print("Key: " + o.key)
    print("Size: " + str(o.size) + " Byte")
    print("Time: " + str(o.last_modified))
    print("")