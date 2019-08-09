import boto3
import boto3.session
import cgi

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

form = cgi.FieldStorage()
deleteName = form.getvalue('deletefile')

fileName = raw_input("File: ") 
s3.Object('bucket-sample1', deleteName).delete()