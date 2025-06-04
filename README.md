# DevOps Assessment: Yii2 + Docker Swarm + CI/CD + Ansible

## Objective

Deploy a sample PHP Yii2 application using Docker Swarm and NGINX (host-based reverse proxy) on an AWS EC2 instance. Automate the infrastructure setup using Ansible and implement CI/CD with GitHub Actions.

---

## Project Structure

```
.
├── ansible/
│   ├── inventory
│   ├── playbook.yml
│── nginx/
│   │─ yii2.conf
├── .github/
│   └── workflows/
│       └── deploy.yml
├── docker-compose.yml
├── Dockerfile
├── README.md
```

---

## 1. Setup Instructions

### ✅ Prerequisites

* AWS EC2 Ubuntu Instance
* SSH key (`.pem`) with permission 400
* Docker Hub account
* GitHub repository linked with the project

### 🔧 Ansible Setup

#### 1.1 SSH Key Permissions

```bash
chmod 400 path/to/your-key.pem
```

#### 1.2 `ansible/inventory` file

```
[web]
<EC2_PUBLIC_IP> ansible_user=ubuntu ansible_ssh_private_key_file=path/to/your-key.pem
```

#### 1.3 Run Ansible Playbook

```bash
cd ansible
ansible-playbook -i inventory playbook.yml
```

---

## 2. Docker Setup

### 🔨 Dockerfile

Basic PHP-FPM + Nginx setup for Yii2 application.

### 🐳 docker-compose.yml

Defines the app service and connects it to an overlay network.

---

## 3. NGINX Configuration

File: `ansible/nginx/yii2.conf`

```nginx
server {
    listen 80;
    server_name your-domain.com;

    location / {
        proxy_pass http://localhost:8080;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
    }
}
```

Link config and restart NGINX (done via Ansible).

---

## 4. CI/CD with GitHub Actions

### 🔁 `.github/workflows/deploy.yml`

```yaml
name: Deploy to EC2

on:
  push:
    branches:
      - main

jobs:
  deploy:
    runs-on: ubuntu-latest

    steps:
    - name: Checkout code
      uses: actions/checkout@v2

    - name: Set up SSH
      uses: webfactory/ssh-agent@v0.5.4
      with:
        ssh-private-key: ${{ secrets.EC2_SSH_KEY }}

    - name: Deploy via SSH
      run: |
        ssh -o StrictHostKeyChecking=no ubuntu@<EC2_PUBLIC_IP> << 'EOF'
          cd /home/ubuntu/your-app-dir
          git pull origin main
          docker pull <your-dockerhub-username>/yii2-app:latest
          docker service update --image <your-dockerhub-username>/yii2-app:latest yii2_service
        EOF
```

### 🛡 Secrets Required:

* `EC2_SSH_KEY`: Your EC2 private key

---

## 5. Ansible Playbook Overview

### `playbook.yml` includes:

* Install Docker, Docker Compose
* Install NGINX, PHP dependencies
* Initialize Docker Swarm (if not already)
* Create overlay network (if not exists)
* Deploy Yii2 app via Docker stack
* Set up NGINX reverse proxy

---

## 6. Assumptions

* Yii2 app is public or cloned inside the EC2 instance
* Docker image is built and pushed manually or via GitHub Actions
* NGINX runs on host (not containerized)

---

## 7. Testing the Deployment

1. Visit `http://<EC2_PUBLIC_IP>`
2. You should see the Yii2 homepage or app interface

---

## 8. Cleanup & Rollback (Optional)

```bash
docker service ls
docker service rm <service_name>
docker swarm leave --force
```

---

## ✅ Success

You're now running a containerized Yii2 app with automated provisioning and CI/CD!
