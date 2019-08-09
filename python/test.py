import boto3
import boto3.session

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

bucketName = raw_input("Name: ") 
# bucket = s3.Bucket(newBucket).create()
s3.Bucket(bucketName).delete()

# for bucket in s3.buckets.all():
#     print(bucket.name)