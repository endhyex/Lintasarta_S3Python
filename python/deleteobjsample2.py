import boto3
import boto3.session

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

s3.Object('bucket=sample2', 'object_name.txt').delete()