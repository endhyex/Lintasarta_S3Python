from flask import Flask, render_template, request
import os
import boto3
import boto3.session

session = boto3.session.Session(profile_name='default')
endpoint = 'https://36.37.122.158:8082'

s3 = session.resource(service_name='s3', endpoint_url=endpoint, verify=False)
client = s3.meta.client

app = Flask(__name__)

@app.route('/')
def index():
	return render_template("home.php")

	# # List all buckets for S3 account
	# for bucket in s3.buckets.all():
 #    	print(bucket.name)

 #    # List all objects for a bucket
	# for obj in s3.Bucket('bucket-sample2').objects.all():
	#     print(obj.key)

	# return '''<form method=POST enctype=multipart/form-data action="bucketsample2/putobj">
	# <input type=file name=file>
	# <input type=submit>
	# </form>
	
	# <form method=POST enctype=multipart/form-data action="bucketaldo/putobj">
	# <input type=file name=file>
	# <input type=submit>
	# </form>
	# '''

# @app.route('/bucket')
# def bucket():
# 	return render_template("bucket.php")

# @app.route('/test1')
# def test1():
# 	return render_template("test1.php")

@app.route('/bucket-sample1')
def bucketsample1():
	return render_template("bucketsample1.php")

@app.route('/bucketsample1/putobj', methods=['POST'])
def uploadsample1():

# Delete the object from its bucket
# s3.Object('bucket-sample2', 'tester1.py').delete()

# Put a new object to a bucket
	for file in request.files.getlist("file"):
		filename = file.filename
	
	obj = s3.Object('bucket-sample1', filename)
	obj.put(Body=request.files['file'])

# s3.Object('bucket-sample2', 'tester1.py').put(
#           Body='This is my object\'s data')

# Get object from bucket
# response = obj.get()
# data = response['Body'].read()
# metadata = response['Metadata']
# print("Data: %s // Metadata: %s" % (data, metadata))
	return render_template("bucketsample1.php")

@app.route('/bucket-sample2')
def bucketsample2():
	return render_template("bucketsample2.php")

@app.route('/bucketsample2/putobj', methods=['POST'])
def uploadsample2():

# Delete the object from its bucket
# s3.Object('bucket-sample2', 'tester1.py').delete()

# Put a new object to a bucket
	for file in request.files.getlist("file"):
		filename = file.filename
	
	obj = s3.Object('bucket-sample2', filename)
	obj.put(Body=request.files['file'])

# s3.Object('bucket-sample2', 'tester1.py').put(
#           Body='This is my object\'s data')

# Get object from bucket
# response = obj.get()
# data = response['Body'].read()
# metadata = response['Metadata']
# print("Data: %s // Metadata: %s" % (data, metadata))
	return render_template("bucketsample2.php")

if __name__ == '__main__':
	app.run(debug=True)