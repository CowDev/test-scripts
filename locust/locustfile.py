from locust import HttpLocust, TaskSet

def index(l):
    l.client.get("/")

def group(l):
    l.client.get("/groepen/")

class UserBehavior(TaskSet):
    tasks = {index:1, group:3}

class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait=5000
    max_wait=9000